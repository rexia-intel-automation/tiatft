<?php
require __DIR__ . '/config/constants.php';
$currentYear = date('Y');
?>
<?php include __DIR__ . '/templates/head.php'; ?>
<body>
    <div class="grid-background"></div>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    <?php include __DIR__ . '/components/navbar.php'; ?>

    <main>
        <?php include __DIR__ . '/sections/hero.php'; ?>
        <?php include __DIR__ . '/sections/features.php'; ?>
        <?php include __DIR__ . '/sections/pricing.php'; ?>
        <?php include __DIR__ . '/sections/founding-program.php'; ?>
        <?php include __DIR__ . '/sections/faq.php'; ?>
        <?php include __DIR__ . '/sections/footer-cta.php'; ?>
    </main>

    <?php include __DIR__ . '/components/footer.php'; ?>

    <!-- JS específico da landing, se precisar -->
</body>
</html>
