<?php
require __DIR__ . '/config/constants.php';
require __DIR__ . '/backend/helpers.php';

$currentYear = date('Y');
$submissionStatus = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $success = tiatft_send_waitlist_application($_POST);
    $submissionStatus = $success ? 'success' : 'error';
}
?>
<?php include __DIR__ . '/templates/head.php'; ?>
<body>
    <div class="grid-background"></div>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    <?php include __DIR__ . '/components/navbar.php'; ?>

    <main class="section" id="signup">
        <div class="section-header">
            <h2 class="section-title">Founding Seller Waitlist</h2>
            <p class="section-description">
                Sign up to secure one of the 500 founding seller spots.
                If you plan to subscribe to the Pro plan, you can also opt in to compete for one of the 100 slots
                with 6 months of free subscription after launch.
            </p>
        </div>

        <div class="signup-wrapper">
            <form id="founder-form" class="signup-form" method="POST" action="apply.php#signup" novalidate>
                <div class="form-grid">
                    <div class="form-grid-item">
                        <label for="full_name">Full name</label>
                        <input id="full_name" name="full_name" type="text" required placeholder="Your name">
                    </div>
                    <div class="form-grid-item">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" required placeholder="you@example.com">
                    </div>

                    <div class="form-grid-item">
                        <label for="main_platform">Main platform today</label>
                        <select id="main_platform" name="main_platform" required>
                            <option value="">Select one</option>
                            <option value="n8n">n8n</option>
                            <option value="make.com">Make.com</option>
                            <option value="bubble">Bubble</option>
                            <option value="flutterflow">FlutterFlow</option>
                            <option value="go_high_level">GoHighLevel</option>
                            <option value="notion">Notion</option>
                            <option value="webflow">Webflow</option>
                            <option value="weweb">WeWeb</option>
                            <option value="zapier">Zapier</option>
                            <option value="powerbi">PowerBI</option>
                            <option value="google_sheets">Google Sheets</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-grid-item">
                        <label for="template_focus">Main template type you plan to sell</label>
                        <input
                            id="template_focus"
                            name="template_focus"
                            type="text"
                            placeholder="Example: client onboarding workspace, CRM pipeline, automation pack"
                        >
                    </div>

                    <div class="form-grid-full">
                        <label for="notes">Anything else we should know?</label>
                        <textarea
                            id="notes"
                            name="notes"
                            placeholder="Optional. Tell us about your audience, current shop or template experience."
                        ></textarea>
                    </div>

                    <div class="form-grid-full">
                        <div class="checkbox-row">
                            <input id="reserve_pro" name="reserve_pro" type="checkbox" value="yes">
                            <label for="reserve_pro">
                                I want to reserve a place in the Pro plan priority list.
                                The first 100 people who enable this option and subscribe to Pro will have
                                6 months with no subscription fee after launch.
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-submit-row">
                    <button type="submit" class="form-submit" id="submit-btn">
                        Submit application
                    </button>

                    <?php if ($submissionStatus === 'success'): ?>
                        <div id="form-status" class="form-status success">
                            Application received. Check your inbox in the next days for confirmation.
                        </div>
                    <?php elseif ($submissionStatus === 'error'): ?>
                        <div id="form-status" class="form-status error">
                            There was an error submitting your application. Please try again in a few minutes.
                        </div>
                    <?php else: ?>
                        <div id="form-status" class="form-status"></div>
                    <?php endif; ?>
                </div>

                <p class="form-note">
                    Submissions are capped at 500 validated entries.
                    We will confirm your status and next steps by email closer to the March 2026 launch.
                </p>
            </form>
        </div>
    </main>

    <?php include __DIR__ . '/components/footer.php'; ?>

    <script src="assets/js/form-handler.js" defer></script>
</body>
</html>
