<?php get_header(); ?>

<main>
    <!-- Hero Slider -->
    <section class="hero-slider">
        <div class="slider-wrapper">
            <!-- Slide 1 -->
            <div class="slide active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero.png');">
                <div class="slide-overlay"></div>
                <div class="container slide-content">
                    <span>Authentic Kerala & Indian Cuisine</span>
                    <h2>Taste the Legacy of Indian Cuisine</h2>
                    <p>Serving traditional Kerala, Malabar & Indian delicacies with unmatched quality and hospitality in the heart of Kannur.</p>
                    <div class="hero-btns">
                        <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn-primary">🍽️ Explore Menu</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline" style="color: white; border-color: white;">📅 Book a Table</a>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/meals.png');">
                <div class="slide-overlay"></div>
                <div class="container slide-content">
                    <span>Signature Dishes</span>
                    <h2>Kerala Special Meals</h2>
                    <p>Experience the authentic taste of Kerala with our traditional meals served on plantain leaf.</p>
                    <div class="hero-btns">
                        <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn-primary">🍛 View Menu</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline" style="color: white; border-color: white;">📞 Order Now</a>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/seafood.png');">
                <div class="slide-overlay"></div>
                <div class="container slide-content">
                    <span>Fresh from the Sea</span>
                    <h2>Malabar Seafood Delicacies</h2>
                    <p>Fresh catch from the Arabian Sea, prepared with traditional coconut-based curries and exotic spices.</p>
                    <div class="hero-btns">
                        <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn-primary">🦐 Explore Seafood</a>
                        <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-outline" style="color: white; border-color: white;">🏠 About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Controls -->
        <div class="slider-controls">
            <button class="slider-btn prev" aria-label="Previous slide">❮</button>
            <button class="slider-btn next" aria-label="Next slide">❯</button>
        </div>
        <!-- Slider Dots -->
        <div class="slider-dots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
        </div>
    </section>

    <!-- About Preview -->
    <section class="about-preview">
        <div class="container">
            <div class="section-title">
                <span>Our Heritage</span>
                <h2>Welcome to MVK Heritage Foods</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p class="lead-text">For over two decades, MVK Heritage Foods has been the heart of authentic Kerala and Malabar cuisine in Kannur. What started as a small family eatery has grown into one of the most beloved dining destinations in North Kerala.</p>
                    <p>Our journey began with a simple vision — to preserve the traditional flavors of Kerala while serving them with warmth and hospitality. Today, we continue that legacy, preparing every dish with the same passion and dedication that has defined us since day one.</p>
                    <p>From our signature Malabar Dum Biriyani to the freshest seafood from the Arabian Sea, every plate tells a story of heritage, quality, and love for food.</p>
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-outline">Read Our Full Story</a>
                </div>
                <div class="about-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hero.png" alt="MVK Heritage Foods Interior">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number">25+</span>
                    <span class="stat-label">Years of Excellence</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Signature Dishes</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">10K+</span>
                    <span class="stat-label">Happy Customers</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Fresh Ingredients</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Promise -->
    <section class="promise-section">
        <div class="container">
            <div class="section-title">
                <span>Our Commitment</span>
                <h2>What Makes Us Special</h2>
            </div>
            <div class="promise-grid">
                <div class="promise-card">
                    <span class="promise-icon">🌿</span>
                    <h3>Farm Fresh</h3>
                    <p>We source the finest vegetables, spices, and ingredients from local farms to ensure every dish bursts with freshness.</p>
                </div>
                <div class="promise-card">
                    <span class="promise-icon">👨‍🍳</span>
                    <h3>Expert Chefs</h3>
                    <p>Our experienced chefs bring decades of culinary expertise, preparing authentic recipes passed down through generations.</p>
                </div>
                <div class="promise-card">
                    <span class="promise-icon">🏠</span>
                    <h3>Family Friendly</h3>
                    <p>A warm, welcoming atmosphere perfect for family gatherings, celebrations, and everyday dining experiences.</p>
                </div>
                <div class="promise-card">
                    <span class="promise-icon">🧼</span>
                    <h3>Hygiene First</h3>
                    <p>We maintain the highest standards of cleanliness and food safety in our kitchen and dining areas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Venues -->
    <section class="venues-section">
        <div class="container">
            <div class="section-title">
                <span>Our Spaces</span>
                <h2>Explore Our Venues</h2>
            </div>
            <div class="venues-grid">
                <!-- Dining Hall -->
                <article class="venue-card">
                    <div class="venue-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dining_hall.png" alt="Dining Hall">
                        <div class="venue-overlay">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <div class="venue-content">
                        <span class="venue-category">Restaurant</span>
                        <h3>Dining Hall</h3>
                        <p>Experience fine dining in our elegant restaurant space. With traditional Kerala decor and modern amenities, our dining hall offers the perfect ambiance for memorable meals with family and friends.</p>
                        <div class="venue-meta">
                            <span>👥 Capacity: 100+ guests</span>
                            <span>🍽️ Fine Dining</span>
                        </div>
                    </div>
                </article>

                <!-- Reception Hall -->
                <article class="venue-card">
                    <div class="venue-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/reception_hall.png" alt="Reception Hall">
                        <div class="venue-overlay">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <div class="venue-content">
                        <span class="venue-category">Events</span>
                        <h3>Reception Hall</h3>
                        <p>Our grand reception hall is perfect for wedding receptions, corporate events, and celebrations. Beautifully decorated with traditional Indian aesthetics and world-class facilities.</p>
                        <div class="venue-meta">
                            <span>👥 Capacity: 300+ guests</span>
                            <span>💒 Weddings & Events</span>
                        </div>
                    </div>
                </article>

                <!-- Engagement Hall -->
                <article class="venue-card">
                    <div class="venue-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/engagement_hall.png" alt="Engagement Hall">
                        <div class="venue-overlay">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <div class="venue-content">
                        <span class="venue-category">Celebrations</span>
                        <h3>Engagement Hall</h3>
                        <p>Celebrate your special moments in our beautifully designed engagement hall. Featuring stunning stage setups, premium seating, and customizable decorations for your perfect ceremony.</p>
                        <div class="venue-meta">
                            <span>👥 Capacity: 200+ guests</span>
                            <span>💍 Engagements & Functions</span>
                        </div>
                    </div>
                </article>
            </div>
            <div class="venues-cta">
                <p>Planning a special event? Let us help you create unforgettable memories.</p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Book a Venue</a>
            </div>
        </div>
    </section>

    <!-- Specialties -->
    <section class="specialties" style="background: #fff;">
        <div class="container">
            <div class="section-title">
                <span>Signature Flavors</span>
                <h2>Our Specialties</h2>
            </div>
            <div class="specialty-grid">
                <div class="specialty-card">
                    <div class="specialty-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/meals.png" alt="Kerala Special Meals">
                    </div>
                    <div class="specialty-info">
                        <h3>Kerala Special Meals</h3>
                        <p>A symphony of authentic flavors served on a traditional plantain leaf.</p>
                    </div>
                </div>
                <div class="specialty-card">
                    <div class="specialty-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/hero.png" alt="Malabar Dum Biriyani">
                    </div>
                    <div class="specialty-info">
                        <h3>Malabar Dum Biriyani</h3>
                        <p>Slow-cooked to perfection with aromatic spices and premium kaima rice.</p>
                    </div>
                </div>
                <div class="specialty-card">
                    <div class="specialty-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/seafood.png" alt="Fresh Seafood Delicacies">
                    </div>
                    <div class="specialty-info">
                        <h3>Seafood Delicacies</h3>
                        <p>Fresh catch from the Malabar coast, prepared with traditional coconut-based curries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-us" style="background: var(--dark); color: white;">
        <div class="container">
            <div class="section-title">
                <span style="color: var(--secondary);">Excellence</span>
                <h2 style="color: white;">Why Choose MVK Heritage Foods</h2>
            </div>
            <div class="specialty-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                <div class="specialty-card" style="background: transparent; border: none; text-align: center;">
                    <h3 style="color: var(--secondary); margin-bottom: 15px;">Authentic Recipes</h3>
                    <p style="color: rgba(255,255,255,0.7);">Traditional recipes passed down through generations for a truly nostalgic taste.</p>
                </div>
                <div class="specialty-card" style="background: transparent; border: none; text-align: center;">
                    <h3 style="color: var(--secondary); margin-bottom: 15px;">Quality Ingredients</h3>
                    <p style="color: rgba(255,255,255,0.7);">We use only the finest, freshest, and most authentic spices for every dish.</p>
                </div>
                <div class="specialty-card" style="background: transparent; border: none; text-align: center;">
                    <h3 style="color: var(--secondary); margin-bottom: 15px;">Hygienic Dining</h3>
                    <p style="color: rgba(255,255,255,0.7);">A clean, family-friendly environment with the highest standards of hygiene.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Location & Timings -->
    <section class="location-section">
        <div class="container">
            <div class="section-title">
                <span>Visit Us</span>
                <h2>Location & Timings</h2>
            </div>
            <div class="location-grid">
                <!-- Address Card -->
                <div class="location-card">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/location_pin.png" alt="Location">
                    </div>
                    <h3>Our Address</h3>
                    <p>MVK Heritage Foods, Main Road<br>Kannur, Kerala 670001</p>
                    <a href="https://maps.google.com" target="_blank" class="btn btn-outline">Get Directions</a>
                </div>

                <!-- Hours Card -->
                <div class="location-card">
                    <div class="card-icon">
                        <span class="icon-emoji">🕘</span>
                    </div>
                    <h3>Opening Hours</h3>
                    <p><strong>Monday – Sunday</strong><br>7:00 AM – 11:00 PM</p>
                    <p class="highlight-text">Open 7 days a week!</p>
                </div>

                <!-- Contact Card -->
                <div class="location-card">
                    <div class="card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/phone_icon.png" alt="Phone">
                    </div>
                    <h3>Call Us</h3>
                    <p class="phone-number">+91 XXXXX XXXXX</p>
                    <a href="tel:+91XXXXXXXXXX" class="btn btn-primary">Call Now</a>
                </div>
            </div>

            <!-- Order Options -->
            <div class="order-options">
                <div class="order-info">
                    <h3>📦 Takeaway & Online Orders</h3>
                    <p>Enjoy your favourite dishes from the comfort of your home.</p>
                    <div class="order-features">
                        <span class="feature-tag">✔ Dine-In</span>
                        <span class="feature-tag">✔ Takeaway</span>
                        <span class="feature-tag">✔ Online Orders</span>
                    </div>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="visit-cta">
                <h3>🍽️ Hungry for something delicious?</h3>
                <p>Come dine with us today!</p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Reserve a Table</a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <span>Guest Reviews</span>
                <h2>What They Say</h2>
            </div>
            <div class="testimonials-grid">
                <!-- Review 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"One of the best restaurants in Kannur. The authentic Malabar biriyani and seafood are simply unmatched. A must-visit for every food lover!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">RK</div>
                        <div class="author-info">
                            <strong>Rahul K.</strong>
                            <span>Food Critic</span>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"We hosted our daughter's engagement at MVK Heritage Foods. The food was exceptional, the service was impeccable, and the venue was beautifully decorated. Highly recommended!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">PS</div>
                        <div class="author-info">
                            <strong>Priya S.</strong>
                            <span>Event Host</span>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"The Kerala meals here remind me of my grandmother's cooking. Authentic flavors, fresh ingredients, and excellent hospitality. This is our family's go-to restaurant!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">AM</div>
                        <div class="author-info">
                            <strong>Arjun M.</strong>
                            <span>Regular Customer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section style="padding: 150px 0; background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('images/hero.png'); background-size: cover; background-position: center; text-align: center; color: white;">
        <div class="container">
            <h2 style="color: white; font-size: 3.5rem; margin-bottom: 30px;">Experience the Legacy</h2>
            <p style="margin-bottom: 40px; font-size: 1.1rem; max-width: 600px; margin-left: auto; margin-right: auto;">Join us for an unforgettable culinary journey at MVK Heritage Foods, Kannur.</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary" style="background: var(--secondary); color: var(--dark);">Reserve a Table Now</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>