<?php

/**
 * MVK Heritage Foods Theme Functions
 */

function nvk_hotel_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mvk-hotel'),
    ));
}
add_action('after_setup_theme', 'nvk_hotel_setup');

function nvk_hotel_scripts()
{
    // Fonts: Marcellus for headings, Outfit for body
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Marcellus&family=Outfit:wght@300;400;500;600&display=swap', array(), null);

    // AOS Animation Library
    wp_enqueue_style('aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');
    wp_enqueue_script('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);

    // FontAwesome for Social Icons
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');

    // Main Styles
    wp_enqueue_style('nvk-hotel-style', get_stylesheet_uri());

    // Main Scripts
    wp_enqueue_script('nvk-hotel-script', get_template_directory_uri() . '/js/script.js', array('aos-script'), '1.1', true);
}
add_action('wp_enqueue_scripts', 'nvk_hotel_scripts');

function nvk_default_menu()
{
    echo '<ul id="primary-menu" class="nav-list">';
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="' . (is_front_page() ? 'active-link' : '') . '">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about')) . '" class="' . ((is_page('about') || is_page_template('template-about.php')) && !is_front_page() ? 'active-link' : '') . '">About</a></li>';
    echo '<li><a href="' . esc_url(home_url('/menu')) . '" class="' . ((is_page('menu') || is_page_template('template-menu.php')) && !is_front_page() ? 'active-link' : '') . '">Menu</a></li>';
    echo '<li><a href="' . esc_url(home_url('/services')) . '" class="' . ((is_page('services') || is_page_template('template-services.php')) && !is_front_page() ? 'active-link' : '') . '">Services</a></li>';
    echo '<li><a href="' . esc_url(home_url('/blog')) . '" class="' . (is_home() || is_singular('post') || is_archive() ? 'active-link' : '') . '">Blog</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '" class="' . ((is_page('contact') || is_page_template('template-contact.php')) && !is_front_page() ? 'active-link' : '') . '">Contact</a></li>';
    echo '</ul>';
}

/**
 * Custom Login Page Styling
 */
function mvk_custom_login_styles()
{
    echo '<style type="text/css">
        body.login {
            background-color: #FEFDFB;
            font-family: "Outfit", sans-serif;
        }
        body.login div#login h1 a {
            background-image: url(' . get_template_directory_uri() . '/images/heritage.png);
            background-size: contain;
            width: 100%;
            height: 100px;
            margin-bottom: 20px;
        }
        body.login #loginform {
            background: #ffffff;
            border: 1px solid rgba(0,0,0,0.05);
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
            border-radius: 12px;
        }
        body.login .button-primary {
            background: #8B1A1A !important;
            border-color: #8B1A1A !important;
            text-shadow: none;
            box-shadow: none;
            transition: all 0.3s ease;
        }
        body.login .button-primary:hover {
            background: #5C0E0E !important;
            transform: translateY(-2px);
        }
        body.login input:focus {
            border-color: #D4A853 !important;
            box-shadow: 0 0 0 1px #D4A853 !important;
        }
        .login #backtoblog a, .login #nav a {
            color: #8B1A1A !important;
        }
    </style>';
}
add_action('login_enqueue_scripts', 'mvk_custom_login_styles');

function mvk_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'mvk_login_logo_url');

function mvk_login_logo_url_title()
{
    return 'MVK Heritage Foods';
}
add_filter('login_headertext', 'mvk_login_logo_url_title');

function nvk_menu_body_class($classes)
{
    if (is_page_template('template-menu.php') || is_page('menu')) {
        $classes[] = 'nvk-menu-page';
    }
    return $classes;
}
add_filter('body_class', 'nvk_menu_body_class');
