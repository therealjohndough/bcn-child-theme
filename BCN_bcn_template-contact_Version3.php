<?php
/*
 * Template Name: BCN Contact Page
 * Description: Buffalo Cannabis Network branded contact template for Astra child theme.
 */
get_header(); ?>

<main id="main" class="site-main">
    <section class="page-header">
        <h1>Get in Touch</h1>
        <p>Questions about membership, partnerships, or BCN events? We're here to help</p>
    </section>

    <section class="contact-section">
        <div class="contact-info">
            <h2>Let's Connect</h2>
            <p>Whether you're interested in membership, partnership opportunities, or have general questions about Buffalo Cannabis Network, we're here to help.</p>
            <div class="info-items">
                <div class="info-item">
                    <div class="info-icon">L</div>
                    <div class="info-content">
                        <h3>Visit Us</h3>
                        <p>505 Ellicott St.<br>Buffalo, NY 14203</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">P</div>
                    <div class="info-content">
                        <h3>Call Us</h3>
                        <p><a href="tel:716-507-3501">716-507-3501</a></p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">E</div>
                    <div class="info-content">
                        <h3>Email Us</h3>
                        <p><a href="mailto:info@buffalocannabisnetwork.com">info@buffalocannabisnetwork.com</a></p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">H</div>
                    <div class="info-content">
                        <h3>Office Hours</h3>
                        <p>Monday - Friday: 9:00 AM - 5:00 PM<br>Saturday - Sunday: By Appointment</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <h3>Send Us a Message</h3>
            <p class="subtitle">Fill out the form below and we'll get back to you within 24 hours</p>
            <form>
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required placeholder="john@example.com">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="(716) 555-0123">
                </div>
                <div class="form-group">
                    <label for="inquiry">Inquiry Type *</label>
                    <select id="inquiry" name="inquiry" required>
                        <option value="">Select an option</option>
                        <option value="membership">Membership Information</option>
                        <option value="partnership">Partnership Opportunities</option>
                        <option value="media">Media Inquiries</option>
                        <option value="events">Event Information</option>
                        <option value="general">General Question</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" required placeholder="Tell us how we can help..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <section class="inquiry-types">
        <div class="inquiry-container">
            <div class="section-header">
                <h2>How Can We Help?</h2>
                <p>We're here to support you in various ways</p>
            </div>
            <div class="inquiry-grid">
                <div class="inquiry-card">
                    <div class="inquiry-icon">M</div>
                    <h3>Membership</h3>
                    <p>Learn about our membership tiers and join the fastest-growing cannabis community in Western New York.</p>
                </div>
                <div class="inquiry-card">
                    <div class="inquiry-icon">P</div>
                    <h3>Partnerships</h3>
                    <p>Explore partnership opportunities to grow your business and increase brand visibility in the region.</p>
                </div>
                <div class="inquiry-card">
                    <div class="inquiry-icon">N</div>
                    <h3>Media Inquiries</h3>
                    <p>Press and media professionals can reach out for interviews, statements, and industry insights.</p>
                </div>
                <div class="inquiry-card">
                    <div class="inquiry-icon">S</div>
                    <h3>Speaking & Events</h3>
                    <p>Interested in speaking at our events or hosting an event with BCN? Let's discuss the possibilities.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div class="section-header">
            <h2>Find Us</h2>
            <p>Located in the heart of downtown Buffalo</p>
        </div>
        <div class="map-container">
            <div class="map-placeholder">
                <div class="icon">MAP</div>
                <p>505 Ellicott St, Buffalo, NY 14203</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>