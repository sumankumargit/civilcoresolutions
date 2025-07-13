<!-- Glassy Navbar -->
<nav class="bg-white shadow-lg sticky top-0 z-50 border-b-4 border-red-600">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-20">

      <!-- Logo -->
<a href="/civilcoresolutions/index.php#home" class="flex items-center">
  <img src="/civilcoresolutions/images/logo.png"
       alt="Logo"
       class="h-20 sm:h-24 w-auto transition duration-300 hover:scale-110 drop-shadow-xl">
</a>

      <!-- Desktop Navigation -->
      <div class="hidden md:flex items-center space-x-6">
        <a href="/civilcoresolutions/index.php#home" class="nav-link">Home</a>
        <a href="/civilcoresolutions/index.php#services" class="nav-link">Our Services</a>
        <a href="/civilcoresolutions/index.php#about" class="nav-link">About Us</a>
        <a href="/civilcoresolutions/index.php#contact" class="nav-link">Contact Us</a>
        <a href="/civilcoresolutions/pages/costcalculator.php" class="nav-link">Cost Calculator</a>
        <a href="/civilcoresolutions/pages/meterialcalculator.php" class="nav-link">Material Calculator</a>
        <a href="/civilcoresolutions/index.php?page=login"
           class="relative group px-5 py-2 font-medium text-white bg-gradient-to-r from-red-600 to-red-700 rounded shadow hover:from-red-700 hover:to-red-800 transition duration-300 overflow-hidden">
          <span class="absolute left-0 top-0 h-0.5 w-full bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
          <span class="relative z-10">Login</span>
        </a>
      </div>

      <!-- Mobile Menu Toggle -->
      <div class="md:hidden">
        <button id="menu-toggle" class="text-red-700 focus:outline-none">
          <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Dropdown Menu -->
  <div id="mobile-menu" class="hidden md:hidden px-6 pb-6 bg-white/90 shadow-md">
    <div class="flex flex-col gap-3 mt-3">
      <a href="/civilcoresolutions/index.php#home" class="mobile-link">Home</a>
      <a href="/civilcoresolutions/index.php#services" class="mobile-link">Our Services</a>
      <a href="/civilcoresolutions/index.php#about" class="mobile-link">About Us</a>
      <a href="/civilcoresolutions/index.php#contact" class="mobile-link">Contact Us</a>
      <a href="/civilcoresolutions/pages/costcalculator.php" class="mobile-link">Cost Calculator</a>
      <a href="/civilcoresolutions/pages/meterialcalculator.php" class="mobile-link">Material Calculator</a>
      <a href="/civilcoresolutions/index.php?page=login"
         class="text-center mt-2 bg-red-600 text-white py-2 rounded-full hover:bg-red-700 transition">Login</a>
    </div>
  </div>

  <!-- Custom Styles -->
  <style>
    .nav-link {
      color: #dc2626;
      font-weight: 500;
      position: relative;
      letter-spacing: 0.5px;
      transition: color 0.2s, border-bottom 0.2s;
      border-bottom: 2px solid transparent;
    }
    .nav-link:hover {
      color: #fff;
      background: #dc2626;
      border-radius: 0.5rem;
      padding-left: 0.5rem;
      padding-right: 0.5rem;
      border-bottom: 2px solid #dc2626;
    }
    .mobile-link {
      font-weight: 500;
      color: #dc2626;
      padding: 0.5rem 1rem;
      border-radius: 0.5rem;
      background: #fff;
      margin-bottom: 0.25rem;
      border: 2px solid #dc2626;
      transition: background 0.2s, color 0.2s;
    }
    .mobile-link:hover {
      background: #dc2626;
      color: #fff;
    }
  </style>

  <!-- Toggle Script -->
  <script>
    document.getElementById('menu-toggle').addEventListener('click', () => {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });
  </script>
</nav>
