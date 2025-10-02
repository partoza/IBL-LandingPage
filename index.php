<?php include 'includes/header.php'; ?>

<?php
// Default page
$page = $_POST['page'] ?? 'home';

// Allowed pages
$allowed = ['home', 'ourstory', 'service', 'contact'];

if (in_array($page, $allowed)) {
    include "pages/$page.php";
} else {
    // 404 page with red/white theme
    echo '
    <section class="w-full h-screen flex flex-col items-center justify-center bg-red-800 text-white">
      <h1 class="text-6xl font-bold mb-4">404</h1>
      <p class="text-xl mb-6">Page Not Found</p>
      <form method="post">
        <button name="page" value="home" type="submit" 
          class="px-6 py-3 bg-white text-red-800 rounded-lg shadow hover:bg-red-100 transition">
          Back to Home
        </button>
      </form>
    </section>
    ';
}
?>

<?php include 'includes/footer.php'; ?>
