<?php

function select_few_load_assets()
{
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
  wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery/jquery-3.7.1.min.js'), array('jquery-wp'), '1.0');
  wp_enqueue_style('ourmainjs', get_theme_file_uri('/build/index.css'));
  wp_enqueue_style('fix_styling', get_theme_file_uri('/style/style.css'));
}

add_action('wp_enqueue_scripts', 'select_few_load_assets');

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
  add_image_size('header-image', 1080, 450, true);
}

// navigation menus

register_nav_menus(array(
  'primary' => __('Main Menu'),
  'secondary' => __('Footer Menu')
));

add_action('after_setup_theme', 'boilerplate_add_support');

add_theme_support('html5', array(
  'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
));

add_action('admin_init', function () {
  global $_wp_admin_css_colors;
  $_wp_admin_css_colors = [$_wp_admin_css_colors["fresh"]];
});

function select_few_colour_theme_admin_color_scheme()
{
  //Get the theme directory
  $theme_dir = get_theme_file_uri('/style/admin-panel.css');

  //Select Few Colour Theme
  wp_admin_css_color(
    'select_few_colour_theme',
    __('Select Few Colour Theme'),
    $theme_dir,
    array('#00796b', '#ffffff', '#fdb515', '#009688')
  );

  // wp_admin_css_color( $key:string, $name:string, $url:string, $colors:array, $icons:array )
}
add_action('admin_init', 'select_few_colour_theme_admin_color_scheme');

function selectFewMapKey($api)
{
  $api['key'] = 'yourKeyGoesHere';
  return $api;
}

add_filter('acf/fields/google_map/api', 'selectFewMapKey');

function navSide()
{

  if (is_front_page() == true) {
?>
    <header class="bg-[#00796B] bg-opacity-60 backdrop-blur-s w-[40px] lg:w-[60px]  h-full absolute z-50 left-0 navSide">
      <div class="bg-white flex hover:bg-[#00796B] group p-2 lg:p-4 fixed w-[40px] h-[40px] lg:h-auto lg:w-[60px] drop-shadow-2xl cursor-pointer open-mobile-nav z-10">
        <span class="material-symbols-outlined text-[#00796B] group-hover:text-white w-auto m-auto">
          menu
        </span>
      </div>

      <?php get_template_part('./includes/socials'); ?>
    </header>
  <?php
  } else {

  ?>
    <header class="bg-[#00796B] bg-opacity-60 backdrop-blur-s w-[40px] lg:w-[60px] h-[450px] absolute z-50 left-0 top-0 navSide">
      <div class="bg-white flex hover:bg-[#00796B] group p-2 lg:p-4 fixed w-[40px] h-[40px] lg:h-auto lg:w-[60px] drop-shadow-2xl cursor-pointer open-mobile-nav z-10">
        <span class="material-symbols-outlined text-[#00796B] group-hover:text-white w-auto m-auto">
          menu
        </span>
      </div>

      <?php get_template_part('./includes/socials'); ?>
    </header>
<?php
  }
}
