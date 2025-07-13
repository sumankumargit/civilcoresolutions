<?php include_once '../config.php'; ?>
<!-- ======= HERO SECTION ======= -->
<header class="relative min-h-screen w-full overflow-hidden flex flex-col">
  <!-- Background Image -->
  <div class="absolute inset-0 z-0">
    <video autoplay loop muted playsinline class="w-full h-full object-cover object-center">
      <source src="<?php echo getAssetUrl('images/42926-434300944.mp4'); ?>" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
    <div class="absolute inset-0 bg-black opacity-60"></div>
  </div>

  <!-- Centered Content -->
  <div class="relative z-10 flex flex-col justify-center items-center h-full px-2 sm:px-4 text-center" style="min-height:inherit; height:100vh; justify-content:center;">
    <h1 class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4 fade-in-up text-red-600 break-words leading-tight w-full max-w-2xl">
      Every Sqft Tells a Story of Excellence
    </h1>
    <p class="text-sm xs:text-base sm:text-lg md:text-xl text-gray-300 mb-8 max-w-xl fade-in-up delay-1 w-full mx-auto">
      Creating timeless spaces with modern design and unmatched craftsmanship.
    </p>
    <div class="flex flex-col sm:flex-row gap-4 fade-in-up delay-2 w-full max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl mx-auto justify-center items-center">
      <a href="<?php echo getUrl('index.php#services'); ?>"
         class="bg-yellow-400 text-gray-900 hover:bg-yellow-300 py-3 px-4 sm:px-6 rounded-full text-base sm:text-lg font-semibold transition transform hover:scale-105 hover:shadow-lg w-full sm:w-auto">
        View Projects
      </a>
      <a href="<?php echo getUrl('index.php#contact'); ?>"
         class="border-2 border-white text-white hover:bg-white/10 py-3 px-4 sm:px-6 rounded-full text-base sm:text-lg font-semibold transition transform hover:scale-105 w-full sm:w-auto">
        Contact Us
      </a>
    </div>
  </div>
  <style>
    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    .fade-in-up { animation: fadeInUp 1s ease-out forwards; }
    .fade-in-up.delay-1 { animation-delay: 0.3s; }
    .fade-in-up.delay-2 { animation-delay: 0.6s; }
    .fade-in-up.delay-3 { animation-delay: 0.9s; }
    @media (max-width: 640px) {
      header.min-h-screen { min-height: 80vh !important; }
      h1, p { word-break: break-word; }
    }
    @media (max-width: 400px) {
      h1 { font-size: 1.2rem !important; }
      p { font-size: 0.9rem !important; }
    }
  </style>
</header>
