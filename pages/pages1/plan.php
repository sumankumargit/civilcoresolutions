<?php include '../../navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>2D Floor Plans</title>

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .fullscreen-bg {
      background: rgba(0, 0, 0, 0.9);
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

<section class="max-w-7xl mx-auto py-16 px-4 md:px-12">
  <div class="text-center mb-12">
    <h2 class="text-4xl font-bold text-red-600">2D Floor Plans</h2>
    <p class="text-gray-600 mt-2">Click on an image to view it fullscreen</p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <?php for ($i = 1; $i <= 15; $i++): ?>
      <div>
        <img 
          src="<?php echo getAssetUrl('images/2Dplan/' . $i . '.jpg'); ?>" 
          alt="2D Plan <?php echo $i; ?>" 
          class="w-full h-auto rounded-lg border border-gray-300 cursor-pointer"
          onclick="openImage(this.src)"
        >
      </div>
    <?php endfor; ?>
  </div>
</section>

<!-- Fullscreen Image Viewer -->
<div id="fullscreenView" class="fixed inset-0 fullscreen-bg flex items-center justify-center z-50 hidden">
  <button onclick="closeImage()" class="absolute top-4 right-4 text-white text-3xl font-bold">&times;</button>
  <img id="fullscreenImg" src="" class="max-w-full max-h-full rounded-lg shadow-lg border-4 border-white">
</div>

<script>
  function openImage(src) {
    document.getElementById('fullscreenImg').src = src;
    document.getElementById('fullscreenView').classList.remove('hidden');
  }

  function closeImage() {
    document.getElementById('fullscreenView').classList.add('hidden');
  }
</script>
  <?php include '../../icon/socialmediaicons.php'; ?>
  <?php include '../../icon/chatbot.php'; ?>
  <?php include "../y.php"; ?>

<?php include '../../footer.php'; ?>
</body>
</html>
