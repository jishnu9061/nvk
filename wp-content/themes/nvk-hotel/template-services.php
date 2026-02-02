<?php

/**
 * Template Name: Services
 */
get_header(); ?>

<section class="inner-header">
    <div class="container">
        <h2>Hospitality at its Best</h2>
    </div>
</section>

<main class="page-content">
    <div class="container">

        <!-- Intro Text -->
        <div class="service-intro text-center">
            <span class="sub-heading">Our Expertise</span>
            <h2>How We Serve You</h2>
            <p class="lead-text">From intimate family dinners to grand wedding banquets, MVK Heritage Foods brings the authentic taste of Malabar to every occasion. We take pride in our versatility and commitment to excellence.</p>
        </div>

        <!-- Services Grid -->
        <div class="specialty-grid services-grid-layout">
            <!-- Dine-In -->
            <div class="specialty-card" data-aos="fade-up">
                <div class="specialty-info main-service-card">
                    <div class="service-icon">🍴</div>
                    <h3>Fine Dining</h3>
                    <p>Experience our signature hospitality in a warm, family-friendly ambience perfect for conversations and culinary delight.</p>
                </div>
            </div>

            <!-- Takeaway -->
            <div class="specialty-card" data-aos="fade-up" data-aos-delay="100">
                <div class="specialty-info main-service-card">
                    <div class="service-icon">🛍️</div>
                    <h3>Quick Takeaway</h3>
                    <p>On the go? Grab your favorite dishes, packed fresh and hot, ready to be enjoyed in the comfort of your home.</p>
                </div>
            </div>

            <!-- Delivery -->
            <div class="specialty-card" data-aos="fade-up" data-aos-delay="200">
                <div class="specialty-info main-service-card">
                    <div class="service-icon">🛵</div>
                    <h3>Home Delivery</h3>
                    <p>Craving MVK but can't step out? We deliver our authentic delicacies right to your doorstep via major delivery partners.</p>
                </div>
            </div>

            <!-- Catering -->
            <div class="specialty-card" data-aos="fade-up">
                <div class="specialty-info main-service-card">
                    <div class="service-icon">🎉</div>
                    <h3>Wedding Catering</h3>
                    <p>Make your big day unforgettable with our grand feasts. We handle everything from menu planning to live counters.</p>
                </div>
            </div>

            <!-- Corporate -->
            <div class="specialty-card" data-aos="fade-up" data-aos-delay="100">
                <div class="specialty-info main-service-card">
                    <div class="service-icon">🤝</div>
                    <h3>Corporate Events</h3>
                    <p>Impress your clients and team with professional catering for meetings, conferences, and office parties.</p>
                </div>
            </div>

            <!-- Private Dining -->
            <div class="specialty-card" data-aos="fade-up" data-aos-delay="200">
                <div class="specialty-info main-service-card">
                    <div class="service-icon">🥂</div>
                    <h3>Private Parties</h3>
                    <p>Host exclusive gatherings in our private dining areas, offering privacy and personalized service for your special guests.</p>
                </div>
            </div>

            <!-- Event Management (NEW) -->
            <div class="specialty-card" data-aos="fade-up" data-aos-delay="300">
                <div class="specialty-info main-service-card">
                    <div class="service-icon">📋</div>
                    <h3>Event Management</h3>
                    <p>From decor to entertainment, our team manages every detail of your event so you can relax and enjoy the occasion.</p>
                </div>
            </div>

            <!-- Bulk Orders (NEW) -->
            <div class="specialty-card" data-aos="fade-up" data-aos-delay="400">
                <div class="specialty-info main-service-card">
                    <div class="service-icon">📦</div>
                    <h3>Bulk Orders</h3>
                    <p>Planning a small get-together at home? We offer special bulk pricing for party orders and family functions.</p>
                </div>
            </div>
        </div>
        <br><br>
        <!-- NEW: Process Section (Timeline) -->
        <div class="process-section mb-120">
            <div class="section-title text-center mb-60">
                <span>Our Approach</span>
                <h2>Event Planning Process</h2>
            </div>
            <div class="process-steps">
                <div class="process-step" data-aos="fade-right">
                    <div class="step-number">01</div>
                    <h4>Consultation</h4>
                    <p>We meet to understand your vision, guest count, and preferences.</p>
                </div>
                <div class="process-step" data-aos="fade-right" data-aos-delay="100">
                    <div class="step-number">02</div>
                    <h4>Customization</h4>
                    <p>Our chefs curate a tailored menu that fits your theme and budget.</p>
                </div>
                <div class="process-step" data-aos="fade-right" data-aos-delay="200">
                    <div class="step-number">03</div>
                    <h4>Execution</h4>
                    <p>Our team handles setup, live counters, and service with precision.</p>
                </div>
                <div class="process-step" data-aos="fade-right" data-aos-delay="300">
                    <div class="step-number">04</div>
                    <h4>Memories</h4>
                    <p>Enjoy your event while we ensure every guest leaves with a smile.</p>
                </div>
            </div>
        </div>
    </div><!-- End Main Container -->

    <!-- Our Venues - Premium Layout -->
    <section class="venues-section-premium">
        <div class="container">
            <div class="section-title text-center mb-60">
                <span>Our Spaces</span>
                <h2>Explore Our Venues</h2>
            </div>

            <div class="venues-list">
                <!-- Venue 1: Dining Hall -->
                <div class="venue-row" data-aos="fade-up">
                    <div class="venue-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dining_hall.png" alt="Main Dining Hall">
                        <div class="venue-badge">Capacity: 100+</div>
                    </div>
                    <div class="venue-col-text">
                        <span class="venue-subtitle">Fine Dining</span>
                        <h3>Main Dining Hall</h3>
                        <p>A warm, inviting space rooted in tradition. Perfect for family meals, casual gatherings, and enjoying the authentic taste of Malabar in a comfortable setting. The traditionally inspired decor sets the mood for a relaxed culinary journey.</p>
                        <ul class="venue-features-list">
                            <li>Fully Air-conditioned</li>
                            <li>Traditional Decor</li>
                            <li>Family Cabins Available</li>
                            <li>Table Service</li>
                        </ul>
                        <div class="venue-actions">
                            <a href="<?php echo esc_url(home_url('/dining-hall')); ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Venue 2: Engagement Hall -->
                <div class="venue-row reverse" data-aos="fade-up">
                    <div class="venue-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/engagement_hall.png" alt="The Heritage Banquet">
                        <div class="venue-badge">Capacity: 200+</div>
                    </div>
                    <div class="venue-col-text">
                        <span class="venue-subtitle">Celebrations</span>
                        <h3>The Heritage Banquet</h3>
                        <p>An elegant, versatile venue designed for life's special moments. Ideal for engagement parties, birthday celebrations, and professional corporate meetings. The hall features customizable lighting and a premium sound system.</p>
                        <ul class="venue-features-list">
                            <li>Premium Sound System</li>
                            <li>Dedicated Buffet Area</li>
                            <li>Private Restrooms</li>
                            <li>Custom Lighting</li>
                        </ul>
                        <div class="venue-actions">
                            <a href="<?php echo esc_url(home_url('/engagement-hall')); ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Venue 3: Reception Hall -->
                <div class="venue-row" data-aos="fade-up">
                    <div class="venue-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/reception_hall.png" alt="Grand Reception Hall">
                        <div class="venue-badge">Capacity: 300+</div>
                    </div>
                    <div class="venue-col-text">
                        <span class="venue-subtitle">Grand Events</span>
                        <h3>Grand Reception Hall</h3>
                        <p>Our flagship venue for grand celebrations. A spacious, pillar-less architectural marvel that provides a majestic backdrop for weddings and large-scale receptions. Let us make your big day truly unforgettable.</p>
                        <ul class="venue-features-list">
                            <li>Pillar-less Design</li>
                            <li>Bridal Green Room</li>
                            <li>Ample Valet Parking</li>
                            <li>Grand Stage Setup</li>
                        </ul>
                        <div class="venue-actions">
                            <a href="<?php echo esc_url(home_url('/reception-hall')); ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="venues-cta text-center mt-60">
                <p style="margin-bottom: 20px; font-size: 1.1rem; color: #666;">Need help choosing the right space? We are here to assist.</p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline" style="color: var(--primary); border-color: var(--primary);">Contact Event Team</a>
            </div>
        </div>
    </section>

    <!-- Re-open Main Container -->
    <div class="container">
        <!-- Amenities Section -->
        <div class="amenities-section mb-120">
            <div class="section-title text-center mb-60">
                <span>Comfort & Convenience</span>
                <h2>Our Amenities</h2>
            </div>
            <div class="amenities-grid">
                <div class="amenity-card">
                    <div class="amenity-icon">🅿️</div>
                    <h4>Ample Parking</h4>
                </div>
                <div class="amenity-card">
                    <div class="amenity-icon">❄️</div>
                    <h4>Fully AC Halls</h4>
                </div>
                <div class="amenity-card">
                    <div class="amenity-icon">♿</div>
                    <h4>Wheelchair Access</h4>
                </div>
                <div class="amenity-card">
                    <div class="amenity-icon">🕌</div>
                    <h4>Prayer Room</h4>
                </div>
                <div class="amenity-card">
                    <div class="amenity-icon">📡</div>
                    <h4>Free Wi-Fi</h4>
                </div>
                <div class="amenity-card">
                    <div class="amenity-icon">💳</div>
                    <h4>Digital Payments</h4>
                </div>
                <div class="amenity-card">
                    <div class="amenity-icon">👶</div>
                    <h4>Baby High Chairs</h4>
                </div>
                <div class="amenity-card">
                    <div class="amenity-icon">🚻</div>
                    <h4>Clean Restrooms</h4>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="faq-section mb-120">
            <div class="section-title text-center mb-60">
                <span>Common Queries</span>
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <h4>Do you provide outdoor catering?</h4>
                    <p>Yes, we provide full-service outdoor catering for weddings, parties, and corporate events across Kannur and nearby districts.</p>
                </div>
                <div class="faq-item">
                    <h4>Do you have home delivery?</h4>
                    <p>Absolutely! We deliver via major delivery partners and also have our own fleet for bulk orders within a 5km radius.</p>
                </div>
                <div class="faq-item">
                    <h4>Is parking available?</h4>
                    <p>Yes, we have a dedicated spacious parking area that can accommodate over 20 cars and bikes comfortably.</p>
                </div>
                <div class="faq-item">
                    <h4>Do you take table reservations?</h4>
                    <p>Yes, we recommend booking tables in advance for weekends and holidays. You can call us or use the form below.</p>
                </div>
                <div class="faq-item">
                    <h4>Is the meat Halal?</h4>
                    <p>Yes, 100% of the meat served at MVK Heritage Foods is sourced from certified Halal suppliers.</p>
                </div>
                <div class="faq-item">
                    <h4>Can you customize catering menus?</h4>
                    <p>Certainly! Our chefs will work with you to curate a personalized menu that fits your event's theme and budget.</p>
                </div>
            </div>
        </div>

        <!-- Dedicated Catering Section (Artistic Redesign) -->
    <!-- Dedicated Catering Section (Artistic Services Version) -->
    <div class="catering-v2 mb-120">
        <div class="catering-art-wrapper">
            <div class="catering-visual" data-aos="fade-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/catering.png" alt="MVK Heritage Catering" class="catering-img-main" style="box-shadow: 20px 20px 0 rgba(255,255,255,0.05);">
                <div class="catering-floating-badge" style="background: var(--secondary); color: var(--dark);">
                    <span>100%</span>
                    <p>Authentic</p>
                </div>
            </div>
            <div class="catering-content-premium" data-aos="fade-left">
                <span class="label">Elite Hospitality</span>
                <h2>The Art of Outdoor Dining</h2>
                <p class="catering-desc">Whether it's a home-based celebration or a grand outdoor venue, we provide a complete catering solution. Our expertise lies in delivering consistent quality and authentic Malabar taste, scaled gracefully to your guest count.</p>
                
                <ul class="catering-list-premium">
                    <li>Live Traditional Appam & Stew Counters <span>Interactive</span></li>
                    <li>Table-side Grill & Seafood Services <span>Premium</span></li>
                    <li>Professional Uniformed Waitstaff <span>Exquisite</span></li>
                    <li>Complete Crockery & Decor Sync <span>Flawless</span></li>
                </ul>
                
                <div class="catering-btn-group">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary" style="background: var(--secondary); color: var(--dark);">Request a Proposal</a>
                </div>
            </div>
        </div>
    </div>



        <!-- Event CTA -->
        <div class="visit-cta services-cta">
            <div class="cta-content">
                <span class="cta-subtitle">Plan Your Event</span>
                <h3>Hosting a Celebration?</h3>
                <p>Let us handle the food while you make memories. Contact our catering manager for a customized menu and quote.</p>
                <div class="hero-btns justify-center">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Enquire Now</a>
                    <a href="tel:+919876543210" class="btn btn-outline-light">Call Catering</a>
                </div>
            </div>
        </div>
        <br><br>
    </div>
</main>

<?php get_footer(); ?>