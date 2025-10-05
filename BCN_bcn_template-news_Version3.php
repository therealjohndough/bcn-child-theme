<?php
/*
 * Template Name: BCN News Page
 * Description: Buffalo Cannabis Network branded news template for Astra child theme.
 */
get_header(); ?>

<main id="main" class="site-main">
    <section class="page-header">
        <h1>News & Industry Insights</h1>
        <p>Stay informed with the latest updates from New York's cannabis industry</p>
    </section>

    <section class="filter-section">
        <div class="filter-container">
            <button class="filter-btn active">All Articles</button>
            <button class="filter-btn">Industry News</button>
            <button class="filter-btn">Market Reports</button>
            <button class="filter-btn">Regulatory Updates</button>
            <button class="filter-btn">Member Spotlights</button>
            <button class="filter-btn">Events</button>
        </div>
    </section>

    <section class="featured-article">
        <div class="featured-card">
            <div class="featured-image">RPT</div>
            <div class="featured-content">
                <span class="article-badge">Featured Report</span>
                <h2>New York Cannabis Market Overview: 2024-Early 2025</h2>
                <div class="article-meta">
                    <span>Date: October 1, 2025</span>
                    <span>Read: 8 min</span>
                    <span>By: BCN Editor</span>
                </div>
                <p>A comprehensive, data-packed overview of New York's cannabis market from 2024 to early 2025, highlighting over $1B in sales, dispensary growth, brand saturation, and regional insights from Buffalo and Western NY.</p>
                <a href="#" class="btn btn-primary">Read Full Report</a>
            </div>
        </div>
    </section>

    <section class="articles-section">
        <div class="section-header">
            <h2>Latest Articles</h2>
        </div>
        <div class="articles-grid">
            <div class="article-card">
                <div class="article-image">REG</div>
                <div class="article-content">
                    <span class="category-tag">Regulatory</span>
                    <h3>NY Cannabis Crackdown: Charlie Fox and Basin Mixtures Fined $50K</h3>
                    <p class="article-excerpt">An in-depth look at the recent branding violation case and its implications for cross-tier branding in New York's cannabis industry.</p>
                    <div class="article-footer">
                        <span class="article-date">September 28, 2025</span>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="article-card">
                <div class="article-image">MBR</div>
                <div class="article-content">
                    <span class="category-tag">Member Spotlight</span>
                    <h3>From TBI Survivor to Cannabis Industry Leader: Nikki Lawley's Journey</h3>
                    <p class="article-excerpt">Discover how Nikki Lawley turned to cannabis for healing and now helps others navigate plant medicine across Western New York.</p>
                    <div class="article-footer">
                        <span class="article-date">September 15, 2025</span>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="article-card">
                <div class="article-image">EVT</div>
                <div class="article-content">
                    <span class="category-tag">Events</span>
                    <h3>Buffalo Cannabis Network Dispensary Showcase Recap</h3>
                    <p class="article-excerpt">BCN made organizational history this June when we hosted one of our first major industry showcases. See photos and highlights.</p>
                    <div class="article-footer">
                        <span class="article-date">June 30, 2025</span>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="article-card">
                <div class="article-image">IND</div>
                <div class="article-content">
                    <span class="category-tag">Industry News</span>
                    <h3>Understanding New York's Social Equity Program</h3>
                    <p class="article-excerpt">A comprehensive guide to NY's cannabis social equity licensing, requirements, and opportunities for aspiring entrepreneurs.</p>
                    <div class="article-footer">
                        <span class="article-date">August 20, 2025</span>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="article-card">
                <div class="article-image">BIZ</div>
                <div class="article-content">
                    <span class="category-tag">Business</span>
                    <h3>Building a Successful Cannabis Brand in Western NY</h3>
                    <p class="article-excerpt">Insights from local entrepreneurs on what it takes to launch and scale a cannabis brand in the Buffalo market.</p>
                    <div class="article-footer">
                        <span class="article-date">July 12, 2025</span>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="article-card">
                <div class="article-image">MKT</div>
                <div class="article-content">
                    <span class="category-tag">Market Report</span>
                    <h3>Q2 2025 Western NY Cannabis Market Analysis</h3>
                    <p class="article-excerpt">Sales trends, consumer behavior, and growth projections for the Buffalo and WNY cannabis market in Q2 2025.</p>
                    <div class="article-footer">
                        <span class="article-date">June 15, 2025</span>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter-signup">
        <div class="newsletter-container">
            <h2>Stay Updated</h2>
            <p>Get the latest cannabis industry news, market insights, and BCN updates delivered to your inbox</p>
            <div class="newsletter-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>