<?php include __DIR__ . '/components/head.php'; ?>
<body>
<?php include __DIR__ . '/components/navbar.php'; ?>

<main class="container">

<section class="form-section">
    <h1>Founding Seller Application</h1>
    <p>First 500 sellers get 0% commission for 6 months on 1 template.</p>

    <form id="applyForm" class="apply-form">
        <label>Full Name
            <input type="text" name="full_name" required>
        </label>

        <label>Email
            <input type="email" name="email" required>
        </label>

        <label>Main Platform
            <select name="main_platform" required>
                <option value="n8n">n8n</option>
                <option value="bubble">Bubble</option>
                <option value="make">Make.com</option>
                <option value="zapier">Zapier</option>
                <option value="webflow">Webflow</option>
            </select>
        </label>

        <label>Template Focus
            <input type="text" name="template_focus">
        </label>

        <label>Reserve Pro Plan Benefit?
            <select name="reserve_pro">
                <option value="no">No</option>
                <option value="yes">Yes (limited to 100 users)</option>
            </select>
        </label>

        <label>Notes
            <textarea name="notes"></textarea>
        </label>

        <button type="submit" class="btn-primary">Submit Application</button>
    </form>

    <p id="responseMessage" class="response-msg"></p>
</section>

</main>

<?php include __DIR__ . '/components/footer.php'; ?>
<script src="assets/js/form-handler.js"></script>
<script src="assets/js/darkmode.js"></script>
</body>
