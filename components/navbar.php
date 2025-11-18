<?php
// /components/navbar.php
?>
<nav class="nav">
    <span class="logo-nav" aria-label="TIATFT logo">
        <!-- Logo para darkmode (purple) -->
        <img
            src="assets/img/logo-purple.png"
            alt="TIATFT logo"
            class="logo-img logo-dark"
            width="120"
            height="40"
        >
        <!-- Logo para lightmode (green) -->
        <img
            src="assets/img/logo-green.png"
            alt="TIATFT logo"
            class="logo-img logo-light"
            width="120"
            height="40"
        >
    </span>

    <div class="nav-actions">
        <!-- Menu hamburger para mobile -->
        <button class="mobile-menu-toggle" aria-label="Toggle menu" aria-expanded="false">
            <svg class="hamburger-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
            <svg class="close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>

        <div class="nav-menu">
            <?php include __DIR__ . '/darkmode-toggle.php'; ?>
            <a href="apply.php#signup" class="nav-cta">Join Waitlist</a>
        </div>
    </div>
</nav>
