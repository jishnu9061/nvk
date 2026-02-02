<?php get_header(); ?>

<main class="error-404-content" style="padding: 180px 0 150px; text-align: center; min-height: 80vh; display: flex; align-items: center; background: linear-gradient(135deg, var(--primary) 0%, #4a0a0a 100%); position: relative; overflow: hidden;">
    <!-- Background Texture/Element -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: url('<?php echo get_template_directory_uri(); ?>/images/heritage.png'); background-size: cover; background-position: center;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="error-wrapper" style="max-width: 700px; margin: 0 auto;">
            <div style="font-size: 12rem; font-family: 'Marcellus', serif; color: transparent; -webkit-text-stroke: 2px var(--secondary); opacity: 0.3; line-height: 1; margin-bottom: -60px; position: relative; z-index: -1;">404</div>
            <div style="position: relative;">
                <h1 style="font-size: 3.5rem; color: var(--white); margin-bottom: 25px; font-family: 'Marcellus', serif;">Page Not Found</h1>
                <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); margin-bottom: 45px; line-height: 1.8;">
                    The page you are looking for might have been moved, deleted, or possibly never existed.
                </p>
                <div style="display: flex; justify-content: center; gap: 20px;">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn" style="padding: 15px 40px; background: var(--white); color: var(--primary); font-weight: 700;">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
