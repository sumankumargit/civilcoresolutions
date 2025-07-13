<?php include_once 'config.php'; ?>
<footer class="bg-white/90 backdrop-blur-md text-gray-800 shadow-xl border-t border-red-600">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">

    <!-- About -->
<div>
  <h2 class="text-lg font-bold text-red-600 mb-3">ABOUT US</h2>
  <img src="<?php echo getAssetUrl('images/logo.png'); ?>"
       alt="CivilCore Logo"
       class="h-20 mb-3 hover:scale-105 transition-transform duration-300">
  <p class="text-sm text-gray-700 leading-relaxed">
    Harris constructions  is a revolutionary network in the construction industry — connecting engineers and delivering the fastest services.
  </p>
</div>


    <!-- Services -->
    <div>
      <h2 class="text-lg font-bold text-red-600 mb-3">OUR SERVICES</h2>
      <ul class="space-y-2 text-sm">
        <li><a href="<?php echo getUrl('index.php#contact'); ?>" class="hover:text-red-600 transition">› Architectural Services</a></li>
        <li><a href="<?php echo getUrl('index.php#contact'); ?>" class="hover:text-red-600 transition">› Plan Approvals</a></li>
        <li><a href="<?php echo getUrl('index.php#contact'); ?>" class="hover:text-red-600 transition">› Quantity Surveying</a></li>
        <li><a href="<?php echo getUrl('index.php#contact'); ?>" class="hover:text-red-600 transition">› Structural Drawings</a></li>
        <li><a href="<?php echo getUrl('index.php#contact'); ?>" class="hover:text-red-600 transition">› Hire Your Engineer</a></li>
        <li><a href="<?php echo getPageUrl('pages/costcalculator.php'); ?>" class="hover:text-red-600 transition">› Cost Calculator</a></li>
        <li><a href="<?php echo getPageUrl('pages/meterialcalculator.php'); ?>" class="hover:text-red-600 transition">› Material Calculator</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div>
      <h2 class="text-lg font-bold text-red-600 mb-3">CONTACT INFO</h2>
      <ul class="text-sm text-gray-700 space-y-2">
        <li><strong>Address:</strong><br>no.100,oopo uzhaver sandhai,HOSUR-635109</li>
        <li><strong>Mobile:</strong><br>7871840566</li>
        <li><strong>Email:</strong><br><a href="mailto:toinfoharris@gmail.com" class="text-red-600 hover:underline">toinfoharris@gmail.com</a></li>
      </ul>

      <!-- Social Icons -->
      <div class="flex space-x-4 mt-4">
        <a href="<?php echo getUrl('index.php#contact'); ?>" title="Facebook" class="hover:text-blue-600">
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12A10 10 0 1 0 12 22v-7h-2v-3h2v-2c0-2 1-3 3-3h2v3h-2c-.5 0-1 .5-1 1v1h3l-.5 3H15v7a10 10 0 0 0 7-10z"/></svg>
        </a>
        <a href="<?php echo getUrl('index.php#contact'); ?>" title="Instagram" class="hover:text-pink-600">
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7 2a5 5 0 0 0-5 5v10a5 5 0 0 0 5 5h10a5 5 0 0 0 5-5V7a5 5 0 0 0-5-5H7zm5 4a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm4.5-2a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
        </a>
        <a href="<?php echo getUrl('index.php#contact'); ?>" title="LinkedIn" class="hover:text-blue-700">
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a5 5 0 0 1 5 5v6h-3v-6a2 2 0 0 0-4 0v6h-3v-6a5 5 0 0 1 5-5zM9 9H6v10h3V9zM7.5 7a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg>
        </a>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="text-center text-xs sm:text-sm text-gray-500 border-t border-gray-300 py-4 bg-white/80">
    <p>© 2025 Harris constructions  — All Rights Reserved.</p>
    <p>Designed by <a href="<?php echo getUrl('index.php#contact'); ?>" class="text-red-600 hover:underline">SMLNexGen LLP</a></p>
  </div>
</footer>
