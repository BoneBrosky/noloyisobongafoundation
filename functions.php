<?php

function boilerplate_load_assets()
{
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function my_login_enqueues()
{
  wp_enqueue_style('custom_login_styling', get_theme_file_uri('/style/login-style.css'));
  // wp_enqueue_style('custom_admin_panel_styling', get_theme_file_uri('/style/admin-panel.css'));
  wp_enqueue_script('custom_login_js', get_theme_file_uri('/js/login-js.js'), array('wp-element'), '1.0', true);
  // wp_enqueue_script('custom_login_js', get_theme_file_uri('/js/login-js.js'));
}
add_action('login_enqueue_scripts', 'my_login_enqueues');

function boilerplate_add_support()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-header');
  add_theme_support('html5', array('search-form'));
  add_theme_support('custom-logo');
  add_post_type_support('attachment:audio', 'thumbnail');
  add_post_type_support('attachment:video', 'thumbnail');
  add_image_size('bannerSingle', 1900, 300, true);
}

// navigation menus

register_nav_menus(array(
  'primary' => __('Main Menu'),
  'secondary' => __('Secondary Menu')
));

add_action('after_setup_theme', 'boilerplate_add_support');

add_theme_support('html5', array(
  'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
));

add_action('admin_init', function () {
  global $_wp_admin_css_colors;
  $_wp_admin_css_colors = [$_wp_admin_css_colors["light"]];
});

function noloyiso_bonga_foundation_colour_theme_admin_color_scheme()
{
  //Get the theme directory
  $theme_dir = get_theme_file_uri('/style/admin-panel.css');

  //Noloyiso Bonga Foundation Colour Theme
  wp_admin_css_color(
    'noloyiso_bonga_colour_theme',
    __('Noloyiso Bonga Foundation Colour Theme'),
    $theme_dir,
    array('#08784a', '#fff', '#eaa40a', '#fdb515')
  );

  // wp_admin_css_color( $key:string, $name:string, $url:string, $colors:array, $icons:array )
}
add_action('admin_init', 'noloyiso_bonga_foundation_colour_theme_admin_color_scheme');
