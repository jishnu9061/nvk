<?php
/**
 * Template Name: Venue Detail Page
 */
get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php 
        $slug = get_post_field('post_name', get_the_ID());
        
        // Mapping slugs to our high-quality images
        $venue_images = [
            'signature-banquet-hall' => '1000150059.jpg',
            'executive-banquet-i'   => '1000150053.jpg',
            'executive-banquet-ii'  => '1000150054.jpg'
        ];
        
        $fallback_image = isset($venue_images[$slug]) ? $venue_images[$slug] : 'shared/1000150059.jpg';
        $hero_image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : get_template_directory_uri() . '/images/shared/' . $fallback_image;
        ?>
        <!-- Venue Detail Hero -->
        <section class="venue-detail-hero" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo $hero_image; ?>');">
            <div class="container">
                <span class="venue-tag" data-aos="fade-up"><?php echo get_post_meta(get_the_ID(), 'venue_category', true) ?: 'Our Venue'; ?></span>
                <h1 data-aos="fade-up" data-aos-delay="100"><?php the_title(); ?></h1>
            </div>
        </section>

        <!-- Features & Info -->
        <section class="venue-features-section">
            <div class="container">
                <div class="venue-detail-grid">
                    <!-- Gallery Content -->
                    <div class="venue-gallery" data-aos="fade-right">
                        <div class="gallery-item large">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img src="<?php echo $hero_image; ?>" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="gallery-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/shared/1000150060.jpg" alt="Venue Setup">
                        </div>
                        <div class="gallery-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/shared/1000150051.jpg" alt="Interior Detail">
                        </div>
                    </div>

                    <!-- Sidebar Info -->
                    <aside class="venue-info-sidebar">
                        <h2>Venue Highlights</h2>
                        <div class="specs-list">
                            <div class="spec-item">
                                <span class="spec-label">Capacity</span>
                                <span class="spec-value"><?php echo get_post_meta(get_the_ID(), 'venue_capacity', true) ?: '100 - 300+ Guests'; ?></span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Event Type</span>
                                <span class="spec-value"><?php echo get_post_meta(get_the_ID(), 'venue_events', true) ?: 'Weddings, Corporate, Private'; ?></span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Catering</span>
                                <span class="spec-value"><?php echo get_post_meta(get_the_ID(), 'venue_catering', true) ?: 'In-house Authentic Kerala/Indian'; ?></span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Facilities</span>
                                <span class="spec-value">A/C, Smart Display, Stage Setup</span>
                            </div>
                        </div>

                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary" style="width: 100%; text-align: center;">Inquire About This Venue</a>
                    </aside>
                </div>
            </div>
        </section>

        <!-- Main Narrative -->
        <section class="venue-description">
            <div class="container">
                <div class="venue-desc-content">
                    <h3>Experience Elegant Celebrations</h3>
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

        <!-- Bottom CTA -->
        <section style="padding: 100px 0; background: var(--dark); text-align: center; color: white;">
            <div class="container">
                <h2 style="color: var(--secondary); margin-bottom: 25px; text-transform: uppercase;">Make Your Event Unforgettable</h2>
                <p style="margin-bottom: 40px; font-size: 1.2rem; opacity: 0.8;">Our team is ready to help your plan your perfect day at MVK Heritage Foods.</p>
                <div class="cta-buttons" style="justify-content: center;">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Book Now</a>
                    <a href="tel:+91XXXXXXXXXX" class="btn btn-outline" style="color: white; border-color: white;">Call Us</a>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
