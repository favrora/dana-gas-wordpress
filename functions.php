<?php

function add_css()
{
  wp_register_style('index', get_template_directory_uri() . '/dist/css/index.min.css', false, '1.1', 'all');
  wp_enqueue_style('index');
}

add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
  wp_register_script('app', get_template_directory_uri() . '/dist/js/app.min.js', array('jquery'), 1.1, true);
  wp_register_script('index', get_template_directory_uri() . '/dist/js/index.min.js', array('jquery'), 1.1, true);
  wp_register_script('contact', get_template_directory_uri() . '/dist/js/contact-us.min.js', array('jquery'), 1.1, true);

  if (wp_script_is('app', 'enqueued')) {
    wp_enqueue_script('app');
  }

  if (wp_script_is('index', 'enqueued')) {
    wp_enqueue_script('index');
  }

  if (wp_script_is('contact', 'enqueued')) {
    wp_enqueue_script('contact');
  }
}

add_action('wp_enqueue_scripts', 'add_script');
