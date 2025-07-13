<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3D Floor Plans</title>
  <!-- ✅ Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-800">

<?php include '../../navbar.php'; ?>

<section class="py-16 px-4 md:px-12">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-red-600 mb-8">3D Floor Plans</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php for ($i = 1; $i <= 25; $i++): ?>
        <div>
          <img 
            src="/civilcoresolutions/images/3Dplan/<?php echo $i; ?>.webp" 
            alt="3D Plan <?php echo $i; ?>" 
            class="w-full h-auto rounded-lg border border-gray-300 cursor-pointer"
            onclick="openImage(this.src)"
          >
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- Fullscreen Viewer -->
<div id="fullscreenView" class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 hidden">
  <button onclick="closeImage()" class="absolute top-4 right-4 text-white text-4xl font-bold">&times;</button>
  <img id="fullscreenImg" src="" class="max-w-full max-h-full rounded-lg shadow-lg">
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
 <?php include "../contact.php"; ?>
<?php include '../../footer.php'; ?>

</body>
</html>
