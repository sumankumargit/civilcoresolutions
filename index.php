<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Harris constructions</title>
  <link rel="icon" type="image/x-icon" href="<?php echo getAssetUrl('favicon.ico'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    html, body { width: 100%; min-height: 100%; margin: 0; padding: 0; }
    body { box-sizing: border-box; }
    main, header, section { width: 100%; }
    /* Responsive fixes for mobile */
    @media (max-width: 640px) {
      .max-w-5xl, .max-w-4xl, .max-w-3xl, .max-w-2xl, .max-w-xl, .max-w-lg, .max-w-md, .max-w-sm {
        max-width: 100vw !important;
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
      }
      .px-4, .px-6, .px-8, .px-10 { padding-left: 0.5rem !important; padding-right: 0.5rem !important; }
      .pt-10, .md\:pt-20 { padding-top: 1.5rem !important; }
      header, main, section { min-width: 0 !important; }
      body { font-size: 1rem !important; }
    }
    @media (max-width: 400px) {
      h1, .text-4xl, .text-5xl, .text-6xl { font-size: 1.2rem !important; }
      h2, .text-3xl { font-size: 1rem !important; }
      p, .text-lg, .text-xl { font-size: 0.9rem !important; }
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-900">
  <?php include 'navbar.php'; ?>
  <header>
    <?php include "pages/header.php"; ?>
    <?php include "pages/servicesection.php"; ?>
  </header>
  <main class="pt-10 md:pt-20 px-4">
    <?php include "pages/what-we-do.php"; ?>
    <?php include "pages/portfolio.php"; ?>
    <?php include "pages/y.php"; ?>
    <?php include "pages/cctv.php"; ?>
    <?php include "pages/contact.php"; ?>
    <?php include 'icon/socialmediaicons.php'; ?>
    <?php include 'icon/chatbot.php'; ?>
  </main>
  <?php include 'footer.php'; ?>
</body>
</html>