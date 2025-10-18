<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Only accept POST via AJAX or form submit
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['success' => false, 'message' => 'Method not allowed']);
  exit;
}

// Read inputs (support both fetch/FormData and normal form submit)
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : 'Project Inquiry';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

$errors = [];
if ($name === '') $errors[] = 'Name is required.';
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email address is required.';
if ($subject === '') $errors[] = 'Subject is required.';
if ($message === '') $errors[] = 'Message is required.';

header('Content-Type: application/json; charset=utf-8');

if (!empty($errors)) {
  http_response_code(422);
  echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
  exit;
}

// Basic sanitization for output
$safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$safe_message = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

// Compose professional HTML email body
$htmlBody = "<html><body style=\"font-family:Arial,Helvetica,sans-serif;color:#111;line-height:1.5\">" .
  "<h2 style=\"color:#b91c1c;margin-bottom:0.5rem\">Project Inquiry</h2>" .
  "<p style=\"margin-top:0;color:#555\">You have received a new inquiry from the website contact form. Details are below.</p>" .
  "<table style=\"width:100%;border-collapse:collapse;margin-top:1rem\">" .
  "<tr><td style=\"padding:8px;border:1px solid #eee;width:120px;font-weight:600\">Name</td><td style=\"padding:8px;border:1px solid #eee\">{$safe_name}</td></tr>" .
  "<tr><td style=\"padding:8px;border:1px solid #eee;font-weight:600\">Email</td><td style=\"padding:8px;border:1px solid #eee\">{$safe_email}</td></tr>" .
  "<tr><td style=\"padding:8px;border:1px solid #eee;font-weight:600\">Subject</td><td style=\"padding:8px;border:1px solid #eee\">{$safe_subject}</td></tr>" .
  "<tr><td style=\"padding:8px;border:1px solid #eee;font-weight:600;vertical-align:top\">Message</td><td style=\"padding:8px;border:1px solid #eee\">{$safe_message}</td></tr>" .
  "</table>" .
  "<p style=\"color:#777;font-size:0.9rem;margin-top:1rem\">This message was sent from your website contact form.</p>" .
  "</body></html>";

// Send using PHPMailer
try {
  $mail = new PHPMailer(true);

  //Server settings
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'iblwebproject@gmail.com';
  $mail->Password   = 'gkbmfiiccaefbqju';
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;

  //Recipients
  // From: use site email but include sender name; keep reply-to as sender
  $mail->setFrom('iblwebproject@gmail.com', 'IBL Website');
  $mail->addAddress('partozajohnrex@gmail.com', 'Site Owner');
  $mail->addReplyTo($email, $name);

  // Content
  $mail->isHTML(true);
  $mail->Subject = '[Website Contact] ' . $safe_subject;
  $mail->Body    = $htmlBody;
  $mail->AltBody = "Professional Inquiry\n\nName: {$name}\nEmail: {$email}\nSubject: {$subject}\n\nMessage:\n{$message}";

  $mail->send();

  echo json_encode(['success' => true, 'message' => 'Message sent successfully.']);
  exit;
} catch (Exception $e) {
  http_response_code(500);
  echo json_encode(['success' => false, 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
  exit;
}

?>