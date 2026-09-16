<?php
// Per-page SEO — set these variables BEFORE including this file:
//   $pageTitle     — full <title> string
//   $pageDesc      — meta description
//   $pageCanonical — canonical URL
//   $pageOgImage   — OG image absolute URL
$_site  = 'https://evertechme.com';
$_title = htmlspecialchars(
    isset($pageTitle) ? $pageTitle : 'EverTech — IT & Cybersecurity Solutions',
    ENT_QUOTES
);
$_desc  = htmlspecialchars(
    isset($pageDesc) ? $pageDesc
    : 'EverTech provides network infrastructure, managed IT, and cybersecurity services from offices in Dubai, London, and Bengaluru.',
    ENT_QUOTES
);
$_canon  = isset($pageCanonical) ? $pageCanonical : $_site . '/';
$_ogImg  = isset($pageOgImage)   ? $pageOgImage   : $_site . '/assets/images/custom/home-banner.jpg';
$_isProd = !preg_match('#^(localhost|127\.0\.0\.1)(:\d+)?$#', $_SERVER['HTTP_HOST'] ?? '');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <base href="/">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $_title ?></title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?= $_desc ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="<?= htmlspecialchars($_canon, ENT_QUOTES) ?>">

    <!-- Open Graph -->
    <meta property="og:type"        content="website">
    <meta property="og:site_name"   content="EverTech">
    <meta property="og:url"         content="<?= htmlspecialchars($_canon, ENT_QUOTES) ?>">
    <meta property="og:title"       content="<?= $_title ?>">
    <meta property="og:description" content="<?= $_desc ?>">
    <meta property="og:image"       content="<?= htmlspecialchars($_ogImg, ENT_QUOTES) ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="<?= $_title ?>">
    <meta name="twitter:description" content="<?= $_desc ?>">
    <meta name="twitter:image"       content="<?= htmlspecialchars($_ogImg, ENT_QUOTES) ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.png">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css?v=<?= filemtime(__DIR__ . '/../assets/css/custom.css') ?>">


    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <?php if ($_isProd): ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YH7733V6MY"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-YH7733V6MY');
    </script>

    <!-- Ahrefs Analytics -->
    <script src="https://analytics.ahrefs.com/analytics.js" data-key="MNq9LrC6+106h5iAAdUpEQ" async></script>
    <?php endif; ?>

</head>
