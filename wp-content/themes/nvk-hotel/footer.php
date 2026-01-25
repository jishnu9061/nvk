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
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Reservations</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact</h3>
                    <p style="margin-bottom: 10px;">📍 Kannur, Kerala, India</p>
                    <p style="margin-bottom: 10px;">📞 +91 XXXXXXXXXX</p>
                    <p>📧 info@mvkheritagefoods.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> MVK Heritage Foods, Kannur. Crafted for Excellence.</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>