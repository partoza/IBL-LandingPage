<?php
// mail_config.php
// Centralized mail configuration and helper using PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Prefer Composer autoload if available. If not, fall back to the bundled PHPMailer
// shipped under phpmailer/phpmailer. This keeps the project working without
// running `composer install`.
$vendorAutoload = __DIR__ . '/../vendor/autoload.php';
if (file_exists($vendorAutoload)) {
    require_once $vendorAutoload;
} else {
    // Include PHPMailer classes directly from the bundled copy
    $pharDir = __DIR__ . '/../phpmailer/phpmailer/src/';
    if (file_exists($pharDir . 'PHPMailer.php')) {
        require_once $pharDir . 'Exception.php';
        require_once $pharDir . 'PHPMailer.php';
        require_once $pharDir . 'SMTP.php';
    }
}

// Default recipient (as requested)
define('MAIL_TO_ADDRESS', 'partozajohnrex@gmail.com');
define('MAIL_TO_NAME', 'Site Contact');

// SMTP configuration — override these in a production config or env variables
// For Hostinger, use the SMTP details provided by Hostinger (e.g., smtp.hostinger.com)
// Determine SMTP settings from environment where available. This makes local testing
// with services like Mailtrap or real SMTP servers easier — set SMTP_HOST (and
// credentials) in your environment and SMTP will be enabled automatically.
// Optionally load a .env file if vlucas/phpdotenv is installed. This is non-fatal
// — if phpdotenv isn't available we'll just rely on actual environment vars.
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    // Check if Dotenv class is available (vlucas/phpdotenv)
    if (class_exists(\Dotenv\Dotenv::class)) {
        try {
            $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
            $dotenv->safeLoad(); // don't throw if .env is missing
        } catch (Throwable $e) {
            // ignore - we'll fall back to getenv()
        }
    }
}

$SMTP = [
    // If SMTP_ENABLED is explicitly provided, respect it. Otherwise enable SMTP
    // when an SMTP_HOST is present in the environment.
    // Enable SMTP when explicitly requested, or when an SMTP host is provided,
    // or when both SMTP_USER and SMTP_PASS are present (credentials supplied).
    'enabled' => (getenv('SMTP_ENABLED') !== false)
        ? filter_var(getenv('SMTP_ENABLED'), FILTER_VALIDATE_BOOLEAN)
        : (
            (getenv('SMTP_HOST') !== false && getenv('SMTP_HOST') !== '')
            || (
                getenv('SMTP_USER') !== false && getenv('SMTP_USER') !== ''
                && getenv('SMTP_PASS') !== false && getenv('SMTP_PASS') !== ''
            )
        ),
    'host' => getenv('SMTP_HOST') ?: 'smtp.hostinger.com',
    // Don't hardcode credentials here. Read username/password from environment.
    'username' => getenv('SMTP_USER') ?: 'va_hannah@ideasbeyondlimits.com',
    'password' => getenv('SMTP_PASS') ?: null,
    'port' => getenv('SMTP_PORT') ?: 465,
    'secure' => getenv('SMTP_SECURE') ?: 'ssl', // 'tls' or 'ssl'
    'from_email' => getenv('MAIL_FROM') ?: 'noreply@yourdomain.BLcom',
    'from_name' => getenv('MAIL_FROM_NAME') ?: 'IBL Website',
];

// Helper: check if SMTP host is reachable (simple TCP connect). This helps
// avoid attempting mail() on systems without an MTA when internet is available.
function smtp_host_reachable($host, $port, $timeout = 3)
{
    if (empty($host) || empty($port)) {
        return false;
    }
    // Suppress warnings and try a short TCP connection
    $errNo = 0;
    $errStr = '';
    $fp = @fsockopen($host, (int)$port, $errNo, $errStr, $timeout);
    if ($fp) {
        fclose($fp);
        return true;
    }
    return false;
}

// If SMTP_ENABLED is not explicitly provided, enable SMTP when either:
// - an SMTP host is configured and reachable, OR
// - credentials (username + password) are provided (common case for hosted SMTP).
if (getenv('SMTP_ENABLED') === false) {
    $hostConfigured = (getenv('SMTP_HOST') !== false && getenv('SMTP_HOST') !== '') || !empty($SMTP['host']);
    $hostReachable = $hostConfigured && smtp_host_reachable($SMTP['host'], $SMTP['port']);
    $hasCredentials = !empty($SMTP['username']) && !empty($SMTP['password']);

    $SMTP['enabled'] = $hostReachable || $hasCredentials;
}

/**
 * send_contact_mail
 * Sends an email using PHPMailer. Tries SMTP if enabled/configured, otherwise uses PHP mail().
 * Returns an array with keys: success (bool), message (string).
 */
function send_contact_mail($subject, $bodyHtml, $bodyPlain, $replyTo = null, $replyName = null)
{
    global $SMTP;

    // Try using PHPMailer
    try {
        $mail = new PHPMailer(true);

        if (!empty($SMTP['enabled'])) {
            // SMTP
            $mail->isSMTP();
            $mail->Host = $SMTP['host'];
            $mail->SMTPAuth = true;
            $mail->Username = $SMTP['username'];
            $mail->Password = $SMTP['password'];
            $mail->SMTPSecure = $SMTP['secure'] === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = (int)$SMTP['port'];
        } else {
            // Try PHPMailer's mail() transport (uses PHP mail())
            $mail->isMail();
        }

        // Set From to the configured from email. For better UX, include the sender's
        // name in the From header if available; however, don't set the From email
        // to the user's email because many SMTP providers require the From address
        // to match the authenticated identity. Instead, set Reply-To to the user.
        $fromName = $SMTP['from_name'];
        if (!empty($replyName)) {
            // include sender name in the From display name next to site name
            $fromName = sprintf('%s (via %s)', $replyName, $SMTP['from_name']);
        }

        $mail->setFrom($SMTP['from_email'], $fromName);
        $mail->addAddress(MAIL_TO_ADDRESS, MAIL_TO_NAME);

        if ($replyTo && filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
            if (!empty($replyName)) {
                $mail->addReplyTo($replyTo, $replyName);
            } else {
                $mail->addReplyTo($replyTo);
            }
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $bodyHtml;
        $mail->AltBody = $bodyPlain;

        $mail->send();

        return ['success' => true, 'message' => 'Email sent successfully'];
    } catch (Exception $e) {
        // If PHPMailer fails, try PHP mail() as a last resort (non-HTML)
        $to = MAIL_TO_ADDRESS;
        $headers = 'From: ' . $SMTP['from_name'] . ' <' . $SMTP['from_email'] . "\r\n";
        if ($replyTo && filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
            $headers .= 'Reply-To: ' . $replyTo . "\r\n";
        }
        $headers .= 'MIME-Version: 1.0\r\n';
        $headers .= 'Content-Type: text/plain; charset=UTF-8\r\n';

        $plain = strip_tags($bodyPlain ?: $bodyHtml);

        $ok = @mail($to, $subject, $plain, $headers);
        if ($ok) {
            return ['success' => true, 'message' => 'Email queued via PHP mail()'];
        }

        return ['success' => false, 'message' => 'Mail send failed: ' . $e->getMessage()];
    }
}

// End of file
