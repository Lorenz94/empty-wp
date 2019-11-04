<?php
/**
 * Bootstrap Basic theme
 * 
 * @package bootstrap-basic
 */


/**
 * Required WordPress variable.
 */
if (!isset($content_width)) {
    $content_width = 1170;
}

function load_style(){

    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/slider/swiper.min.css');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/font-awesome/fontawesome.min.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css');
    wp_enqueue_style('fancy-css', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
//    wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/slider/slick.css');
//    wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/slider/slick-theme.css');
    wp_enqueue_style('style-css', get_template_directory_uri().'/css/style.css');
}
add_action('wp_enqueue_scripts', 'load_style');


function load_sctripts(){

    wp_enqueue_script('swiper-js', get_template_directory_uri().'/js/slider/swiper.min.js');
    wp_enqueue_script('input-mask', get_template_directory_uri() . '/js/jquery.inputmask.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js');
    wp_enqueue_script('fancy-js', get_template_directory_uri() . '/js/jquery.fancybox.min.js');

    //Дополнительный слайдер
    //wp_enqueue_script('slick-js', get_template_directory_uri().'/js/slick.min.js');
    //Одинаковая высота у блоков
    //wp_enqueue_script('match-height', get_template_directory_uri() . '/js/jquery.matchHeight-min.js');

    wp_enqueue_script('input-mask', get_template_directory_uri() . '/js/script.js');
}

add_action('wp_enqueue_scripts', 'load_sctripts');




add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('main-menu', 'Главное меню');
}

// IMG SIZE
if (function_exists('add_image_size')) {
    add_image_size('full_hd', 1920, auto);
}


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Общие настройки',
        'menu_title' => 'Общие натройки',
        'menu_slug' => 'general_fields',
        'capability' => 'edit_posts'
    ));
}


########################### ДОБАВЛЕНИЕ POST_TYPE ###########

//function post_type_news()
//{
//    $labels = array(
//        'name' => 'Новости',
//        'singular_name' => 'Новости',
//        'all_items' => 'Новости',
//        'menu_name' => 'Новости' // ссылка в меню в админке
//    );
//    $args = array(
//        'labels' => $labels,
//        'public' => true,
//        'menu_position' => 5,
//        'has_archive' => true,
//        'query_var' => "news",
//        'supports' => array(
//            'title',
//            'thumbnail'
//        )
//    );
//    register_post_type('news', $args);
//}
//add_action('init', 'post_type_news');

