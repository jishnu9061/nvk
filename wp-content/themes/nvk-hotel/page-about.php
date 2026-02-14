<?php

/**
 * Template Name: About Us
 */
get_header(); ?>

<section class="inner-header">
    <div class="container">
        <h2>Our Legacy</h2>
    </div>
</section>

<main class="page-content">
    <div class="container">

        <!-- Story Section -->
        <div class="about-content" style="margin-bottom: 120px;">
            <div class="about-text">
                <div class="section-title" style="text-align: left; margin-bottom: 30px;">
                    <span>Our Story</span>
                    <h2>A Legacy of Taste Since 19XX</h2>
                </div>
                <p class="lead-text" style="font-size: 1.2rem; color: #555; line-height: 1.8; margin-bottom: 25px;">
                    MVK Heritage Foods started as a humble beginning with a simple vision: to serve the authentic flavors of Malabar to the world. Over the decades, we have remained true to our roots, preserving age-old recipes while embracing modern hospitality.
                </p>
                <p style="color: #666; margin-bottom: 25px;">
                    Located in the heart of Kannur, we are more than just a restaurant; we are a destination for food lovers who seek the true essence of Kerala's culinary heritage. From our signature Dum Biriyani to our fresh seafood delicacies, every dish tells a story of tradition, passion, and perfection.
                </p>
                <div class="stats-grid" style="grid-template-columns: repeat(3, 1fr); gap: 20px; text-align: left; margin-top: 40px;">
                    <div>
                        <span class="stat-number" style="font-size: 2.5rem; display: block; color: var(--secondary);">25+</span>
                        <span class="stat-label" style="font-size: 0.8rem; letter-spacing: 1px; color: #888;">Years of Service</span>
                    </div>
                    <div>
                        <span class="stat-number" style="font-size: 2.5rem; display: block; color: var(--secondary);">50k+</span>
                        <span class="stat-label" style="font-size: 0.8rem; letter-spacing: 1px; color: #888;">Happy Customers</span>
                    </div>
                    <div>
                        <span class="stat-number" style="font-size: 2.5rem; display: block; color: var(--secondary);">100+</span>
                        <span class="stat-label" style="font-size: 0.8rem; letter-spacing: 1px; color: #888;">Authentic Dishes</span>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/shared/1000150060.jpg" alt="MVK Heritage Interior">
            </div>
        </div>

        <!-- Vision & Mission -->
        <div class="specialty-grid" style="margin-bottom: 120px;">
            <div class="specialty-card" style="padding: 50px; text-align: center; border-top: 4px solid var(--secondary);">
                <div class="feature-icon" style="font-size: 3rem; margin-bottom: 25px;">🥘</div>
                <h3 style="margin-bottom: 20px;">Our Mission</h3>
                <p style="color: #666;">To bring the soulful taste of Malabar cuisine to every plate, serving food that feels like home, cooked with love and the finest ingredients.</p>
            </div>
            <div class="specialty-card" style="padding: 50px; text-align: center; border-top: 4px solid var(--primary);">
                <div class="feature-icon" style="font-size: 3rem; margin-bottom: 25px;">🌟</div>
                <h3 style="margin-bottom: 20px;">Our Vision</h3>
                <p style="color: #666;">To be recognized globally as the custodians of authentic Kerala cuisine, setting benchmarks in quality, hygiene, and hospitality.</p>
            </div>
            <div class="specialty-card" style="padding: 50px; text-align: center; border-top: 4px solid var(--secondary);">
                <div class="feature-icon" style="font-size: 3rem; margin-bottom: 25px;">🤝</div>
                <h3 style="margin-bottom: 20px;">Our Promise</h3>
                <p style="color: #666;">We promise uncompromised quality, fresh ingredients daily, and no artificial additives. Your health and happiness are our priority.</p>
            </div>
        </div>

        <!-- Core Values -->
        <div class="values-section" style="background: #faf9f6; padding: 80px 40px; border-radius: 20px;">
            <div class="section-title">
                <span>Core Values</span>
                <h2>What Defines Us</h2>
            </div>
            <div class="specialty-grid values-grid">
                <div class="card" style="padding: 30px; border: none; text-align: center; background: white; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 10px;">
                    <h4 style="font-family: 'Marcellus', serif; color: var(--primary); margin: 0;">Authenticity</h4>
                </div>
                <div class="card" style="padding: 30px; border: none; text-align: center; background: white; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 10px;">
                    <h4 style="font-family: 'Marcellus', serif; color: var(--primary); margin: 0;">Quality</h4>
                </div>
                <div class="card" style="padding: 30px; border: none; text-align: center; background: white; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 10px;">
                    <h4 style="font-family: 'Marcellus', serif; color: var(--primary); margin: 0;">Cleanliness</h4>
                </div>
                <div class="card" style="padding: 30px; border: none; text-align: center; background: white; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 10px;">
                    <h4 style="font-family: 'Marcellus', serif; color: var(--primary); margin: 0;">Hospitality</h4>
                </div>
            </div>
        </div>

        <!-- Culinary Philosophy -->
        <div class="about-content" style="margin: 120px 0; align-items: center; gap: 80px;">
            <div class="about-image" style="order: 2;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/shared/1000150058.jpg" alt="Fresh Ingredients">
            </div>
            <div class="about-text" style="order: 1;">
                <div class="section-title" style="text-align: left; margin-bottom: 30px;">
                    <span>Our Philosophy</span>
                    <h2>Farm to Table, Heart to Soul</h2>
                </div>
                <p class="lead-text" style="font-size: 1.2rem; color: #555; line-height: 1.8; margin-bottom: 25px;">
                    We believe that great food starts with great ingredients. That's why we source our spices directly from local farmers and ensure our seafood is the catch of the day. No shortcuts, no compromises.
                </p>
                <ul class="feature-list" style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px; color: #666;">
                        <span style="color: var(--secondary);">✓</span> Hand-ground spices
                    </li>
                    <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px; color: #666;">
                        <span style="color: var(--secondary);">✓</span> Fresh, locally sourced seafood
                    </li>
                    <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px; color: #666;">
                        <span style="color: var(--secondary);">✓</span> Traditional wood-fire cooking techniques
                    </li>
                </ul>
            </div>
        </div>

        <!-- Team Section -->
        <div class="team-section" style="margin-bottom: 120px; text-align: center;">
            <div class="section-title">
                <span>The Masters</span>
                <h2>Meet the Leaders</h2>
            </div>
            <div class="specialty-grid" style="gap: 40px;">
                <div class="specialty-card" style="padding: 0; overflow: hidden; border: none; background: transparent; box-shadow: none;">
                    <div style="height: 350px; background: #ddd; border-radius: 12px; margin-bottom: 20px; overflow: hidden; position: relative;">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/chef.png" alt="Head Chef" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 style="margin-bottom: 5px;">Chef Rahul Nair</h3>
                    <p style="color: var(--secondary); font-size: 0.9rem; font-weight: 600; letter-spacing: 1px; text-transform: uppercase;">Executive Chef</p>
                </div>
                <div class="specialty-card" style="padding: 0; overflow: hidden; border: none; background: transparent; box-shadow: none;">
                    <div style="height: 350px; background: #ddd; border-radius: 12px; margin-bottom: 20px; overflow: hidden; position: relative;">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/manager.png" alt="Manager" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 style="margin-bottom: 5px;">Lakshmi Menon</h3>
                    <p style="color: var(--secondary); font-size: 0.9rem; font-weight: 600; letter-spacing: 1px; text-transform: uppercase;">Operations Head</p>
                </div>
                <div class="specialty-card" style="padding: 0; overflow: hidden; border: none; background: transparent; box-shadow: none;">
                    <div style="height: 350px; background: #ddd; border-radius: 12px; margin-bottom: 20px; overflow: hidden; position: relative;">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/founder.png" alt="Founder" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 style="margin-bottom: 5px;">Krishnan Nambiar</h3>
                    <p style="color: var(--secondary); font-size: 0.9rem; font-weight: 600; letter-spacing: 1px; text-transform: uppercase;">Founder</p>
                </div>
            </div>
        </div>

        <!-- Visit CTA -->
        <div class="visit-cta" style="background: var(--dark); color: white; border: none; padding: 80px; text-align: center; border-radius: 20px; margin-bottom: 100px;">
            <h3 style="color: white; margin-bottom: 20px;">Come, Taste the Tradition</h3>
            <p style="color: rgba(255,255,255,0.7); max-width: 600px; margin: 0 auto 40px; font-size: 1.1rem;">Experience the warmth of our hospitality and the richness of our flavors. Your table is waiting.</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Book Service</a>
        </div>

    </div>
</main>

<?php get_footer(); ?>