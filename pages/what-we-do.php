<section id="about">
<section class="bg-white py-20 px-4 md:px-16">
  <div class="max-w-7xl mx-auto flex flex-col-reverse md:flex-row items-center gap-10">
<!-- Left: YouTube Video -->
<div class="w-full md:w-1/2 animate-slide-left">
  <!-- Main YouTube Video Embed -->
  <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
    <iframe
      class="w-full h-full"
      src="https://www.youtube.com/embed/LRjDBQdH0l4?si=U1LCWs_RcrPVWxxL"
      title="Harris Constructions Video"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen
    ></iframe>
  </div>

  <!-- Checkbox to show more videos -->
  <div class="mt-4 flex items-center space-x-2">
    <input type="checkbox" id="showMoreVideos" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
    <label for="showMoreVideos" class="text-sm text-gray-700">Show more videos</label>
  </div>

  <!-- YouTube Channel Link -->
  <div class="mt-2">
    <a href="https://www.youtube.com/@HarrisConstruction2025" target="_blank" class="text-blue-600 hover:underline text-sm">
      Visit our YouTube Channel →
    </a>
  </div>
</div>


    <!-- Right: Text Content -->
    <div class="w-full md:w-1/2 animate-slide-right space-y-6 text-left">
      <h2 class="text-4xl md:text-5xl font-extrabold text-red-600">What We Do?</h2>
      <p class="text-lg font-semibold text-black">
        <span class="text-red-600">From Concept to Completion,</span> We Deliver Every Design & Detail.
      </p>
      <p class="text-gray-800 text-base md:text-lg leading-relaxed">
        Since <span class="text-red-600 font-semibold">2010</span>, <strong class="text-black">Harris constructions </strong> has been a trusted name in the construction industry, offering top-tier architectural, engineering, and project management solutions.
      </p>
      <p class="text-gray-800 text-base md:text-lg leading-relaxed">
        Be it <span class="text-red-600">plan approvals</span>, <span class="text-red-600">architectural designs</span>, or <span class="text-red-600">quantity surveys</span>, our services are tailored to match every project's scale and vision.
      </p>
      <p class="text-gray-800 text-base md:text-lg leading-relaxed">
        Through a collaborative approach, we ensure <span class="text-red-600">timely delivery</span>, <span class="text-red-600">cost efficiency</span>, and <span class="text-red-600">flawless execution</span>.
      </p>
      <p class="text-black font-bold text-base md:text-lg">
        At Harris constructions , we don’t just build — <span class="text-red-600">we engineer the future.</span>
      </p>
    </div>
  </div>
</section>

<!-- Animation Styles -->
<style>
@keyframes slideLeft {
  from { opacity: 0; transform: translateX(-60px); }
  to { opacity: 1; transform: translateX(0); }
}
@keyframes slideRight {
  from { opacity: 0; transform: translateX(60px); }
  to { opacity: 1; transform: translateX(0); }
}
.animate-slide-left {
  animation: slideLeft 1s ease-out forwards;
}
.animate-slide-right {
  animation: slideRight 1s ease-out forwards;
}

/* Optional: Add aspect ratio if not supported via Tailwind plugins */
.aspect-w-16 {
  position: relative;
  width: 100%;
  padding-bottom: 56.25%; /* 16:9 aspect ratio */
}
.aspect-w-16 iframe {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}
</style>
</section>