<?php include_once '../config.php'; ?>
<section id="services">
<section class="bg-white py-20 px-4 md:px-12">
  <div class="max-w-7xl mx-auto">

    <!-- Section Title -->
    <h2 class="text-4xl md:text-5xl font-extrabold text-center text-gray-800 mb-16 border-b-2 border-red-600 inline-block pb-2">
      Our Portfolio
    </h2>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

      <!-- Card 1 -->
      <div class="group bg-white border border-gray-200 rounded-xl shadow hover:shadow-xl hover:border-red-600 transition-all duration-300 flex flex-col justify-between">
        <div class="overflow-hidden rounded-t-xl">
          <img src="<?php echo getAssetUrl('images/profitolio/image.png'); ?>" alt="2D Floor Plan" class="w-full h-52 object-cover transition-transform duration-300 group-hover:scale-105">
        </div>
        <div class="p-6 text-center">
          <h3 class="text-lg font-semibold text-gray-800 mb-3">2D Floor Plan</h3>
          <a href="<?php echo getPageUrl('pages/pages1/plan.php'); ?>" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-6 rounded-full transition-all duration-300">
            View Details
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="group bg-white border border-gray-200 rounded-xl shadow hover:shadow-xl hover:border-red-600 transition-all duration-300 flex flex-col justify-between">
        <div class="relative w-full h-52 rounded-t-xl overflow-hidden">
          <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/D8LfN1HgpEM"
            title="3D Walkthrough" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
        <div class="p-6 text-center">
          <h3 class="text-lg font-semibold text-gray-800 mb-3">3D Walkthrough</h3>
          <a href="<?php echo getPageUrl('pages/3d-walkthrough.php'); ?>" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-6 rounded-full transition-all duration-300">
            View Details
          </a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="group bg-white border border-gray-200 rounded-xl shadow hover:shadow-xl hover:border-red-600 transition-all duration-300 flex flex-col justify-between">
        <div class="overflow-hidden rounded-t-xl">
          <img src="<?php echo getAssetUrl('images/profitolio/image copy.png'); ?>" alt="3D Models" class="w-full h-52 object-cover transition-transform duration-300 group-hover:scale-105">
        </div>
        <div class="p-6 text-center">
          <h3 class="text-lg font-semibold text-gray-800 mb-3">3D Models</h3>
          <a href="<?php echo getPageUrl('pages/pages1/3d-models.php'); ?>" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-6 rounded-full transition-all duration-300">
            View Details
          </a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="group bg-white border border-gray-200 rounded-xl shadow hover:shadow-xl hover:border-red-600 transition-all duration-300 flex flex-col justify-between">
        <div class="overflow-hidden rounded-t-xl">
          <img src="<?php echo getAssetUrl('images/profitolio/image copy 2.png'); ?>" alt="Estimation & Costing" class="w-full h-52 object-cover transition-transform duration-300 group-hover:scale-105">
        </div>
        <div class="p-6 text-center">
          <h3 class="text-lg font-semibold text-gray-800 mb-3">Estimation & Costing</h3>
          <a href="<?php echo getPageUrl('pages/costcalculator.php'); ?>" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-6 rounded-full transition-all duration-300">
            View Details
          </a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="group bg-white border border-gray-200 rounded-xl shadow hover:shadow-xl hover:border-red-600 transition-all duration-300 flex flex-col justify-between">
        <div class="overflow-hidden rounded-t-xl">
          <img src="<?php echo getAssetUrl('images/profitolio/image copy 3.png'); ?>" alt="Structural Drawing" class="w-full h-52 object-cover transition-transform duration-300 group-hover:scale-105">
        </div>
        <div class="p-6 text-center">
          <h3 class="text-lg font-semibold text-gray-800 mb-3">Structural Drawing</h3>
          <a href="<?php echo getPageUrl('pages/pages1/structural.php'); ?>" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-6 rounded-full transition-all duration-300">
            View Details
          </a>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="group bg-white border border-gray-200 rounded-xl shadow hover:shadow-xl hover:border-red-600 transition-all duration-300 flex flex-col justify-between">
        <div class="overflow-hidden rounded-t-xl">
          <img src="<?php echo getAssetUrl('images/profitolio/image copy 4.png'); ?>" alt="Plan Approval" class="w-full h-52 object-cover transition-transform duration-300 group-hover:scale-105">
        </div>
        <div class="p-6 text-center">
          <h3 class="text-lg font-semibold text-gray-800 mb-3">Plan Approval</h3>
          <a href="<?php echo getPageUrl('pages/pages1/plan-approval.php'); ?>" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-6 rounded-full transition-all duration-300">
            View Details
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
</section>