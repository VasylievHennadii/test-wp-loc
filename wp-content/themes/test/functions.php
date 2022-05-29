<?php

// add_image_size('post_preview', 750, 375, 1);

add_image_size('post_preview', 750, 375, 1);
add_image_size('post_image', 750, 350, 1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    //    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('html5');

    add_theme_support('custom-logo', array(
        'height'      => 50,
        'width'       => 137,
    ));

    // Сделаем тему доступной для перевода
    // Файлы перевода должны находиться в каталоге /languages/
    //load_theme_textdomain( 'artjoker', get_template_directory() );

    /*
    register_nav_menus(array(
            'primary-menu' => 'Главное меню',
            'mobile-menu' => 'Мобильное меню',
        )
    );
*/
});

/*
 * Подключение скриптов и стилей
 */
wp_register_style('bootstrap.min.css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
wp_register_style('owl.carousel.min.css', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css');
wp_register_style('flaticon.css', get_stylesheet_directory_uri() . '/css/flaticon.css');
wp_register_style('slicknav.css', get_stylesheet_directory_uri() . '/css/slicknav.css');
wp_register_style('animate.min.css', get_stylesheet_directory_uri() . '/css/animate.min.css');
wp_register_style('magnific-popup.css', get_stylesheet_directory_uri() . '/css/magnific-popup.css');
wp_register_style('fontawesome-all.min.css', get_stylesheet_directory_uri() . '/css/fontawesome-all.min.css');
wp_register_style('themify-icons.css', get_stylesheet_directory_uri() . '/css/themify-icons.css');
wp_register_style('slick.css', get_stylesheet_directory_uri() . '/css/slick.css');
wp_register_style('nice-select.css', get_stylesheet_directory_uri() . '/css/nice-select.css');
wp_register_style('style.css', get_stylesheet_directory_uri() . '/css/style.css');
wp_register_style('my-style.css', get_stylesheet_directory_uri() . '/style.css');


wp_register_script('modernizr-3.5.0.min.js', get_stylesheet_directory_uri() .'/js/vendor/modernizr-3.5.0.min.js', array(), false, true);
wp_register_script('jquery-1.12.4.min.js', get_stylesheet_directory_uri() .'/js/vendor/jquery-1.12.4.min.js', array(), false, true);
wp_register_script('popper.min.js', get_stylesheet_directory_uri() .'/js/popper.min.js', array(), false, true);
wp_register_script('bootstrap.min.js', get_stylesheet_directory_uri() .'/js/bootstrap.min.js', array(), false, true);
wp_register_script('jquery.slicknav.min.js', get_stylesheet_directory_uri() .'/js/jquery.slicknav.min.js', array(), false, true);
wp_register_script('owl.carousel.min.js', get_stylesheet_directory_uri() .'/js/owl.carousel.min.js', array(), false, true);
wp_register_script('slick.min.js', get_stylesheet_directory_uri() .'/js/slick.min.js', array(), false, true);
wp_register_script('wow.min.js', get_stylesheet_directory_uri() .'/js/wow.min.js', array(), false, true);
wp_register_script('animated.headline.js', get_stylesheet_directory_uri() .'/js/animated.headline.js', array(), false, true);
wp_register_script('jquery.scrollUp.min.js', get_stylesheet_directory_uri() .'/js/jquery.scrollUp.min.js', array(), false, true);
wp_register_script('jquery.nice-select.min.js', get_stylesheet_directory_uri() .'/js/jquery.nice-select.min.js', array(), false, true);
wp_register_script('jquery.sticky.js', get_stylesheet_directory_uri() .'/js/jquery.sticky.js', array(), false, true);
wp_register_script('jquery.magnific-popup.js', get_stylesheet_directory_uri() .'/js/jquery.magnific-popup.js', array(), false, true);
wp_register_script('contact.js', get_stylesheet_directory_uri() .'/js/contact.js', array(), false, true);
wp_register_script('jquery.form.js', get_stylesheet_directory_uri() .'/js/jquery.form.js', array(), false, true);
wp_register_script('jquery.validate.min.js', get_stylesheet_directory_uri() .'/js/jquery.validate.min.js', array(), false, true);
wp_register_script('mail-script.js', get_stylesheet_directory_uri() .'/js/mail-script.js', array(), false, true);
wp_register_script('jquery.ajaxchimp.min.js', get_stylesheet_directory_uri() .'/js/jquery.ajaxchimp.min.js', array(), false, true);	
wp_register_script('plugins.js', get_stylesheet_directory_uri() .'/js/plugins.js', array(), false, true);
wp_register_script('main.js', get_stylesheet_directory_uri() . '/js/main.js', array(), false, true);

function test_scripts(){
    wp_enqueue_style('bootstrap.min.css');
    wp_enqueue_style('owl.carousel.min.css');
    wp_enqueue_style('flaticon.css');
    wp_enqueue_style('slicknav.css');
    wp_enqueue_style('animate.min.css');
    wp_enqueue_style('magnific-popup.css');
    wp_enqueue_style('fontawesome-all.min.css');
    wp_enqueue_style('themify-icons.css');
    wp_enqueue_style('slick.css');
    wp_enqueue_style('nice-select.css');
    wp_enqueue_style('style.css');
    wp_enqueue_style('my-style.css');
    
    wp_enqueue_script('modernizr-3.5.0.min.js');
    wp_enqueue_script('jquery-1.12.4.min.js');
    wp_enqueue_script('popper.min.js');
    wp_enqueue_script('bootstrap.min.js');
    wp_enqueue_script('jquery.slicknav.min.js');
    wp_enqueue_script('owl.carousel.min.js');
    wp_enqueue_script('slick.min.js');
    wp_enqueue_script('wow.min.js');
    wp_enqueue_script('animated.headline.js');
    wp_enqueue_script('jquery.scrollUp.min.js');
    wp_enqueue_script('jquery.nice-select.min.js');
    wp_enqueue_script('jquery.sticky.js');
    wp_enqueue_script('jquery.magnific-popup.js');
    wp_enqueue_script('contact.js');
    wp_enqueue_script('jquery.form.js');
    wp_enqueue_script('jquery.validate.min.js');
    wp_enqueue_script('mail-script.js');
    wp_enqueue_script('jquery.ajaxchimp.min.js');
    wp_enqueue_script('plugins.js');
    wp_enqueue_script('main.js');
}

add_action('wp_enqueue_scripts', 'test_scripts');

