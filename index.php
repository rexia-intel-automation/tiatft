<?php
    $currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIATFT - There Is a Template For That</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/dark.css">
</head>
<body data-theme="dark">
    <div class="grid-background"></div>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    <?php include __DIR__ . '/components/navbar.php'; ?>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-badge">
                <span class="badge-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4 20l8.5-3.5L20 4 7.5 11.5 4 20zM13 11l2 2" />
                    </svg>
                </span>
                <span>First 500 sellers: 0% fees on 1 template for 6 months after launch</span>
            </div>

            <h1>The Universal<br>Template Marketplace</h1>

            <p class="hero-subtitle">
                Every digital template. One platform. From n8n workflows to Bubble apps,
                Notion databases to AI agents. Built for creators who refuse to compromise.
                <br><span class="highlight">Public launch planned for March 2026.</span>
            </p>

            <div class="cta-group">
                <a href="#pricing" class="cta-primary">Become a Founding Seller</a>
                <a href="#categories" class="cta-secondary">Explore Categories</a>
            </div>

            <div class="stats">
                <div class="stat">
                    <div class="stat-value">12+</div>
                    <div class="stat-label">Template Categories</div>
                </div>
                <div class="stat">
                    <div class="stat-value">500</div>
                    <div class="stat-label">Founding Seller Spots</div>
                </div>
                <div class="stat">
                    <div class="stat-value">5%</div>
                    <div class="stat-label">Lowest Commission</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="categories">
        <div class="section-header">
            <h2 class="section-title">Every Template Type</h2>
            <p class="section-description">
                If it is a digital template, it belongs here. No exceptions.
            </p>
        </div>
        <div class="categories-grid">
            <div class="category-card">n8n</div>
            <div class="category-card">Make.com</div>
            <div class="category-card">Bubble</div>
            <div class="category-card">Notion</div>
            <div class="category-card">Webflow</div>
            <div class="category-card">GoHighLevel</div>
            <div class="category-card">Google Sheets</div>
            <div class="category-card">Power Automate</div>
            <div class="category-card">FlutterFlow</div>
            <div class="category-card">AI Agents</div>
            <div class="category-card">WeWeb</div>
            <div class="category-card">PowerBI</div>
        </div>
    </section>

    <section class="pricing-section" id="pricing">
        <div class="section-header">
            <h2 class="section-title">Built for Scale</h2>
            <p class="section-description">
                From your first template to your entire business. Pricing that grows with you.
            </p>
        </div>
        <div class="pricing-container">
            <div class="pricing-card">
                <div class="plan-name">Free</div>
                <div class="plan-price">$0<span>/mo</span></div>
                <ul class="plan-features">
                    <li>10 templates</li>
                    <li>10% commission</li>
                    <li>Basic analytics</li>
                    <li>Community support</li>
                </ul>
                <button class="plan-button">Start Free</button>
            </div>

            <div class="pricing-card">
                <div class="plan-name">Starter</div>
                <div class="plan-price">$9<span>/mo</span></div>
                <div class="plan-interval">$90/year · Save $18</div>
                <ul class="plan-features">
                    <li>50 templates</li>
                    <li>8.5% commission</li>
                    <li>Advanced analytics</li>
                    <li>Priority support</li>
                </ul>
                <button class="plan-button">Get Started</button>
            </div>

            <div class="pricing-card">
                <div class="pricing-badge">Popular</div>
                <div class="plan-name">Pro</div>
                <div class="plan-price">$19<span>/mo</span></div>
                <div class="plan-interval">$190/year · Save $38</div>
                <ul class="plan-features">
                    <li>150 templates</li>
                    <li>7.5% commission</li>
                    <li>Custom domain</li>
                    <li>Advanced analytics</li>
                    <li>Priority support</li>
                    <li>Founding bonus: first 100 Pro creators pay no subscription for 6 months after launch</li>
                </ul>
                <button class="plan-button">Go Pro</button>
            </div>

            <div class="pricing-card">
                <div class="plan-name">Unlimited</div>
                <div class="plan-price">$39<span>/mo</span></div>
                <div class="plan-interval">$390/year · Save $78</div>
                <ul class="plan-features">
                    <li>Unlimited templates</li>
                    <li>5% commission</li>
                    <li>5 featured/mo</li>
                    <li>Top Creator badge</li>
                    <li>Homepage feature</li>
                    <li>VIP support</li>
                </ul>
                <button class="plan-button">Go Unlimited</button>
            </div>
        </div>
    </section>

    <section class="launch-offer">
        <h2 class="launch-title">Founding Seller Program</h2>
        <p class="launch-subtitle">
            Join the first 500 and build the future of digital templates. Benefits start counting after the marketplace goes live.
        </p>

        <div class="offer-grid">
            <div class="offer-card">
                <div class="offer-value">0%</div>
                <div class="offer-label">Fees on 1 template for 6 months after launch (first 500 sellers)</div>
            </div>
            <div class="offer-card">
                <div class="offer-value">6mo</div>
                <div class="offer-label">No monthly subscription for the first 100 subscribers of the Pro plan</div>
            </div>
            <div class="offer-card">
                <div class="offer-value">500</div>
                <div class="offer-label">Exclusive founding seller spots</div>
            </div>
        </div>

        <a href="#signup" class="cta-primary">Claim Your Spot</a>
    </section>

    <?php include __DIR__ . '/components/footer.php'; ?>

    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/darkmode.js"></script>
</body>
</html>
