<?php

function fantom() {
    wp_enqueue_style("customcss", get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style("responsivecss", get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('owl.carousel.min', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', '1.01', '1.01');
    wp_enqueue_style('owl.theme.default.min', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css', '1.01', '1.01');
    
      wp_enqueue_style("codemirrorcss", get_template_directory_uri() . '/css/codemirror.css');
        wp_enqueue_style("materialcss", get_template_directory_uri() . '/css/material.css');
    
     wp_enqueue_script('cc-tweenmax-js', get_template_directory_uri() . '/js/TweenMax.js', array(), true);
         wp_enqueue_script("owlcarouseljs", get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), 1.1, true);
     
     
         wp_enqueue_script('cc-codemirror-js', get_template_directory_uri() . '/js/codemirror.js', array(), true);
             wp_enqueue_script('cc-xml-js', get_template_directory_uri() . '/js/xml.js', array(), true);
                 wp_enqueue_script('cc-css-js', get_template_directory_uri() . '/js/css.js', array(), true);
                     wp_enqueue_script('cc-javascript-js', get_template_directory_uri() . '/js/javascript.js', array(), true);
                      wp_enqueue_script('cc-htmlmixed-js', get_template_directory_uri() . '/js/htmlmixed.js', array(), true);
     
     
     
     
     
     
     
    wp_enqueue_style('bootstrap-v4', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', '1.0', 'all');       
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20190612', true);   
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', array(), '2019061112', true);
     wp_enqueue_script('cc-rangeslider-min-js', get_template_directory_uri() . '/js/rangeslider.min.js', array(), true);
}

add_action('wp_enqueue_scripts', 'fantom');

//navigation menu

register_nav_menus(array(
    'primary' => __('Primary menu'),
    'footer' => __('Footer menu 1'),
    'footermenu2' => __('Footer menu 2')
));

//them setup
function fantom_setup() {


    //Add featured image support
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'fantom_setup');

//Add our Widget location
function ourWidgetsInit() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar1'
    ));
    //footer Area bar
    register_sidebar(array(
        'name' => 'Footer Area 1',
        'id' => 'footer1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="my-special-class">',
        'after_title' => '</h6>'
    ));
    register_sidebar(array(
        'name' => 'Footer Area 2',
        'id' => 'footer2',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="my-special-class">',
        'after_title' => '</h6>'
    ));
    register_sidebar(array(
        'name' => 'Footer Area 3',
        'id' => 'footer3',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="my-special-class">',
        'after_title' => '</h6>'
    ));
    register_sidebar(array(
        'name' => 'Footer Area 4',
        'id' => 'footer4',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="my-special-class">',
        'after_title' => '</h6>'
    ));
    register_sidebar(array(
        'name' => 'Footer Area 5',
        'id' => 'footer',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="my-special-class">',
        'after_title' => '</h6>'
    ));
}

add_action('widgets_init', 'ourWidgetsInit');


//featured post

function extra_user_profile_fields( $user ) {
    $meta = get_user_meta($user->ID, 'meta_key_name', false);
}



//sub menu





