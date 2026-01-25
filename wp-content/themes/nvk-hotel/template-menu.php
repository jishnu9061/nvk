<?php

/**
 * Template Name: Menu
 */
get_header(); ?>

<section class="inner-header">
    <div class="container">
        <h2>The Grand Menu</h2>
    </div>
</section>

<main class="page-content dark-theme-page">
    <div class="container">
        <div class="section-title">
            <span style="color: var(--secondary);">Culinary Symphony</span>
            <h2 style="color: white;">Traditional Malabar Delights</h2>
        </div>

        <div class="specialty-grid">
            <div class="specialty-card" style="background: #1a1a1a; border-color: rgba(255,255,255,0.05);">
                <div class="specialty-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hero.png" alt="Malabar Dum Biriyani">
                </div>
                <div class="specialty-info">
                    <h3 style="color: white;">Malabar Dum Biriyani</h3>
                    <p style="color: rgba(255,255,255,0.6);">The crown jewel of Malabar, slow-cooked with aromatic spices.</p>
                </div>
            </div>
            <div class="specialty-card" style="background: #1a1a1a; border-color: rgba(255,255,255,0.05);">
                <div class="specialty-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meals.png" alt="Fish Curry Meals">
                </div>
                <div class="specialty-info">
                    <h3 style="color: white;">Authentic Kerala Meals</h3>
                    <p style="color: rgba(255,255,255,0.6);">Traditional feast with assorted curries, rice, and fresh fish curry.</p>
                </div>
            </div>
            <div class="specialty-card" style="background: #1a1a1a; border-color: rgba(255,255,255,0.05);">
                <div class="specialty-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/seafood.png" alt="Seafood Special">
                </div>
                <div class="specialty-info">
                    <h3 style="color: white;">Malabar Seafood Roast</h3>
                    <p style="color: rgba(255,255,255,0.6);">Fresh catch prepared with rich spices and coconut garnish.</p>
                </div>
            </div>
        </div>

        <div class="menu-download-section">
            <p>Experience our complete selection of ethnic delicacies.</p>
            <a href="#" class="btn btn-primary" style="background: var(--secondary); color: var(--dark);">Download Full Menu (PDF)</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>