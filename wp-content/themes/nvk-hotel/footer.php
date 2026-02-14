    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/heritage.png" alt="MVK Heritage Foods Logo" class="footer-logo-img" />
                        </a>
                    </div>
                    <p style="margin-top: 20px;">Experience the authentic taste of Malabar and Kerala at MVK Heritage Foods, Kannur. We pride ourselves on our rich culinary heritage and warm hospitality.</p>
                </div>
                <div class="footer-col">
                    <h3>Explore</h3>
                    <ul style="opacity: 0.8; line-height: 2.2;">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About Our Legacy</a></li>
                        <li><a href="<?php echo esc_url(home_url('/menu')); ?>">Our Menu</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Book Service</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact</h3>
                    <p style="margin-bottom: 10px;">📍 Kannur, Kerala, India</p>
                    <p style="margin-bottom: 10px;">📞 +91 92077 22666</p>
                    <p style="margin-bottom: 15px;">📧 info@mvkheritage.com</p>
                    <div class="footer-social-links" style="display: flex; gap: 15px;">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-x-twitter"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Locate Us</h3>
                    <div class="footer-map" style="border-radius: 12px; overflow: hidden; height: 180px; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
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
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> MVK Heritage Foods, Kannur. Crafted for Excellence.</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/919207722666" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <?php wp_footer(); ?>
    </body>

    </html>