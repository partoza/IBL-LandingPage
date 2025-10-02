<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ideas Beyond Limits</title>
  <link rel="icon" type="image/png" href="./assets/iblLogo.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      margin: 0;
      padding: 0;
    }

    .nav-active {
      color: #dc2626;
      font-weight: bold;
    }
  </style>
</head>

<body class="bg-gray-100 text-gray-900">
  <!-- Navbar -->
  <header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <img src="./assets/iblLogo.png" alt="Company Logo" class="w-20">
      <nav>
        <!-- Desktop Nav -->
        <form method="post" class="hidden md:flex space-x-6">
          <button name="page" value="home" class="hover:text-red-600">Home</button>
          <button name="page" value="ourstory" class="hover:text-red-600">Our Story</button>
          <button name="page" value="service" class="hover:text-red-600">Our Services</button>
          <button name="page" value="contact" class="hover:text-red-600">Contact Us</button>
        </form>
      </nav>

      <!-- Mobile menu button -->
      <button id="menu-btn" class="md:hidden text-gray-700 focus:outline-none text-2xl">
        ☰
      </button>
    </div>
    <!-- Mobile Nav -->
    <div id="mobile-menu" class="hidden md:hidden bg-gray-50 border-t border-gray-200">
      <form method="post" class="flex flex-col p-4 space-y-2">
        <button name="page" value="home" class="block text-left hover:text-red-600">Home</button>
        <button name="page" value="ourstory" class="block text-left hover:text-red-600">Our Story</button>
        <button name="page" value="service" class="block text-left hover:text-red-600">Our Services</button>
        <button name="page" value="contact" class="block text-left hover:text-red-600">Contact Us</button>
      </form>
    </div>


  </header>

  <main class="pt-24">
    <!-- Page content -->
  </main>

  <!-- Mobile Menu Script -->
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    // Active nav (client-side highlight based on page value)
    const currentPage = "<?php echo $_POST['page'] ?? 'home'; ?>"; // fallback: home
    document.querySelectorAll('form button').forEach(btn => {
      if (btn.value === currentPage) {
        btn.classList.add('nav-active');
      }
    });
  </script>
</body>

</html>