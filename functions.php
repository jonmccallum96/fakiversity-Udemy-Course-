<?php

function fakiversity_files()
{
  wp_enqueue_script('main-JS', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
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
