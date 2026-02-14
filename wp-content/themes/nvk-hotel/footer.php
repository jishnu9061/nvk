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
                    <p style="margin-bottom: 10px;">📞 +91 92077 22666</p>
                    <p style="margin-bottom: 10px;">💬 <a href="https://wa.me/919207722666" target="_blank" style="color: inherit; text-decoration: none;">WhatsApp Us</a></p>
                    <p>📧 info@mvkheritage.com</p>
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
        <svg class="whatsapp-icon" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.432 5.631 1.433h.005c6.554 0 11.89-5.335 11.893-11.892a11.826 11.826 0 00-3.486-8.415z"/>
        </svg>
    </a>
    <?php wp_footer(); ?>
    </body>

    </html>