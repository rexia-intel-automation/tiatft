<?php
// Handle form submission
$formSubmitted = false;
$formError = false;
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'fullName' => $_POST['fullName'] ?? '',
        'country' => $_POST['country'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'email' => $_POST['email'] ?? '',
        'platform' => $_POST['platform'] ?? '',
        'notes' => $_POST['notes'] ?? '',
        'joinFirst100' => isset($_POST['joinFirst100']) ? 'yes' : 'no',
        'joinFirst500' => isset($_POST['joinFirst500']) ? 'yes' : 'no'
    ];

    $ch = curl_init('https://primary-production-55af6.up.railway.app/webhook/tiatft');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch) || $httpCode < 200 || $httpCode >= 300) {
        $formError = true;
        $errorMessage = 'Failed to submit form. Please try again.';
    } else {
        $formSubmitted = true;
    }

    curl_close($ch);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIATFT - There Is A Template For That</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --color-white: #fbfcfc;
            --color-green: #6DCA3E;
            --color-purple: #836BFF;

            /* Dark mode (default) */
            --bg-primary: #0a0a0f;
            --bg-secondary: #12121a;
            --bg-tertiary: #1a1a26;
            --text-primary: #fbfcfc;
            --text-secondary: rgba(251, 252, 252, 0.7);
            --text-muted: rgba(251, 252, 252, 0.5);
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
            --glass-shadow: rgba(0, 0, 0, 0.3);
            --glow-color: rgba(109, 202, 62, 0.15);
            --logo-url: url('https://i.imgur.com/qE8zQuw.png');
        }

        [data-theme="light"] {
            --bg-primary: #f5f7fa;
            --bg-secondary: #ffffff;
            --bg-tertiary: #e8ecf2;
            --text-primary: #1a1a26;
            --text-secondary: rgba(26, 26, 38, 0.7);
            --text-muted: rgba(26, 26, 38, 0.5);
            --glass-bg: rgba(255, 255, 255, 0.6);
            --glass-border: rgba(0, 0, 0, 0.1);
            --glass-shadow: rgba(0, 0, 0, 0.1);
            --glow-color: rgba(109, 202, 62, 0.1);
            --logo-url: url('https://i.imgur.com/X5XQhzl.png');
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: var(--bg-primary);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
            transition: background 0.3s ease, color 0.3s ease;
        }

        /* Background Effects */
        .bg-effects {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .nebula-glow {
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.15;
            animation: float 20s ease-in-out infinite;
        }

        .nebula-1 {
            background: radial-gradient(circle, var(--color-green), transparent 70%);
            top: -200px;
            left: -200px;
        }

        .nebula-2 {
            background: radial-gradient(circle, var(--color-purple), transparent 70%);
            bottom: -200px;
            right: -200px;
            animation-delay: -10s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(50px, -50px) scale(1.1); }
            66% { transform: translate(-50px, 50px) scale(0.9); }
        }

        /* Glass Morphism Card */
        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            box-shadow:
                0 8px 32px var(--glass-shadow),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-4px);
            box-shadow:
                0 12px 48px var(--glass-shadow),
                inset 0 1px 0 rgba(255, 255, 255, 0.15);
        }

        /* Container */
        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            padding: 16px 0;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--glass-border);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            height: 40px;
            width: auto;
            content: var(--logo-url);
        }

        .nav-menu {
            display: none;
            list-style: none;
            gap: 32px;
            align-items: center;
        }

        .nav-menu.active {
            display: flex;
            position: fixed;
            top: 72px;
            left: 0;
            right: 0;
            flex-direction: column;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--glass-border);
            padding: 20px;
            gap: 16px;
        }

        .nav-link {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: var(--color-green);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .theme-toggle {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--text-primary);
        }

        .theme-toggle:hover {
            background: var(--color-green);
            border-color: var(--color-green);
            color: #0a0a0f;
        }

        .hamburger {
            display: flex;
            flex-direction: column;
            gap: 4px;
            cursor: pointer;
            padding: 8px;
        }

        .hamburger span {
            width: 24px;
            height: 2px;
            background: var(--text-primary);
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(6px, 6px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(6px, -6px);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 0 80px;
            position: relative;
        }

        .hero-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-title {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(36px, 8vw, 72px);
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 24px;
            background: linear-gradient(135deg, var(--text-primary) 0%, var(--color-green) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: clamp(16px, 3vw, 20px);
            color: var(--text-secondary);
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 16px 32px;
            background: var(--color-green);
            color: #0a0a0f;
            font-weight: 600;
            font-size: 16px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 24px rgba(109, 202, 62, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 32px rgba(109, 202, 62, 0.4);
        }

        /* Form Section */
        .form-section {
            padding: 80px 0;
        }

        .section-title {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(28px, 5vw, 48px);
            font-weight: 700;
            text-align: center;
            margin-bottom: 48px;
        }

        .form-card {
            max-width: 600px;
            margin: 0 auto;
            padding: 32px 24px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 14px;
            color: var(--text-secondary);
        }

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 12px 16px;
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            color: var(--text-primary);
            font-family: inherit;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--color-green);
            box-shadow: 0 0 0 3px rgba(109, 202, 62, 0.1);
        }

        .form-textarea {
            min-height: 100px;
            resize: vertical;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 16px;
            padding: 16px;
            background: var(--glass-bg);
            border-radius: 12px;
            border: 1px solid var(--glass-border);
        }

        .checkbox-input {
            margin-top: 4px;
            cursor: pointer;
            accent-color: var(--color-green);
        }

        .checkbox-label {
            font-size: 14px;
            color: var(--text-secondary);
            cursor: pointer;
        }

        .checkbox-benefit {
            display: block;
            font-size: 12px;
            color: var(--color-green);
            margin-top: 4px;
        }

        .submit-button {
            width: 100%;
            padding: 16px;
            background: var(--color-green);
            color: #0a0a0f;
            font-weight: 600;
            font-size: 16px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(109, 202, 62, 0.3);
        }

        .form-message {
            padding: 16px;
            border-radius: 12px;
            margin-bottom: 24px;
            text-align: center;
        }

        .form-message.success {
            background: rgba(109, 202, 62, 0.1);
            border: 1px solid var(--color-green);
            color: var(--color-green);
        }

        .form-message.error {
            background: rgba(255, 82, 82, 0.1);
            border: 1px solid #ff5252;
            color: #ff5252;
        }

        /* Plans Section */
        .plans-section {
            padding: 80px 0;
            background: var(--bg-secondary);
        }

        .plans-container {
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .plans-container::-webkit-scrollbar {
            display: none;
        }

        .plans-wrapper {
            display: flex;
            gap: 20px;
            padding: 0 20px 20px;
        }

        .plan-card {
            flex: 0 0 280px;
            scroll-snap-align: center;
            padding: 32px 24px;
            position: relative;
        }

        .plan-name {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .plan-price {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 4px;
            color: var(--color-green);
        }

        .plan-price span {
            font-size: 18px;
            color: var(--text-secondary);
        }

        .plan-annual {
            font-size: 12px;
            color: var(--color-purple);
            margin-bottom: 24px;
            display: block;
        }

        .plan-features {
            list-style: none;
            margin-bottom: 24px;
        }

        .plan-features li {
            padding: 8px 0;
            font-size: 14px;
            color: var(--text-secondary);
            border-bottom: 1px solid var(--glass-border);
        }

        .plan-features li:last-child {
            border-bottom: none;
        }

        .plan-button {
            width: 100%;
            padding: 12px;
            background: transparent;
            color: var(--color-green);
            border: 1px solid var(--color-green);
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .plan-button:hover {
            background: var(--color-green);
            color: #0a0a0f;
        }

        .plan-card.featured {
            border: 2px solid var(--color-green);
            box-shadow: 0 0 40px rgba(109, 202, 62, 0.2);
        }

        /* Platforms Section */
        .platforms-section {
            padding: 80px 0;
            overflow: hidden;
        }

        .marquee {
            position: relative;
            overflow: hidden;
            margin-top: 48px;
        }

        .marquee-content {
            display: flex;
            gap: 20px;
            animation: scroll 40s linear infinite;
        }

        .marquee-content:hover {
            animation-play-state: paused;
        }

        .marquee-content.paused {
            animation-play-state: paused;
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .platform-card {
            flex: 0 0 160px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            text-align: center;
            font-weight: 600;
            font-size: 14px;
            white-space: nowrap;
        }

        /* Footer */
        .footer {
            padding: 40px 0;
            text-align: center;
            border-top: 1px solid var(--glass-border);
        }

        .footer-text {
            color: var(--text-muted);
            font-size: 14px;
        }

        /* Tablet Styles */
        @media (min-width: 768px) {
            .hamburger {
                display: none;
            }

            .nav-menu {
                display: flex;
            }

            .nav-menu.active {
                position: static;
                flex-direction: row;
                background: transparent;
                border: none;
                padding: 0;
            }

            .form-card {
                padding: 48px 40px;
            }

            .plans-wrapper {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                padding: 0;
            }

            .plans-container {
                overflow: visible;
            }

            .plan-card {
                flex: none;
                scroll-snap-align: none;
            }
        }

        /* Desktop Styles */
        @media (min-width: 1200px) {
            .container {
                padding: 0 40px;
            }

            .plans-wrapper {
                grid-template-columns: repeat(4, 1fr);
            }

            .marquee-content {
                gap: 24px;
            }

            .platform-card {
                flex: 0 0 180px;
                height: 120px;
            }
        }
    </style>
</head>
<body>
    <!-- Background Effects -->
    <div class="bg-effects">
        <div class="nebula-glow nebula-1"></div>
        <div class="nebula-glow nebula-2"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-container">
                <img src="https://i.imgur.com/qE8zQuw.png" alt="TIATFT Logo" class="logo" id="logo">

                <ul class="nav-menu" id="navMenu">
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="#join" class="nav-link">Join</a></li>
                    <li><a href="#plans" class="nav-link">Plans</a></li>
                    <li><a href="#platforms" class="nav-link">Platforms</a></li>
                </ul>

                <div class="nav-actions">
                    <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                    </button>
                    <div class="hamburger" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">There Is A Template For That</h1>
                <p class="hero-subtitle">
                    The marketplace for premium templates across all platforms.
                    Find the perfect template to accelerate your next project.
                </p>
                <a href="#join" class="cta-button">
                    Get Early Access
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section class="form-section" id="join">
        <div class="container">
            <h2 class="section-title">Join the Waitlist</h2>

            <div class="form-card glass-card">
                <?php if ($formSubmitted): ?>
                    <div class="form-message success">
                        ✓ Thank you! Your submission has been received.
                    </div>
                <?php elseif ($formError): ?>
                    <div class="form-message error">
                        ✗ <?php echo htmlspecialchars($errorMessage); ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="" id="signupForm">
                    <div class="form-group">
                        <label class="form-label" for="fullName">Full Name</label>
                        <input type="text" id="fullName" name="fullName" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="country">Country</label>
                        <input type="text" id="country" name="country" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="platform">Preferred Platform</label>
                        <select id="platform" name="platform" class="form-select" required>
                            <option value="">Select a platform...</option>
                            <option value="n8n">n8n</option>
                            <option value="Notion">Notion</option>
                            <option value="Bubble">Bubble</option>
                            <option value="Flutterflow">Flutterflow</option>
                            <option value="Webflow">Webflow</option>
                            <option value="WeWeb">WeWeb</option>
                            <option value="Power BI">Power BI</option>
                            <option value="CrewAI">CrewAI</option>
                            <option value="Make.com">Make.com</option>
                            <option value="Zapier">Zapier</option>
                            <option value="Go High Level">Go High Level</option>
                            <option value="Google Docs">Google Docs</option>
                            <option value="Google Sheets">Google Sheets</option>
                            <option value="Word">Word</option>
                            <option value="Excel">Excel</option>
                            <option value="Airtable">Airtable</option>
                            <option value="ClickUp">ClickUp</option>
                            <option value="Figma">Figma</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="notes">Notes (Optional)</label>
                        <textarea id="notes" name="notes" class="form-textarea" placeholder="Tell us more about your needs..."></textarea>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="joinFirst100" name="joinFirst100" class="checkbox-input">
                        <label for="joinFirst100" class="checkbox-label">
                            Join the first 100 users
                            <span class="checkbox-benefit">Get 6 months PRO plan with 0% fees</span>
                        </label>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="joinFirst500" name="joinFirst500" class="checkbox-input">
                        <label for="joinFirst500" class="checkbox-label">
                            Join the first 500 producers
                            <span class="checkbox-benefit">Get one template with 0% fee for 3 months</span>
                        </label>
                    </div>

                    <button type="submit" class="submit-button">Submit Application</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="plans-section" id="plans">
        <div class="container">
            <h2 class="section-title">Choose Your Plan</h2>

            <div class="plans-container">
                <div class="plans-wrapper">
                    <div class="plan-card glass-card">
                        <div class="plan-name">Free</div>
                        <div class="plan-price">$0<span>/mo</span></div>
                        <span class="plan-annual">Perfect to start</span>
                        <ul class="plan-features">
                            <li>15% transaction fee</li>
                            <li>Up to 10 templates</li>
                            <li>Basic analytics</li>
                            <li>Community support</li>
                        </ul>
                        <button class="plan-button">Get Started</button>
                    </div>

                    <div class="plan-card glass-card">
                        <div class="plan-name">Starter</div>
                        <div class="plan-price">$9<span>/mo</span></div>
                        <span class="plan-annual">Save 20% annually</span>
                        <ul class="plan-features">
                            <li>10% transaction fee</li>
                            <li>Up to 50 templates</li>
                            <li>Advanced analytics</li>
                            <li>Priority support</li>
                        </ul>
                        <button class="plan-button">Get Started</button>
                    </div>

                    <div class="plan-card glass-card featured">
                        <div class="plan-name">Pro</div>
                        <div class="plan-price">$19<span>/mo</span></div>
                        <span class="plan-annual">Save 25% annually</span>
                        <ul class="plan-features">
                            <li>8% transaction fee</li>
                            <li>Up to 150 templates</li>
                            <li>1 featured listing/day every 90 days</li>
                            <li>Premium support</li>
                        </ul>
                        <button class="plan-button">Get Started</button>
                    </div>

                    <div class="plan-card glass-card">
                        <div class="plan-name">Unlimited</div>
                        <div class="plan-price">$39<span>/mo</span></div>
                        <span class="plan-annual">Save 30% annually</span>
                        <ul class="plan-features">
                            <li>5% transaction fee</li>
                            <li>Unlimited templates</li>
                            <li>1 featured listing/month</li>
                            <li>Dedicated support</li>
                        </ul>
                        <button class="plan-button">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platforms Section -->
    <section class="platforms-section" id="platforms">
        <div class="container">
            <h2 class="section-title">Supported Platforms</h2>
        </div>

        <div class="marquee">
            <div class="marquee-content" id="marqueeContent">
                <!-- First set -->
                <div class="platform-card glass-card">n8n</div>
                <div class="platform-card glass-card">Notion</div>
                <div class="platform-card glass-card">Bubble</div>
                <div class="platform-card glass-card">Flutterflow</div>
                <div class="platform-card glass-card">Webflow</div>
                <div class="platform-card glass-card">WeWeb</div>
                <div class="platform-card glass-card">Power BI</div>
                <div class="platform-card glass-card">CrewAI</div>
                <div class="platform-card glass-card">Make.com</div>
                <div class="platform-card glass-card">Zapier</div>
                <div class="platform-card glass-card">Go High Level</div>
                <div class="platform-card glass-card">Google Docs</div>
                <div class="platform-card glass-card">Google Sheets</div>
                <div class="platform-card glass-card">Word</div>
                <div class="platform-card glass-card">Excel</div>
                <div class="platform-card glass-card">Airtable</div>
                <div class="platform-card glass-card">ClickUp</div>
                <div class="platform-card glass-card">Figma</div>

                <!-- Duplicate set for infinite scroll -->
                <div class="platform-card glass-card">n8n</div>
                <div class="platform-card glass-card">Notion</div>
                <div class="platform-card glass-card">Bubble</div>
                <div class="platform-card glass-card">Flutterflow</div>
                <div class="platform-card glass-card">Webflow</div>
                <div class="platform-card glass-card">WeWeb</div>
                <div class="platform-card glass-card">Power BI</div>
                <div class="platform-card glass-card">CrewAI</div>
                <div class="platform-card glass-card">Make.com</div>
                <div class="platform-card glass-card">Zapier</div>
                <div class="platform-card glass-card">Go High Level</div>
                <div class="platform-card glass-card">Google Docs</div>
                <div class="platform-card glass-card">Google Sheets</div>
                <div class="platform-card glass-card">Word</div>
                <div class="platform-card glass-card">Excel</div>
                <div class="platform-card glass-card">Airtable</div>
                <div class="platform-card glass-card">ClickUp</div>
                <div class="platform-card glass-card">Figma</div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="footer-text">© 2024 TIATFT - There Is A Template For That. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const htmlElement = document.documentElement;
        const logo = document.getElementById('logo');

        // Check for saved theme preference or default to dark
        const currentTheme = localStorage.getItem('theme') || 'dark';
        if (currentTheme === 'light') {
            htmlElement.setAttribute('data-theme', 'light');
            logo.src = 'https://i.imgur.com/X5XQhzl.png';
        }

        themeToggle.addEventListener('click', () => {
            const theme = htmlElement.getAttribute('data-theme');

            if (theme === 'light') {
                htmlElement.removeAttribute('data-theme');
                logo.src = 'https://i.imgur.com/qE8zQuw.png';
                localStorage.setItem('theme', 'dark');
            } else {
                htmlElement.setAttribute('data-theme', 'light');
                logo.src = 'https://i.imgur.com/X5XQhzl.png';
                localStorage.setItem('theme', 'light');
            }
        });

        // Mobile Navigation
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Marquee pause on touch
        const marqueeContent = document.getElementById('marqueeContent');
        let touchStartX = 0;

        marqueeContent.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].clientX;
            marqueeContent.classList.add('paused');
        });

        marqueeContent.addEventListener('touchend', () => {
            marqueeContent.classList.remove('paused');
        });

        // Form validation
        const signupForm = document.getElementById('signupForm');

        signupForm.addEventListener('submit', (e) => {
            const email = document.getElementById('email').value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert('Please enter a valid email address');
                return false;
            }
        });

        // Add entrance animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all glass cards
        document.querySelectorAll('.glass-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>
