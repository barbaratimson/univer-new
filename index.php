<?php
// Include configuration
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <!-- CSS files -->
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/hero.css">
    <link rel="stylesheet" href="assets/css/btn.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/mentor.css">
    <link rel="stylesheet" href="assets/css/methods.css">
    <link rel="stylesheet" href="assets/css/CEO.css">
    <link rel="stylesheet" href="assets/css/for.css">
    <link rel="stylesheet" href="assets/css/roadmap.css">
    <link rel="stylesheet" href="assets/css/free-ctr.css">
</head>
<body>
    <!-- Header -->
    <!-- <?php include 'includes/header.php'; ?> -->
    
    <!-- Main Content Sections -->
    <main>
        <?php include 'includes/sections/hero.php'; ?>
        <?php include 'includes/sections/mentor.php'; ?>
        <?php include 'includes/sections/methods.php'; ?>
        <?php include 'includes/sections/CEO.php'; ?>
        <?php include 'includes/sections/for.php'; ?>
        <?php include 'includes/sections/roadmap.php'; ?>
        <?php include 'includes/sections/free-ctr.php'; ?>
    </main>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- JavaScript files -->
    <script src="assets/js/main.js"></script>
</body>
</html>
