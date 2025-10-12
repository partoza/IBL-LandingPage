<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ideas Beyond Limits</title>
  <link rel="icon" type="image/png" href="./assets/iblLogo.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
` 


  <style>
    /* Enhanced smooth scrolling */
    html {
      scroll-behavior: smooth;
      overflow-x: hidden;
      scroll-padding-top: 100px;
      /* Account for fixed header */
    }

    body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      width: 100%;
      transition: all 0.3s ease;
    }

    /* Smooth section transitions */
    section {
      transition: all 0.3s ease;
    }

    /* Smooth page transitions */
    .page-transition {
      transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
    }

    .page-transition.fade-out {
      opacity: 0;
      transform: translateY(20px);
    }

    .page-transition.fade-in {
      opacity: 1;
      transform: translateY(0);
    }

    /* Navigation hover effects - Underline */
    .nav-link {
      position: relative;
      transition: all 0.3s ease;
      padding: 0.5rem 1rem;
      border-radius: 0.375rem;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 2px;
      background: linear-gradient(90deg, #dc2626, #ef4444);
      transition: all 0.3s ease;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .nav-link:hover {
      color: #dc2626;
    }

    .nav-link.active {
      color: #dc2626;
      font-weight: 600;
    }

    .nav-link.active::after {
      width: 100%;
    }

    /* Marquee animation */
    @keyframes marquee {
      0% {
        transform: translateX(0%);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    .animate-marquee {
      display: flex;
      width: max-content;
      animation: marquee 25s linear infinite;
    }

    /* Mobile menu animations */
    .mobile-menu-enter {
      opacity: 0;
      transform: translateY(-10px);
      transition: all 0.3s ease;
    }

    .mobile-menu-enter.active {
      opacity: 1;
      transform: translateY(0);
    }

    /* Enhanced mobile responsiveness */
    @media (max-width: 768px) {
      .nav-link {
        padding: 0.75rem 1rem;
        font-size: 1.1rem;
      }


      .card-hover:hover {
        transform: translateY(-2px);
      }
    }

    /* Improved touch interactions for mobile */
    @media (hover: none) and (pointer: coarse) {
      .card-hover:active {
        transform: translateY(-2px);
      }

      .btn-hover:active::before {
        left: 100%;
      }
    }

    /* Smooth transitions for all interactive elements */
    * {
      transition: color 0.3s ease, background-color 0.3s ease, transform 0.3s ease, opacity 0.3s ease;
    }

    /* Enhanced button hover effects */
    .btn-hover {
      position: relative;
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .btn-hover::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s ease;
    }

    .btn-hover:hover::before {
      left: 100%;
    }

    /* Card hover effects */
    .card-hover {
      transition: all 0.3s ease;
    }

    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
  </style>
</head>

<body class="bg-gray-100 text-gray-900">
  <!-- Navbar -->
  <header class="bg-white shadow-lg fixed top-0 left-0 w-full z-50 backdrop-blur-sm bg-white/95">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <img src="./assets/iblLogo.png" alt="Company Logo" class="w-20 hover:scale-105 transition-transform duration-300">

      <!-- Desktop Nav -->
      <nav class="hidden md:flex space-x-2">
        <a href="#home" class="nav-link">Home</a>
        <a href="#ourstory" class="nav-link">Our Story</a>
        <a href="#service" class="nav-link">Our Services</a>
        <a href="#contact" class="nav-link">Contact Us</a>
      </nav>

      <!-- Mobile menu button -->
      <button id="menu-btn"
        class="md:hidden text-gray-700 focus:outline-none text-2xl hover:text-red-600 transition-colors duration-300">
        <i class="bi bi-list"></i>
      </button>
    </div>

    <!-- Mobile Nav -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 mobile-menu-enter">
      <nav class="flex flex-col p-4 space-y-2">
        <a href="#home" class="nav-link block text-left py-2">Home</a>
        <a href="#ourstory" class="nav-link block text-left py-2">Our Story</a>
        <a href="#service" class="nav-link block text-left py-2">Our Services</a>
        <a href="#contact" class="nav-link block text-left py-2">Contact Us</a>
      </nav>
    </div>
  </header>

  <main class="pt-24">
    <!-- Page content -->
  </main>

  <!-- Enhanced JavaScript -->
  <script>
    // Mobile menu toggle
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      mobileMenu.classList.toggle('active');
    });

    // Enhanced smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          const headerHeight = document.querySelector('header').offsetHeight;
          const targetPosition = target.offsetTop - headerHeight - 20; // Extra 20px padding

          // Smooth scroll with easing
          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });

          // Close mobile menu if open
          if (!mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('active');
          }

          // Update active navigation immediately for better UX
          setTimeout(() => {
            updateActiveNav();
          }, 100);
        }
      });
    });

    // Active navigation highlighting
    function updateActiveNav() {
      const sections = document.querySelectorAll('section[id]');
      const navLinks = document.querySelectorAll('.nav-link');
      const headerHeight = document.querySelector('header').offsetHeight;

      let current = '';

      sections.forEach(section => {
        const sectionTop = section.offsetTop - headerHeight - 100;
        const sectionHeight = section.offsetHeight;

        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
          current = section.getAttribute('id');
        }
      });

      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
          link.classList.add('active');
        }
      });
    }

    // Enhanced scroll event handling for smooth performance
    let ticking = false;
    let lastScrollY = 0;

    function onScroll() {
      if (!ticking) {
        requestAnimationFrame(() => {
          updateActiveNav();
          ticking = false;
        });
        ticking = true;
      }
    }

    // Throttled scroll event listener with passive option for better performance
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('load', () => {
      updateActiveNav();
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!menuBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
        mobileMenu.classList.add('hidden');
        mobileMenu.classList.remove('active');
      }
    });

    // Enhanced scroll link functionality
    document.querySelectorAll('a.scroll-link').forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const target = document.getElementById(targetId);

        if (target) {
          const headerHeight = document.querySelector('header').offsetHeight;
          const targetPosition = target.offsetTop - headerHeight;

          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
        }
      });
    });
  </script>
</body>

</html>