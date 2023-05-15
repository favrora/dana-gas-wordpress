<?php

function add_css()
{
  wp_register_style('first', get_template_directory_uri() . '/dist/css/index.min.css', false, '1.1', 'all');
  wp_enqueue_style('first');
}

add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
  wp_register_script('app', get_template_directory_uri() . '/dist/js/app.min.js', array('jquery'), 1.1, true);
  wp_enqueue_script('app');

  wp_register_script('index', get_template_directory_uri() . '/dist/js/index.min.js', array('jquery'), 1.1, true);
  wp_enqueue_script('index');

  wp_register_script('contact', get_template_directory_uri() . '/dist/js/contact-us.min.js', array('jquery'), 1.1, true);
  wp_enqueue_script('contact');
}

add_action('wp_enqueue_scripts', 'add_script');
