<?php
/*
 * Template Name: BCN Home Page
 * Description: Buffalo Cannabis Network branded homepage template for Astra child theme.
 */
get_header(); ?>

<main id="main" class="site-main">
    <section class="hero">
        <div class="hero-content">
            <h1>Building Buffalo's Cannabis Future, Together</h1>
            <p class="tagline">Connect. Support. Elevate.</p>
            <p class="subtitle">Western New York's premier network fostering a thriving, collaborative, and responsible cannabis industry</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url( home_url('#membership') ); ?>" class="btn btn-primary">Join the Network</a>
                <a href="<?php echo esc_url( home_url('#about') ); ?>" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
    </section>

    <section class="mission">
        <h2>The Premier Cannabis Network in <span class="highlight">Western New York</span></h2>
        <p>Buffalo Cannabis Network is more than networking—it's a community where authentic relationships drive industry success. We're building sustainable, lasting connections that elevate professional standards and create opportunities for every stakeholder in WNY's cannabis ecosystem.</p>
    </section>

    <section class="values">
        <div class="section-header">
            <h2>Our Core Values</h2>
            <p>The principles that guide everything we do</p>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <h3>Community-First</h3>
                <p>Local relationships are our foundation. We believe the strongest businesses grow from the strongest communities.</p>
            </div>
            <div class="value-card">
                <h3>Value-Driven</h3>
                <p>Every interaction provides tangible benefit. Your success is our success through practical workshops and direct connections.</p>
            </div>
            <div class="value-card">
                <h3>Authenticity</h3>
                <p>Genuine relationships over transactional networking. No fluff, just results through transparent communication and real problem-solving.</p>
            </div>
            <div class="value-card">
                <h3>Collaboration Over Competition</h3>
                <p>The industry grows when we support each other. A rising tide lifts all boats through resource sharing and open knowledge exchange.</p>
            </div>
            <div class="value-card">
                <h3>Knowledge Is Power</h3>
                <p>Informed decisions drive sustainable growth. Stay informed, stay ahead with educational workshops and regulatory updates.</p>
            </div>
            <div class="value-card">
                <h3>Long-Term Vision</h3>
                <p>Building sustainable, lasting industry presence through strategic planning, community investment, and relationship building. Built to last.</p>
            </div>
        </div>
    </section>

    <section class="benefits">
        <div class="section-header">
            <h2>Your Gateway to WNY Cannabis Success</h2>
            <p>Where relationships become partnerships</p>
        </div>
        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">N</div>
                <h3>Exclusive Networking</h3>
                <p>Connect with Buffalo's most influential cannabis professionals through intimate events designed for meaningful relationship building.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">E</div>
                <h3>Industry Education</h3>
                <p>Stay ahead with regulatory updates, best practices workshops, and expert-led panels on technical knowledge and market insights.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">S</div>
                <h3>Community Spotlight</h3>
                <p>Gain visibility through member features, success story showcases, and collaboration opportunities with local businesses.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">T</div>
                <h3>Thought Leadership</h3>
                <p>Access industry analysis, future trend insights, and policy advocacy from WNY's trusted voice in cannabis.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">G</div>
                <h3>Strategic Guidance</h3>
                <p>Navigate regulations, licensing, and compliance with support from industry experts who understand Buffalo's market.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">R</div>
                <h3>Sustainable Growth</h3>
                <p>Build lasting success through professional standards elevation and responsible industry development practices.</p>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="stats-container">
            <div class="stat-item">
                <h3>500+</h3>
                <p>Connected Members</p>
            </div>
            <div class="stat-item">
                <h3>50+</h3>
                <p>Industry Events</p>
            </div>
            <div class="stat-item">
                <h3>100+</h3>
                <p>Business Partnerships</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>Community Support</p>
            </div>
        </div>
    </section>

    <section class="membership" id="membership">
        <div class="section-header">
            <h2>Join Buffalo's Most Connected Cannabis Community</h2>
            <p>Choose the membership that fits your professional goals</p>
        </div>
        <div class="membership-grid">
            <div class="membership-card">
                <div class="tier-name">Student</div>
                <div class="tier-price">$50</div>
                <div class="price-period">per year</div>
                <ul class="features-list">
                    <li>✓ All networking events</li>
                    <li>✓ Educational workshops</li>
                    <li>✓ Career development resources</li>
                    <li>✓ Industry insights newsletter</li>
                    <li>✓ Student badge & welcome kit</li>
                </ul>
                <a href="#" class="btn btn-primary">Join Now</a>
            </div>
            <div class="membership-card featured">
                <div class="tier-name">Professional</div>
                <div class="tier-price">$150</div>
                <div class="price-period">per year</div>
                <ul class="features-list">
                    <li>✓ Everything in Student</li>
                    <li>✓ Priority event access</li>
                    <li>✓ Member directory listing</li>
                    <li>✓ Market reports & analytics</li>
                    <li>✓ Quarterly exclusive meetups</li>
                </ul>
                <a href="#" class="btn btn-secondary">Get Started</a>
            </div>
            <div class="membership-card">
                <div class="tier-name">Premier</div>
                <div class="tier-price">Custom</div>
                <div class="price-period">contact for pricing</div>
                <ul class="features-list">
                    <li>✓ Everything in Professional</li>
                    <li>✓ Speaking opportunities</li>
                    <li>✓ Brand exposure & features</li>
                    <li>✓ Partnership opportunities</li>
                    <li>✓ 2 company representatives</li>
                </ul>
                <a href="#contact" class="btn btn-primary">Contact Us</a>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="section-header">
            <h2>Trusted by Buffalo's Cannabis Community</h2>
            <p>Real results from real members</p>
        </div>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p>"BCN gave me instant access to the people actually shaping the cannabis space in Buffalo. The networking is authentic and the connections are valuable."</p>
                <div class="testimonial-author">Alyssa M.</div>
                <div class="testimonial-role">Student Member</div>
            </div>
            <div class="testimonial-card">
                <p>"We've built more meaningful partnerships through BCN than any trade show. It's professional, productive, and genuinely community-focused."</p>
                <div class="testimonial-author">Local Business Owner</div>
                <div class="testimonial-role">Premier Member</div>
            </div>
            <div class="testimonial-card">
                <p>"The regulatory guidance and market insights have been invaluable for navigating New York's cannabis landscape. BCN is the go-to resource in WNY."</p>
                <div class="testimonial-author">Industry Professional</div>
                <div class="testimonial-role">Professional Member</div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>