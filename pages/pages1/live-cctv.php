<?php include '../../navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Live CCTV - Real-Time Site Monitoring</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-white text-gray-800">

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-white to-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-5xl font-extrabold text-red-600 mb-4">🎥 Live CCTV Monitoring</h1>
      <p class="text-lg md:text-xl text-gray-700">Track your construction site from anywhere in real time. Transparent. Secure. Smart.</p>
    </div>
  </section>

  <!-- Content Section -->
  <section class="py-16 px-4 md:px-12">
    <div class="max-w-6xl mx-auto">
      
      <!-- Images Row -->
      <div class="grid md:grid-cols-2 gap-8 mb-12">
        <img src="../../images/cctv/cctv01.png" alt="Live View 1" class="w-full rounded-lg shadow-md border border-gray-300" />
        <img src="../../images/cctv/cctv02.png" alt="Live View 2" class="w-full rounded-lg shadow-md border border-gray-300" />
      </div>

      <!-- YouTube Embed -->
      <div class="aspect-w-16 aspect-h-9 mb-12">
        <iframe 
          src="https://www.youtube.com/embed/D8LfN1HgpEM" 
          title="Live Project CCTV" 
          class="w-full h-full rounded-lg shadow-lg border border-gray-200"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
        </iframe>
      </div>

      <!-- Benefits Section -->
      <div class="bg-red-50 p-8 rounded-xl shadow-md border-l-4 border-red-600">
        <h2 class="text-2xl font-bold text-red-600 mb-4">📡 Why Choose Live CCTV Monitoring?</h2>
        <ul class="list-disc pl-6 space-y-3 text-gray-800 text-lg">
          <li><strong>24/7 Surveillance:</strong> Get peace of mind with round-the-clock access to your project site.</li>
          <li><strong>Remote Access:</strong> Monitor progress from anywhere using mobile or desktop.</li>
          <li><strong>Workforce Accountability:</strong> Track employee activities and reduce delays.</li>
          <li><strong>Enhanced Security:</strong> Prevent material theft and unauthorized site access.</li>
          <li><strong>Client Transparency:</strong> Share real-time views with clients to build trust.</li>
        </ul>
      </div>

    </div>
  </section>
  <?php include '../../icon/socialmediaicons.php'; ?>
  <?php include '../../icon/chatbot.php'; ?>
<?php include '../../footer.php'; ?>
</body>
</html>
