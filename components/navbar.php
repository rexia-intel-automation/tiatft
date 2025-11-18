<?php
// /components/navbar.php
?>
<nav class="nav">
    <span class="logo-nav" aria-label="TIATFT logo">
        <!-- Logo para darkmode -->
        <img
            src="https://i.imgur.com/qE8zQuw.png"
            alt="TIATFT logo dark"
            class="logo-img logo-dark"
        >
        <!-- Logo para lightmode -->
        <img
            src="https://i.imgur.com/X5XQhzl.png"
            alt="TIATFT logo light"
            class="logo-img logo-light"
        >
    </span>

    <div class="nav-actions">
        <?php include __DIR__ . '/darkmode-toggle.php'; ?>
        <a href="apply.php#signup" class="nav-cta">Join Waitlist</a>
    </div>
</nav>
