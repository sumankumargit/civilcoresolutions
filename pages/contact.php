<?php include_once '../config.php'; ?>
<section id="contact">
  <section class="bg-white py-20 px-4 md:px-10">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

      <!-- Left Side: Image with Animation -->
      <div class="animate-slide-left text-center md:text-left">
        <img src="<?php echo getAssetUrl('images/contact-us-1.png'); ?>" alt="Talk to Our Expert"
          class="w-full max-w-md mx-auto md:mx-0 rounded-xl shadow-lg hover:scale-105 transition-transform duration-500 ease-in-out" />
      </div>

      <!-- Right Side: Contact Form -->
      <div class="bg-white border border-red-500 shadow-xl rounded-xl p-8 animate-slide-right">
        <h2 class="text-4xl font-bold text-center text-red-600 mb-6">Talk to our Expert</h2>

        <!-- Contact Form Using FormSubmit -->
        <form action="https://formsubmit.co/harrisconstructionsocialmedia@gmail.com" method="POST" class="space-y-6">

          <!-- FormSubmit Options -->
          <input type="hidden" name="_captcha" value="false">
          <input type="hidden" name="_next" value="https://yourdomain.com/thank-you.html">

          <div>
            <label class="block text-sm font-semibold text-gray-800">Name*</label>
            <input type="text" name="name" required placeholder="Your Name"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-800">Phone*</label>
            <div class="flex">
              <span
                class="inline-flex items-center px-3 bg-gray-100 border border-r-0 border-gray-300 rounded-l-lg text-sm text-gray-500">+91</span>
              <input type="tel" name="phone" required placeholder="Your Phone Number"
                class="w-full px-4 py-3 border border-gray-300 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-800">Email*</label>
            <input type="email" name="email" required placeholder="Your Email"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-800">Location of your Plot*</label>
            <input type="text" name="location" required placeholder="Location"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
          </div>

          <div class="text-center mt-4">
            <button type="submit"
              class="bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-lg transition-all duration-300">Submit</button>
          </div>

          <p class="text-xs text-gray-500 text-center mt-4">*By submitting this form, you confirm that you have read and agree to our privacy policy.</p>
        </form>

      </div>
    </div>
  </section>

  <!-- Animations -->
  <style>
    @keyframes slideLeft {
      from {
        opacity: 0;
        transform: translateX(-40px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes slideRight {
      from {
        opacity: 0;
        transform: translateX(40px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .animate-slide-left {
      animation: slideLeft 1s ease-out forwards;
    }

    .animate-slide-right {
      animation: slideRight 1s ease-out forwards;
    }
  </style>
</section>
