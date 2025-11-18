<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply - TIATFT</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/dark.css">
    <style>
        /* Form specific styles */
        .form-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10rem 2rem 4rem;
        }

        .form-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--text-primary), #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
        }

        .form-section > p {
            font-size: 1.25rem;
            color: var(--text-secondary);
            text-align: center;
            margin-bottom: 3rem;
        }

        .apply-form {
            width: 100%;
            max-width: 600px;
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 3rem;
            backdrop-filter: blur(10px);
        }

        .apply-form label {
            display: block;
            margin-bottom: 1.5rem;
            color: var(--text-secondary);
            font-weight: 600;
        }

        .apply-form input,
        .apply-form select,
        .apply-form textarea {
            width: 100%;
            margin-top: 0.5rem;
            padding: 0.875rem;
            background: var(--bg-primary);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            color: var(--text-primary);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .apply-form input:focus,
        .apply-form select:focus,
        .apply-form textarea:focus {
            outline: none;
            border-color: #7c3aed;
            box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
        }

        .apply-form textarea {
            min-height: 120px;
            resize: vertical;
        }

        .apply-form button {
            width: 100%;
            margin-top: 1rem;
        }

        .response-msg {
            text-align: center;
            margin-top: 1.5rem;
            padding: 1rem;
            border-radius: 8px;
            font-weight: 600;
        }

        .response-msg.success {
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
            border: 1px solid rgba(16, 185, 129, 0.3);
        }

        .response-msg.error {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }
    </style>
</head>
<body data-theme="dark">
    <div class="grid-background"></div>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    <?php include __DIR__ . '/components/navbar.php'; ?>

    <section class="form-section">
        <h1>Founding Seller Application</h1>
        <p>First 500 sellers get 0% commission for 6 months on 1 template.</p>

        <form id="applyForm" class="apply-form">
            <label>
                Full Name
                <input type="text" name="full_name" required>
            </label>

            <label>
                Email
                <input type="email" name="email" required>
            </label>

            <label>
                Main Platform
                <select name="main_platform" required>
                    <option value="n8n">n8n</option>
                    <option value="bubble">Bubble</option>
                    <option value="make">Make.com</option>
                    <option value="zapier">Zapier</option>
                    <option value="webflow">Webflow</option>
                    <option value="gohighlevel">GoHighLevel</option>
                    <option value="notion">Notion</option>
                    <option value="other">Other</option>
                </select>
            </label>

            <label>
                Template Focus
                <input type="text" name="template_focus" placeholder="e.g., Marketing automation, CRM workflows">
            </label>

            <label>
                Reserve Pro Plan Benefit?
                <select name="reserve_pro">
                    <option value="no">No</option>
                    <option value="yes">Yes (limited to 100 users)</option>
                </select>
            </label>

            <label>
                Notes
                <textarea name="notes" placeholder="Tell us about your templates and experience..."></textarea>
            </label>

            <button type="submit" class="cta-primary">Submit Application</button>
        </form>

        <p id="responseMessage" class="response-msg"></p>
    </section>

    <?php include __DIR__ . '/components/footer.php'; ?>

    <script src="/assets/js/form-handler.js"></script>
    <script src="/assets/js/darkmode.js"></script>
</body>
</html>
