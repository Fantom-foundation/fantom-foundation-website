<?php

/**
 * @desc All js and css Files enque function
 * @date 10 April 2020
 * @author Catalyst
 */
function fantomScripts() {
  // CSS files
  wp_enqueue_style('owl.carousel.min', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', '1.01', '1.01');
  wp_enqueue_style('owl.theme.default.min', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css', '1.01', '1.01');
  wp_enqueue_style("codemirrorcss", get_template_directory_uri() . '/css/codemirror.css');
  wp_enqueue_style("materialcss", get_template_directory_uri() . '/css/material.css');
  wp_enqueue_style("slickcss", 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
  wp_enqueue_style("customcss", get_template_directory_uri() . '/css/style.css');
  wp_enqueue_style("responsivecss", get_template_directory_uri() . '/css/responsive.css');

  //Js Files
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
  wp_enqueue_script('header-animation-js', get_template_directory_uri() . '/js/header-animation.js', array(), '2019061112', true);
  wp_enqueue_script('rangeslider-js', get_template_directory_uri() . '/js/rangeslider.js', array(), '2019061112', true);
  wp_enqueue_script('cc-rangeslider-min-js', get_template_directory_uri() . '/js/rangeslider.min.js', array(), true);
  wp_enqueue_script('velocity-min-js', get_template_directory_uri() . '/js/velocity.min.js', array(), true);
  wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), true);
  wp_enqueue_style('typekit', 'https://use.typekit.net/evf2xmx.css');
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');
}

add_action('wp_enqueue_scripts', 'fantomScripts');

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
}

add_action('widgets_init', 'ourWidgetsInit');

//featured post

function extra_user_profile_fields($user) {
  $meta = get_user_meta($user->ID, 'meta_key_name', false);
}

/**
 * @desc ACF theme options page init function
 * @date 15 April 2020
 * @author Catalyst
 */
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
      'page_title' => 'Theme Menu Options',
      'menu_title' => 'Theme menu Settings',
      'menu_slug' => 'theme-general-settings',
      'capability' => 'edit_posts',
      'redirect' => false
  ));
}

/**
 * @desc Get Staked rewards from graphQl
 * @date 15 April 2020
 * @author Catalyst
 */
function getGraphqlValue() {
  $endpoint = "https://xapi2.fantom.network/api"; //this is provided by graphcms
  $query = <<<'JSON'
query EstimatedRewards {
  estimateRewards(amount: 1000) {
    yearlyReward
    monthlyReward
    totalStaked
  }
}
JSON;
  $json = json_encode(['query' => $query]);
  $chObj = curl_init();
  curl_setopt($chObj, CURLOPT_URL, $endpoint);
  curl_setopt($chObj, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($chObj, CURLOPT_CUSTOMREQUEST, 'POST');
  curl_setopt($chObj, CURLOPT_HEADER, false);
  curl_setopt($chObj, CURLOPT_VERBOSE, true);
  curl_setopt($chObj, CURLOPT_POSTFIELDS, $json);
  curl_setopt($chObj, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
          )
  );
  $response = curl_exec($chObj);
  $jsonDecode = json_decode($response, true);
  $hexValue = hexdec($jsonDecode['data']['estimateRewards']['yearlyReward']);
  $percentage = $hexValue / 1000 * 100;
  $hexValue2 = hexdec($jsonDecode['data']['estimateRewards']['monthlyReward']);
  $percentage2 = $hexValue2 / 1000 * 100;

  $data['monthlyReward'] = $percentage2;
  $data['yearlyReward'] = $percentage;
  $data['totalStaked'] = $jsonDecode['data']['estimateRewards']['totalStaked'];
  return $data;
}
