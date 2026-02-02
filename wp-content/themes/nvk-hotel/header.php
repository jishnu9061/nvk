<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="container nav-container">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/heritage.png" alt="MVK Heritage Foods Logo" class="logo-img" />
                </a>
            </div>
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="hamburger"></span>
                </button>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                    'container' => 'div',
                    'container_class' => 'nav-menu-wrapper',
                    'menu_class' => 'nav-list',
                    'fallback_cb' => 'nvk_default_menu'
                ));
                ?>
            </nav>
            <div class="header-cta">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Reservations</a>
            </div>
        </div>
    </header>