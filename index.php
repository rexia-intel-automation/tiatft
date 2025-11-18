<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIATFT - The Universal Template Marketplace</title>
    <meta name="description" content="Every digital template. One platform. From n8n workflows to Bubble apps, Notion databases to AI agents.">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="/" class="logo">
                <img src="assets/img/logo-purple.png" alt="TIATFT" class="logo-dark" width="120" height="40">
                <img src="assets/img/logo-green.png" alt="TIATFT" class="logo-light" width="120" height="40">
            </a>

            <button class="mobile-toggle" aria-label="Toggle menu">
                <i data-lucide="menu"></i>
            </button>

            <div class="nav-menu">
                <button class="theme-toggle" aria-label="Toggle theme">
                    <i data-lucide="sun" class="sun-icon"></i>
                    <i data-lucide="moon" class="moon-icon"></i>
                </button>
                <a href="apply.php" class="btn btn-primary">Join Waitlist</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="hero-badge">
                <i data-lucide="zap"></i>
                <span>First 500 sellers: 0% fees on 1 template for 6 months</span>
            </div>

            <h1 class="hero-title">
                The Universal<br>
                Template Marketplace
            </h1>

            <p class="hero-description">
                Every digital template. One platform. From n8n workflows to Bubble apps,
                Notion databases to AI agents. Built for creators who refuse to compromise.
            </p>

            <p class="hero-launch">
                <i data-lucide="calendar"></i>
                Public launch planned for March 2026
            </p>

            <div class="hero-cta">
                <a href="apply.php" class="btn btn-primary btn-lg">
                    <i data-lucide="rocket"></i>
                    Become a Founding Seller
                </a>
                <a href="#categories" class="btn btn-secondary btn-lg">
                    <i data-lucide="grid-3x3"></i>
                    Explore Categories
                </a>
            </div>

            <div class="hero-stats">
                <div class="stat">
                    <div class="stat-number">12+</div>
                    <div class="stat-label">Template Categories</div>
                </div>
                <div class="stat">
                    <div class="stat-number">500</div>
                    <div class="stat-label">Founding Seller Spots</div>
                </div>
                <div class="stat">
                    <div class="stat-number">5%</div>
                    <div class="stat-label">Lowest Commission</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="section" id="categories">
        <div class="container">
            <h2 class="section-title">Every Template Type</h2>
            <p class="section-subtitle">
                If it is a digital template, it belongs here. No exceptions.
            </p>

            <div class="categories-grid">
                <div class="category-card">
                    <i data-lucide="workflow"></i>
                    <span>n8n</span>
                </div>
                <div class="category-card">
                    <i data-lucide="git-branch"></i>
                    <span>Make.com</span>
                </div>
                <div class="category-card">
                    <i data-lucide="layers"></i>
                    <span>Bubble</span>
                </div>
                <div class="category-card">
                    <i data-lucide="smartphone"></i>
                    <span>FlutterFlow</span>
                </div>
                <div class="category-card">
                    <i data-lucide="bar-chart"></i>
                    <span>GoHighLevel</span>
                </div>
                <div class="category-card">
                    <i data-lucide="file-text"></i>
                    <span>Notion</span>
                </div>
                <div class="category-card">
                    <i data-lucide="layout"></i>
                    <span>Webflow</span>
                </div>
                <div class="category-card">
                    <i data-lucide="code"></i>
                    <span>WeWeb</span>
                </div>
                <div class="category-card">
                    <i data-lucide="zap"></i>
                    <span>Zapier</span>
                </div>
                <div class="category-card">
                    <i data-lucide="pie-chart"></i>
                    <span>PowerBI</span>
                </div>
                <div class="category-card">
                    <i data-lucide="table"></i>
                    <span>Google Sheets</span>
                </div>
                <div class="category-card">
                    <i data-lucide="cpu"></i>
                    <span>AI Agents</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="section pricing-section" id="pricing">
        <div class="container">
            <h2 class="section-title">Built for Scale</h2>
            <p class="section-subtitle">
                From your first template to your entire business. Pricing that grows with you.
            </p>

            <div class="pricing-grid">
                <!-- Free -->
                <div class="pricing-card">
                    <h3 class="plan-name">Free</h3>
                    <div class="plan-price">
                        <span class="price">$0</span>
                        <span class="period">/mo</span>
                    </div>
                    <ul class="plan-features">
                        <li><i data-lucide="check"></i> 10 templates</li>
                        <li><i data-lucide="check"></i> 10% commission</li>
                        <li><i data-lucide="check"></i> Basic analytics</li>
                        <li><i data-lucide="check"></i> Community support</li>
                    </ul>
                    <a href="apply.php" class="btn btn-secondary btn-block">Start Free</a>
                </div>

                <!-- Starter -->
                <div class="pricing-card">
                    <h3 class="plan-name">Starter</h3>
                    <div class="plan-price">
                        <span class="price">$9</span>
                        <span class="period">/mo</span>
                    </div>
                    <p class="plan-interval">$90/year · Save $18</p>
                    <ul class="plan-features">
                        <li><i data-lucide="check"></i> 50 templates</li>
                        <li><i data-lucide="check"></i> 8.5% commission</li>
                        <li><i data-lucide="check"></i> Advanced analytics</li>
                        <li><i data-lucide="check"></i> Priority support</li>
                    </ul>
                    <a href="apply.php" class="btn btn-secondary btn-block">Get Started</a>
                </div>

                <!-- Pro -->
                <div class="pricing-card featured">
                    <div class="badge">Popular</div>
                    <h3 class="plan-name">Pro</h3>
                    <div class="plan-price">
                        <span class="price">$19</span>
                        <span class="period">/mo</span>
                    </div>
                    <p class="plan-interval">$190/year · Save $38</p>
                    <ul class="plan-features">
                        <li><i data-lucide="check"></i> 150 templates</li>
                        <li><i data-lucide="check"></i> 7.5% commission</li>
                        <li><i data-lucide="check"></i> Custom domain</li>
                        <li><i data-lucide="check"></i> Advanced analytics</li>
                        <li><i data-lucide="check"></i> Priority support</li>
                        <li><i data-lucide="star"></i> First 100: Free for 6mo</li>
                    </ul>
                    <a href="apply.php" class="btn btn-primary btn-block">Go Pro</a>
                </div>

                <!-- Unlimited -->
                <div class="pricing-card">
                    <h3 class="plan-name">Unlimited</h3>
                    <div class="plan-price">
                        <span class="price">$39</span>
                        <span class="period">/mo</span>
                    </div>
                    <p class="plan-interval">$390/year · Save $78</p>
                    <ul class="plan-features">
                        <li><i data-lucide="check"></i> Unlimited templates</li>
                        <li><i data-lucide="check"></i> 5% commission</li>
                        <li><i data-lucide="check"></i> 5 featured/mo</li>
                        <li><i data-lucide="check"></i> Top Creator badge</li>
                        <li><i data-lucide="check"></i> Homepage feature</li>
                        <li><i data-lucide="check"></i> VIP support</li>
                    </ul>
                    <a href="apply.php" class="btn btn-secondary btn-block">Go Unlimited</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Founding Program -->
    <section class="section founding-section">
        <div class="container">
            <h2 class="section-title">Founding Seller Program</h2>
            <p class="section-subtitle">
                Join the first 500 and build the future of digital templates
            </p>

            <div class="founding-grid">
                <div class="founding-card">
                    <i data-lucide="percent"></i>
                    <div class="founding-value">0%</div>
                    <p>Commission on 1 template for 6 months</p>
                </div>
                <div class="founding-card">
                    <i data-lucide="calendar"></i>
                    <div class="founding-value">6mo</div>
                    <p>Free Pro subscription (first 100)</p>
                </div>
                <div class="founding-card">
                    <i data-lucide="users"></i>
                    <div class="founding-value">500</div>
                    <p>Exclusive founding seller spots</p>
                </div>
            </div>

            <div class="founding-cta">
                <a href="apply.php" class="btn btn-primary btn-lg">
                    <i data-lucide="rocket"></i>
                    Claim Your Spot
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section" id="faq">
        <div class="container">
            <h2 class="section-title">FAQ</h2>
            <p class="section-subtitle">
                Key answers before you commit templates and time
            </p>

            <div class="faq-grid">
                <div class="faq-item">
                    <h3>When does the 0% commission start counting?</h3>
                    <p>It starts on the official public launch of the marketplace and runs for 6 months on 1 selected template.</p>
                </div>
                <div class="faq-item">
                    <h3>How do you select the 100 Pro slots?</h3>
                    <p>The first 100 valid Pro subscribers with the reservation flag enabled will be eligible for 6 months with no subscription fee after launch.</p>
                </div>
                <div class="faq-item">
                    <h3>Can I sell templates on multiple platforms?</h3>
                    <p>Yes. TIATFT is designed for multi-platform template catalogs across automation, apps, dashboards and AI agents.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 TIATFT - There Is a Template For That. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Theme toggle
        const themeToggle = document.querySelector('.theme-toggle');
        const html = document.documentElement;

        themeToggle?.addEventListener('click', () => {
            const current = html.getAttribute('data-theme');
            html.setAttribute('data-theme', current === 'dark' ? 'light' : 'dark');
            localStorage.setItem('theme', current === 'dark' ? 'light' : 'dark');
            lucide.createIcons();
        });

        // Load saved theme
        const savedTheme = localStorage.getItem('theme') || 'dark';
        html.setAttribute('data-theme', savedTheme);

        // Mobile menu
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navMenu = document.querySelector('.nav-menu');

        mobileToggle?.addEventListener('click', () => {
            navMenu?.classList.toggle('active');
            mobileToggle.classList.toggle('active');
            document.body.style.overflow = navMenu?.classList.contains('active') ? 'hidden' : '';
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        navMenu?.classList.remove('active');
                        document.body.style.overflow = '';
                        const navHeight = document.querySelector('.navbar')?.offsetHeight || 0;
                        const targetPos = target.offsetTop - navHeight - 20;
                        window.scrollTo({ top: targetPos, behavior: 'smooth' });
                    }
                }
            });
        });
    </script>
</body>
</html>
