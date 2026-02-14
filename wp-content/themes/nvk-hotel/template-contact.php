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

        <div class="contact-wrapper" style="display: grid; grid-template-columns: 1fr 1.5fr; gap: 60px; margin-bottom: 100px;">

            <!-- Contact Info Side -->
            <div class="contact-info-side">
                <div class="section-title" style="text-align: left; margin-bottom: 40px;">
                    <span>Reach Out</span>
                    <h2>We'd Love to Hear From You</h2>
                </div>

                <div class="info-item" style="margin-bottom: 40px;">
                    <h4 style="color: var(--primary); margin-bottom: 10px; font-family: 'Marcellus', serif;">Our Location</h4>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.6;">
                        MVK Heritage Foods<br>
                        Opposite Railway Station,<br>
                        Kannur, Kerala 670001
                    </p>
                </div>

                <div class="info-item" style="margin-bottom: 40px;">
                    <h4 style="color: var(--primary); margin-bottom: 10px; font-family: 'Marcellus', serif;">Contacts</h4>
                    <p style="color: #666; margin-bottom: 5px;"><strong>Phone:</strong> +91 92077 22666</p>
                    <p style="color: #666; margin-bottom: 5px;"><strong>WhatsApp:</strong> <a href="https://wa.me/919207722666" target="_blank" style="color: var(--primary); text-decoration: none;">+91 92077 22666</a></p>
                    <p style="color: #666;"><strong>Email:</strong> info@mvkheritage.com</p>
                </div>

                <div class="info-item" style="margin-bottom: 40px;">
                    <h4 style="color: var(--primary); margin-bottom: 10px; font-family: 'Marcellus', serif;">Opening Hours</h4>
                    <p style="color: #666; margin-bottom: 5px;"><strong>Mon - Sun:</strong> 11:00 AM - 11:00 PM</p>
                </div>

                <!-- Map Placeholder -->
                <!-- Map -->
                <div class="map-box" style="width: 100%; height: 300px; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3904.2908309915924!2d75.3725783!3d11.8848255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba43d0011d37d21%3A0x307618daaea1758f!2sMVK%20Heritage%20Foods!5e0!3m2!1sen!2sin!4v1771052802436!5m2!1sen!2sin"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <!-- Form Side -->
            <div class="contact-form-side">
                <div class="contact-container" style="background: white; padding: 50px; border-radius: 20px; box-shadow: 0 20px 60px rgba(0,0,0,0.05); border: 1px solid rgba(0,0,0,0.03);">
                    <h3 style="margin-bottom: 30px; font-size: 1.5rem;">Send us a Message</h3>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label style="display: block; margin-bottom: 8px; font-weight: 500; font-size: 0.9rem;">Name</label>
                                <input type="text" placeholder="John Doe" required style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 6px; background: #fafafa;">
                            </div>
                            <div class="form-group">
                                <label style="display: block; margin-bottom: 8px; font-weight: 500; font-size: 0.9rem;">Email</label>
                                <input type="email" placeholder="john@example.com" required style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 6px; background: #fafafa;">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label style="display: block; margin-bottom: 8px; font-weight: 500; font-size: 0.9rem;">Phone</label>
                                <input type="tel" placeholder="+91 XXXXX XXXXX" style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 6px; background: #fafafa;">
                            </div>
                            <div class="form-group">
                                <label style="display: block; margin-bottom: 8px; font-weight: 500; font-size: 0.9rem;">Purpose</label>
                                <select style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 6px; background: #fafafa;">
                                    <option>Table Reservation</option>
                                    <option>Catering Query</option>
                                    <option>General Inquiry</option>
                                    <option>Feedback</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 40px;">
                            <label style="display: block; margin-bottom: 8px; font-weight: 500; font-size: 0.9rem;">Message</label>
                            <textarea placeholder="Tell us more..." required style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 6px; background: #fafafa; min-height: 150px;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>