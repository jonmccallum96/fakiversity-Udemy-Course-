<?php

function fakiversity_files()
{
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  //loads files dependant on local or deployment
  if (strstr($_SERVER['SERVER_NAME'], 'fakeiversity.local')) {
    wp_enqueue_script('main-JS', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('our-vendors-JS', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
    wp_enqueue_script('main-JS', get_theme_file_uri('/bundled-assets/scripts.a7e8dc4a57824c695a25.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-style', get_theme_file_uri('/bundled-assets/styles.a7e8dc4a57824c695a25.css'));
  }
}

add_action('wp_enqueue_scripts', 'fakiversity_files');

function fakiversity_features()
{
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  register_nav_menu('footerMenuLocationOne', 'Footer Menu Location One');
  register_nav_menu('footerMenuLocationTwo', 'Footer Menu Location Two');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'fakiversity_features');
