<?php

/**
 * Template Name: Contact Us
 */
get_header(); ?>

<section class="inner-header">
    <div class="container">
        <h2>Get in Touch</h2>
    </div>
</section>

<main class="page-content">
    <div class="container">
        <div class="section-title">
            <span>Connect</span>
            <h2>Inquiries & Reservations</h2>
        </div>

        <div class="contact-container" style="background: white; padding: 60px; border: 1px solid rgba(0,0,0,0.05);">
            <form action="#" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label>Purpose</label>
                        <select>
                            <option>Table Reservation</option>
                            <option>Catering Query</option>
                            <option>General Inquiry</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 40px;">
                    <label>Message</label>
                    <textarea placeholder="How can we help you?" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
            </form>
        </div>

        <div class="specialty-grid footer-info-grid">
            <div style="text-align: center;">
                <h4 style="margin-bottom: 10px;">Email Us</h4>
                <p style="color: #666;">info@mvkheritagefoods.com</p>
            </div>
            <div style="text-align: center;">
                <h4 style="margin-bottom: 10px;">Call Us</h4>
                <p style="color: #666;">+91 XXXXXXXXXX</p>
            </div>
            <div style="text-align: center;">
                <h4 style="margin-bottom: 10px;">Follow Us</h4>
                <p style="color: #666;">Instagram / Facebook</p>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>