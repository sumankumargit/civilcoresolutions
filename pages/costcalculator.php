<!-- ================= FRONTEND: costcalculator.php ================= -->
<?php include '../navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Free House Construction Cost Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    .glass {
      background: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      border-radius: 16px;
      border: 1px solid rgba(255, 255, 255, 0.18);
    }
    .modern-shadow {
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body class="bg-gradient-to-tr from-gray-100 via-white to-gray-200 text-gray-800 min-h-screen">

<div class="max-w-5xl mx-auto py-12 px-4">
  <h1 class="text-4xl font-extrabold text-center text-red-600 mb-2 tracking-wide">🏗️ House Construction Cost Estimator</h1>
  <p class="text-center text-gray-600 text-lg mb-10">Enter your details to calculate estimated construction cost. Talk to our experts for tailored planning.</p>

  <form id="costForm" class="glass modern-shadow p-8">
    <div class="grid md:grid-cols-2 gap-6">
      <div>
        <label class="block mb-2 text-black font-semibold">👤 Name*</label>
        <input type="text" name="name" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
      </div>
      <div>
        <label class="block mb-2 text-black font-semibold">📍 Location of Plot*</label>
        <input type="text" name="location" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
      </div>
      <div>
        <label class="block mb-2 text-black font-semibold">🏡 Super Built-Up Area (sq.ft)*</label>
        <input type="number" name="super_built_up_area" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
      </div>
      <div>
        <label class="block mb-2 text-black font-semibold">🚗 Car Parking (130 sq.ft/unit)*</label>
        <input type="number" name="car_parking" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
      </div>
      <div>
        <label class="block mb-2 text-black font-semibold">🧺 Balcony & Utility Area (sq.ft)*</label>
        <input type="number" name="balcony_utility_area" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
      </div>
    </div>

    <div class="text-center mt-8">
      <button type="submit" class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-3 px-8 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
        🚀 Estimate Now
      </button>
    </div>
  </form>

  <div id="resultPopup" class="hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-xl w-full max-w-lg shadow-2xl animate-fade-in">
      <h2 class="text-2xl font-bold text-red-600 mb-4 text-center">💰 Estimated Construction Cost</h2>
      <div id="estimateText" class="text-gray-800 space-y-4"></div>
      <div class="text-center mt-6 space-x-3">
        <button onclick="window.print()" class="bg-gray-100 hover:bg-gray-200 px-5 py-2 rounded shadow">🖨️ Print</button>
        <button onclick="document.getElementById('resultPopup').classList.add('hidden')" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg shadow-md transition-all">Close</button>
      </div>
    </div>
  </div>
</div>

<?php include "contact.php"; ?>
<?php include '../icon/socialmediaicons.php'; ?>
<?php include '../icon/chatbot.php'; ?>
<?php include '../footer.php'; ?>

<script>
  $(document).ready(function () {
    $('#costForm').submit(function (e) {
      e.preventDefault();
      $.ajax({
        url: '../backend/estimate_cost.php',
        method: 'POST',
        data: $(this).serialize(),
        success: function (response) {
          $('#estimateText').html(response);
          $('#resultPopup').removeClass('hidden');
        },
        error: function () {
          alert("❌ Something went wrong. Try again.");
        }
      });
    });
  });
</script>
</body>
</html>
