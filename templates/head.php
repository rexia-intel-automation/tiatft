<?php
// /templates/head.php
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TIATFT_SITE_NAME; ?></title>

    <?php include __DIR__ . '/meta.php'; ?>
    <?php include __DIR__ . '/open-graph.php'; ?>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/variables.css">
    <link rel="stylesheet" href="assets/css/dark.css">
    <link rel="stylesheet" href="assets/css/sections.css">
    <link rel="stylesheet" href="assets/css/forms.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- JS (defer) -->
    <script src="assets/js/darkmode.js" defer></script>
    <script src="assets/js/main.js" defer></script>
    <script src="assets/js/animations.js" defer></script>
    <script src="assets/js/analytics.js" defer></script>
</head>
