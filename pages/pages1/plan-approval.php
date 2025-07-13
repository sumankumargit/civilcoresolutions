<?php include '../../navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Plan Approval</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-800">

<!-- Main Section -->
<section class="py-16 px-4 md:px-12">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-red-600 mb-12">Plan Approval Services</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
      <?php
        $titles = [
          "CHENNAI CORPORATION",
          "SINGLE WINDOW SYSTEM",
          "SELF DECLARATION",
          "CMDA"
        ];
        for ($i = 1; $i <= 4; $i++):
      ?>
        <div class="bg-white border border-gray-300 rounded-xl overflow-hidden shadow hover:shadow-xl transition duration-300">
          <img 
            src="<?php echo getAssetUrl('images/planapproval/' . $i . '.jpg'); ?>" 
            alt="<?php echo $titles[$i-1]; ?>" 
            class="w-full h-48 object-cover cursor-pointer"
            onclick="openImage(this.src)"
          >
          <div class="p-4 text-center">
            <h3 class="text-lg font-semibold mb-3"><?php echo $titles[$i-1]; ?></h3>
            <a 
              href="https://wa.me/919361215785?text=Hi%2C%20I%20want%20to%20chat%20regarding%20<?php echo urlencode($titles[$i-1]); ?>%20Plan%20Approval" 
              target="_blank"
              class="inline-block bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-full transition duration-300"
            >
              💬 Chat Now
            </a>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- Fullscreen Image Viewer -->
<div id="fullscreenView" class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 hidden">
  <button onclick="closeImage()" class="absolute top-4 right-4 text-white text-3xl font-bold">&times;</button>
  <img id="fullscreenImg" src="" class="max-w-full max-h-full rounded-lg shadow-lg">
</div>

<script>
  function openImage(src) {
    document.getElementById('fullscreenImg').src = src;
    document.getElementById('fullscreenView').classList.remove('hidden');
  }

  function closeImage() {
    document.getElementById('fullscreenView').classList.add('hidden');
    document.getElementById('fullscreenImg').src = "";
  }
</script>
  <?php include '../../icon/socialmediaicons.php'; ?>
  <?php include '../../icon/chatbot.php'; ?>
  <?php include "pages/contact.php"; ?>
<?php include '../../footer.php'; ?>
</body>
</html>
