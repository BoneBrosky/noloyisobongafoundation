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
}

// navigation menus

register_nav_menus(array(
  'primary' => __('Main Menu'),
  'secondary' => __('Secondary Menu')
));

function currentYear()
{
  return date('Y');
}
add_shortcode('year', 'currentYear');

add_action('after_setup_theme', 'boilerplate_add_support');

add_theme_support('html5', array(
  'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
));

// Posttype

function cptui_register_my_cpts()
{

  /**
   * Post Type: leadership.
   */

  $labels = [
    "name" => esc_html__("leadership", "custom-post-type-ui"),
    "singular_name" => esc_html__("leadership", "custom-post-type-ui"),
    "menu_name" => esc_html__("My leadership", "custom-post-type-ui"),
    "all_items" => esc_html__("All leadership", "custom-post-type-ui"),
    "add_new" => esc_html__("Add new", "custom-post-type-ui"),
    "add_new_item" => esc_html__("Add new leadership", "custom-post-type-ui"),
    "edit_item" => esc_html__("Edit leadership", "custom-post-type-ui"),
    "new_item" => esc_html__("New leadership", "custom-post-type-ui"),
    "view_item" => esc_html__("View leadership", "custom-post-type-ui"),
    "view_items" => esc_html__("View leadership", "custom-post-type-ui"),
    "search_items" => esc_html__("Search leadership", "custom-post-type-ui"),
    "not_found" => esc_html__("No leadership found", "custom-post-type-ui"),
    "not_found_in_trash" => esc_html__("No leadership found in trash", "custom-post-type-ui"),
    "parent" => esc_html__("Parent leadership:", "custom-post-type-ui"),
    "featured_image" => esc_html__("Featured image for this leadership", "custom-post-type-ui"),
    "set_featured_image" => esc_html__("Set featured image for this leadership", "custom-post-type-ui"),
    "remove_featured_image" => esc_html__("Remove featured image for this leadership", "custom-post-type-ui"),
    "use_featured_image" => esc_html__("Use as featured image for this leadership", "custom-post-type-ui"),
    "archives" => esc_html__("leadership archives", "custom-post-type-ui"),
    "insert_into_item" => esc_html__("Insert into leadership", "custom-post-type-ui"),
    "uploaded_to_this_item" => esc_html__("Upload to this leadership", "custom-post-type-ui"),
    "filter_items_list" => esc_html__("Filter leadership list", "custom-post-type-ui"),
    "items_list_navigation" => esc_html__("leadership list navigation", "custom-post-type-ui"),
    "items_list" => esc_html__("leadership list", "custom-post-type-ui"),
    "attributes" => esc_html__("leadership attributes", "custom-post-type-ui"),
    "name_admin_bar" => esc_html__("leadership", "custom-post-type-ui"),
    "item_published" => esc_html__("leadership published", "custom-post-type-ui"),
    "item_published_privately" => esc_html__("leadership published privately.", "custom-post-type-ui"),
    "item_reverted_to_draft" => esc_html__("leadership reverted to draft.", "custom-post-type-ui"),
    "item_scheduled" => esc_html__("leadership scheduled", "custom-post-type-ui"),
    "item_updated" => esc_html__("leadership updated.", "custom-post-type-ui"),
    "parent_item_colon" => esc_html__("Parent leadership:", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("leadership", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => ["slug" => "leadership", "with_front" => true],
    "query_var" => true,
    "menu_icon" => "dashicons-businessman",
    "supports" => ["title", "editor", "thumbnail"],
    "show_in_graphql" => false,
  ];

  register_post_type("leadership", $args);

  /**
   * Post Type: Latest News.
   */

  $labels = [
    "name" => esc_html__("Latest News", "custom-post-type-ui"),
    "singular_name" => esc_html__("Latest News", "custom-post-type-ui"),
    "menu_name" => esc_html__("My Latest News", "custom-post-type-ui"),
    "all_items" => esc_html__("All Latest News", "custom-post-type-ui"),
    "add_new" => esc_html__("Add new", "custom-post-type-ui"),
    "add_new_item" => esc_html__("Add new Latest News", "custom-post-type-ui"),
    "edit_item" => esc_html__("Edit Latest News", "custom-post-type-ui"),
    "new_item" => esc_html__("New Latest News", "custom-post-type-ui"),
    "view_item" => esc_html__("View Latest News", "custom-post-type-ui"),
    "view_items" => esc_html__("View Latest News", "custom-post-type-ui"),
    "search_items" => esc_html__("Search Latest News", "custom-post-type-ui"),
    "not_found" => esc_html__("No Latest News found", "custom-post-type-ui"),
    "not_found_in_trash" => esc_html__("No Latest News found in trash", "custom-post-type-ui"),
    "parent" => esc_html__("Parent Latest News:", "custom-post-type-ui"),
    "featured_image" => esc_html__("Featured image for this Latest News", "custom-post-type-ui"),
    "set_featured_image" => esc_html__("Set featured image for this Latest News", "custom-post-type-ui"),
    "remove_featured_image" => esc_html__("Remove featured image for this Latest News", "custom-post-type-ui"),
    "use_featured_image" => esc_html__("Use as featured image for this Latest News", "custom-post-type-ui"),
    "archives" => esc_html__("Latest News archives", "custom-post-type-ui"),
    "insert_into_item" => esc_html__("Insert into Latest News", "custom-post-type-ui"),
    "uploaded_to_this_item" => esc_html__("Upload to this Latest News", "custom-post-type-ui"),
    "filter_items_list" => esc_html__("Filter Latest News list", "custom-post-type-ui"),
    "items_list_navigation" => esc_html__("Latest News list navigation", "custom-post-type-ui"),
    "items_list" => esc_html__("Latest News list", "custom-post-type-ui"),
    "attributes" => esc_html__("Latest News attributes", "custom-post-type-ui"),
    "name_admin_bar" => esc_html__("Latest News", "custom-post-type-ui"),
    "item_published" => esc_html__("Latest News published", "custom-post-type-ui"),
    "item_published_privately" => esc_html__("Latest News published privately.", "custom-post-type-ui"),
    "item_reverted_to_draft" => esc_html__("Latest News reverted to draft.", "custom-post-type-ui"),
    "item_scheduled" => esc_html__("Latest News scheduled", "custom-post-type-ui"),
    "item_updated" => esc_html__("Latest News updated.", "custom-post-type-ui"),
    "parent_item_colon" => esc_html__("Parent Latest News:", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("Latest News", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => true,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => ["slug" => "latest_news", "with_front" => true],
    "query_var" => true,
    "menu_icon" => "dashicons-format-aside",
    "supports" => ["title", "editor", "thumbnail", "page-attributes"],
    "show_in_graphql" => false,
  ];

  register_post_type("latest_news", $args);

  /**
   * Post Type: Forms.
   */

  $labels = [
    "name" => esc_html__("Forms", "custom-post-type-ui"),
    "singular_name" => esc_html__("Form", "custom-post-type-ui"),
    "menu_name" => esc_html__("My Forms", "custom-post-type-ui"),
    "all_items" => esc_html__("All Forms", "custom-post-type-ui"),
    "add_new" => esc_html__("Add new", "custom-post-type-ui"),
    "add_new_item" => esc_html__("Add new Form", "custom-post-type-ui"),
    "edit_item" => esc_html__("Edit Form", "custom-post-type-ui"),
    "new_item" => esc_html__("New Form", "custom-post-type-ui"),
    "view_item" => esc_html__("View Form", "custom-post-type-ui"),
    "view_items" => esc_html__("View Forms", "custom-post-type-ui"),
    "search_items" => esc_html__("Search Forms", "custom-post-type-ui"),
    "not_found" => esc_html__("No Forms found", "custom-post-type-ui"),
    "not_found_in_trash" => esc_html__("No Forms found in trash", "custom-post-type-ui"),
    "parent" => esc_html__("Parent Form:", "custom-post-type-ui"),
    "featured_image" => esc_html__("Featured image for this Form", "custom-post-type-ui"),
    "set_featured_image" => esc_html__("Set featured image for this Form", "custom-post-type-ui"),
    "remove_featured_image" => esc_html__("Remove featured image for this Form", "custom-post-type-ui"),
    "use_featured_image" => esc_html__("Use as featured image for this Form", "custom-post-type-ui"),
    "archives" => esc_html__("Form archives", "custom-post-type-ui"),
    "insert_into_item" => esc_html__("Insert into Form", "custom-post-type-ui"),
    "uploaded_to_this_item" => esc_html__("Upload to this Form", "custom-post-type-ui"),
    "filter_items_list" => esc_html__("Filter Forms list", "custom-post-type-ui"),
    "items_list_navigation" => esc_html__("Forms list navigation", "custom-post-type-ui"),
    "items_list" => esc_html__("Forms list", "custom-post-type-ui"),
    "attributes" => esc_html__("Forms attributes", "custom-post-type-ui"),
    "name_admin_bar" => esc_html__("Form", "custom-post-type-ui"),
    "item_published" => esc_html__("Form published", "custom-post-type-ui"),
    "item_published_privately" => esc_html__("Form published privately.", "custom-post-type-ui"),
    "item_reverted_to_draft" => esc_html__("Form reverted to draft.", "custom-post-type-ui"),
    "item_scheduled" => esc_html__("Form scheduled", "custom-post-type-ui"),
    "item_updated" => esc_html__("Form updated.", "custom-post-type-ui"),
    "parent_item_colon" => esc_html__("Parent Form:", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("Forms", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => true,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => ["slug" => "form", "with_front" => true],
    "query_var" => true,
    "menu_icon" => "dashicons-list-view",
    "supports" => ["title", "editor"],
    "show_in_graphql" => false,
  ];

  register_post_type("form", $args);

  /**
   * Post Type: FAQS.
   */

  $labels = [
    "name" => esc_html__("FAQS", "custom-post-type-ui"),
    "singular_name" => esc_html__("FAQ", "custom-post-type-ui"),
    "menu_name" => esc_html__("My FAQS", "custom-post-type-ui"),
    "all_items" => esc_html__("All FAQS", "custom-post-type-ui"),
    "add_new" => esc_html__("Add new", "custom-post-type-ui"),
    "add_new_item" => esc_html__("Add new FAQ", "custom-post-type-ui"),
    "edit_item" => esc_html__("Edit FAQ", "custom-post-type-ui"),
    "new_item" => esc_html__("New FAQ", "custom-post-type-ui"),
    "view_item" => esc_html__("View FAQ", "custom-post-type-ui"),
    "view_items" => esc_html__("View FAQS", "custom-post-type-ui"),
    "search_items" => esc_html__("Search FAQS", "custom-post-type-ui"),
    "not_found" => esc_html__("No FAQS found", "custom-post-type-ui"),
    "not_found_in_trash" => esc_html__("No FAQS found in trash", "custom-post-type-ui"),
    "parent" => esc_html__("Parent FAQ:", "custom-post-type-ui"),
    "featured_image" => esc_html__("Featured image for this FAQ", "custom-post-type-ui"),
    "set_featured_image" => esc_html__("Set featured image for this FAQ", "custom-post-type-ui"),
    "remove_featured_image" => esc_html__("Remove featured image for this FAQ", "custom-post-type-ui"),
    "use_featured_image" => esc_html__("Use as featured image for this FAQ", "custom-post-type-ui"),
    "archives" => esc_html__("FAQ archives", "custom-post-type-ui"),
    "insert_into_item" => esc_html__("Insert into FAQ", "custom-post-type-ui"),
    "uploaded_to_this_item" => esc_html__("Upload to this FAQ", "custom-post-type-ui"),
    "filter_items_list" => esc_html__("Filter FAQS list", "custom-post-type-ui"),
    "items_list_navigation" => esc_html__("FAQS list navigation", "custom-post-type-ui"),
    "items_list" => esc_html__("FAQS list", "custom-post-type-ui"),
    "attributes" => esc_html__("FAQS attributes", "custom-post-type-ui"),
    "name_admin_bar" => esc_html__("FAQ", "custom-post-type-ui"),
    "item_published" => esc_html__("FAQ published", "custom-post-type-ui"),
    "item_published_privately" => esc_html__("FAQ published privately.", "custom-post-type-ui"),
    "item_reverted_to_draft" => esc_html__("FAQ reverted to draft.", "custom-post-type-ui"),
    "item_scheduled" => esc_html__("FAQ scheduled", "custom-post-type-ui"),
    "item_updated" => esc_html__("FAQ updated.", "custom-post-type-ui"),
    "parent_item_colon" => esc_html__("Parent FAQ:", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("FAQS", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => ["slug" => "faqs", "with_front" => true],
    "query_var" => true,
    "menu_icon" => "dashicons-feedback",
    "supports" => ["title", "editor", "custom-fields"],
    "show_in_graphql" => false,
  ];

  register_post_type("faqs", $args);

  /**
   * Post Type: NPO Info.
   */

  $labels = [
    "name" => esc_html__("NPO Info", "custom-post-type-ui"),
    "singular_name" => esc_html__("NPO Info", "custom-post-type-ui"),
    "menu_name" => esc_html__("My NPO Info", "custom-post-type-ui"),
    "all_items" => esc_html__("All NPO Info", "custom-post-type-ui"),
    "add_new" => esc_html__("Add new", "custom-post-type-ui"),
    "add_new_item" => esc_html__("Add new NPO Info", "custom-post-type-ui"),
    "edit_item" => esc_html__("Edit NPO Info", "custom-post-type-ui"),
    "new_item" => esc_html__("New NPO Info", "custom-post-type-ui"),
    "view_item" => esc_html__("View NPO Info", "custom-post-type-ui"),
    "view_items" => esc_html__("View NPO Info", "custom-post-type-ui"),
    "search_items" => esc_html__("Search NPO Info", "custom-post-type-ui"),
    "not_found" => esc_html__("No NPO Info found", "custom-post-type-ui"),
    "not_found_in_trash" => esc_html__("No NPO Info found in trash", "custom-post-type-ui"),
    "parent" => esc_html__("Parent NPO Info:", "custom-post-type-ui"),
    "featured_image" => esc_html__("Featured image for this NPO Info", "custom-post-type-ui"),
    "set_featured_image" => esc_html__("Set featured image for this NPO Info", "custom-post-type-ui"),
    "remove_featured_image" => esc_html__("Remove featured image for this NPO Info", "custom-post-type-ui"),
    "use_featured_image" => esc_html__("Use as featured image for this NPO Info", "custom-post-type-ui"),
    "archives" => esc_html__("NPO Info archives", "custom-post-type-ui"),
    "insert_into_item" => esc_html__("Insert into NPO Info", "custom-post-type-ui"),
    "uploaded_to_this_item" => esc_html__("Upload to this NPO Info", "custom-post-type-ui"),
    "filter_items_list" => esc_html__("Filter NPO Info list", "custom-post-type-ui"),
    "items_list_navigation" => esc_html__("NPO Info list navigation", "custom-post-type-ui"),
    "items_list" => esc_html__("NPO Info list", "custom-post-type-ui"),
    "attributes" => esc_html__("NPO Info attributes", "custom-post-type-ui"),
    "name_admin_bar" => esc_html__("NPO Info", "custom-post-type-ui"),
    "item_published" => esc_html__("NPO Info published", "custom-post-type-ui"),
    "item_published_privately" => esc_html__("NPO Info published privately.", "custom-post-type-ui"),
    "item_reverted_to_draft" => esc_html__("NPO Info reverted to draft.", "custom-post-type-ui"),
    "item_scheduled" => esc_html__("NPO Info scheduled", "custom-post-type-ui"),
    "item_updated" => esc_html__("NPO Info updated.", "custom-post-type-ui"),
    "parent_item_colon" => esc_html__("Parent NPO Info:", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("NPO Info", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => true,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => ["slug" => "npo_info", "with_front" => true],
    "query_var" => true,
    "menu_icon" => "dashicons-bank",
    "supports" => ["title", "editor", "thumbnail"],
    "show_in_graphql" => false,
  ];

  register_post_type("npo_info", $args);

  /**
   * Post Type: Donations.
   */

  $labels = [
    "name" => esc_html__("Donations", "custom-post-type-ui"),
    "singular_name" => esc_html__("Donation", "custom-post-type-ui"),
    "menu_name" => esc_html__("My Donations", "custom-post-type-ui"),
    "all_items" => esc_html__("All Donations", "custom-post-type-ui"),
    "add_new" => esc_html__("Add new", "custom-post-type-ui"),
    "add_new_item" => esc_html__("Add new Donation", "custom-post-type-ui"),
    "edit_item" => esc_html__("Edit Donation", "custom-post-type-ui"),
    "new_item" => esc_html__("New Donation", "custom-post-type-ui"),
    "view_item" => esc_html__("View Donation", "custom-post-type-ui"),
    "view_items" => esc_html__("View Donations", "custom-post-type-ui"),
    "search_items" => esc_html__("Search Donations", "custom-post-type-ui"),
    "not_found" => esc_html__("No Donations found", "custom-post-type-ui"),
    "not_found_in_trash" => esc_html__("No Donations found in trash", "custom-post-type-ui"),
    "parent" => esc_html__("Parent Donation:", "custom-post-type-ui"),
    "featured_image" => esc_html__("Featured image for this Donation", "custom-post-type-ui"),
    "set_featured_image" => esc_html__("Set featured image for this Donation", "custom-post-type-ui"),
    "remove_featured_image" => esc_html__("Remove featured image for this Donation", "custom-post-type-ui"),
    "use_featured_image" => esc_html__("Use as featured image for this Donation", "custom-post-type-ui"),
    "archives" => esc_html__("Donation archives", "custom-post-type-ui"),
    "insert_into_item" => esc_html__("Insert into Donation", "custom-post-type-ui"),
    "uploaded_to_this_item" => esc_html__("Upload to this Donation", "custom-post-type-ui"),
    "filter_items_list" => esc_html__("Filter Donations list", "custom-post-type-ui"),
    "items_list_navigation" => esc_html__("Donations list navigation", "custom-post-type-ui"),
    "items_list" => esc_html__("Donations list", "custom-post-type-ui"),
    "attributes" => esc_html__("Donations attributes", "custom-post-type-ui"),
    "name_admin_bar" => esc_html__("Donation", "custom-post-type-ui"),
    "item_published" => esc_html__("Donation published", "custom-post-type-ui"),
    "item_published_privately" => esc_html__("Donation published privately.", "custom-post-type-ui"),
    "item_reverted_to_draft" => esc_html__("Donation reverted to draft.", "custom-post-type-ui"),
    "item_scheduled" => esc_html__("Donation scheduled", "custom-post-type-ui"),
    "item_updated" => esc_html__("Donation updated.", "custom-post-type-ui"),
    "parent_item_colon" => esc_html__("Parent Donation:", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("Donations", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => true,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => ["slug" => "donation", "with_front" => true],
    "query_var" => true,
    "menu_icon" => "dashicons-heart",
    "supports" => ["title", "editor", "thumbnail"],
    "show_in_graphql" => false,
  ];

  register_post_type("donation", $args);

  /**
   * Post Type: Footers.
   */

  $labels = [
    "name" => esc_html__("Footers", "custom-post-type-ui"),
    "singular_name" => esc_html__("Footer", "custom-post-type-ui"),
    "menu_name" => esc_html__("My Footer", "custom-post-type-ui"),
    "all_items" => esc_html__("All Footer", "custom-post-type-ui"),
    "add_new" => esc_html__("Add new", "custom-post-type-ui"),
    "add_new_item" => esc_html__("Add new footer", "custom-post-type-ui"),
    "edit_item" => esc_html__("Edit footer", "custom-post-type-ui"),
    "new_item" => esc_html__("New footer", "custom-post-type-ui"),
    "view_item" => esc_html__("View footer", "custom-post-type-ui"),
    "view_items" => esc_html__("View Footer", "custom-post-type-ui"),
    "search_items" => esc_html__("Search Footer", "custom-post-type-ui"),
    "not_found" => esc_html__("No Footer found", "custom-post-type-ui"),
    "not_found_in_trash" => esc_html__("No Footer found in trash", "custom-post-type-ui"),
    "parent" => esc_html__("Parent footer:", "custom-post-type-ui"),
    "featured_image" => esc_html__("Featured image for this footer", "custom-post-type-ui"),
    "set_featured_image" => esc_html__("Set featured image for this footer", "custom-post-type-ui"),
    "remove_featured_image" => esc_html__("Remove featured image for this footer", "custom-post-type-ui"),
    "use_featured_image" => esc_html__("Use as featured image for this footer", "custom-post-type-ui"),
    "archives" => esc_html__("footer archives", "custom-post-type-ui"),
    "insert_into_item" => esc_html__("Insert into footer", "custom-post-type-ui"),
    "uploaded_to_this_item" => esc_html__("Upload to this footer", "custom-post-type-ui"),
    "filter_items_list" => esc_html__("Filter Footer list", "custom-post-type-ui"),
    "items_list_navigation" => esc_html__("Footer list navigation", "custom-post-type-ui"),
    "items_list" => esc_html__("Footer list", "custom-post-type-ui"),
    "attributes" => esc_html__("Footer attributes", "custom-post-type-ui"),
    "name_admin_bar" => esc_html__("footer", "custom-post-type-ui"),
    "item_published" => esc_html__("footer published", "custom-post-type-ui"),
    "item_published_privately" => esc_html__("footer published privately.", "custom-post-type-ui"),
    "item_reverted_to_draft" => esc_html__("footer reverted to draft.", "custom-post-type-ui"),
    "item_scheduled" => esc_html__("footer scheduled", "custom-post-type-ui"),
    "item_updated" => esc_html__("footer updated.", "custom-post-type-ui"),
    "parent_item_colon" => esc_html__("Parent footer:", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("Footers", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => true,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => ["slug" => "footer", "with_front" => true],
    "query_var" => true,
    "menu_icon" => "dashicons-editor-insertmore",
    "supports" => ["title", "editor", "thumbnail"],
    "show_in_graphql" => false,
  ];

  register_post_type("footer", $args);

  /**
   * Post Type: Top Headers.
   */

  $labels = [
    "name" => esc_html__("Top Headers", "custom-post-type-ui"),
    "singular_name" => esc_html__("Top Header", "custom-post-type-ui"),
    "menu_name" => esc_html__("My Headers", "custom-post-type-ui"),
    "all_items" => esc_html__("All Headers", "custom-post-type-ui"),
    "add_new" => esc_html__("Add new", "custom-post-type-ui"),
    "add_new_item" => esc_html__("Add new Header", "custom-post-type-ui"),
    "edit_item" => esc_html__("Edit Header", "custom-post-type-ui"),
    "new_item" => esc_html__("New Header", "custom-post-type-ui"),
    "view_item" => esc_html__("View Header", "custom-post-type-ui"),
    "view_items" => esc_html__("View Headers", "custom-post-type-ui"),
    "search_items" => esc_html__("Search Headers", "custom-post-type-ui"),
    "not_found" => esc_html__("No Headers found", "custom-post-type-ui"),
    "not_found_in_trash" => esc_html__("No Headers found in trash", "custom-post-type-ui"),
    "parent" => esc_html__("Parent Header:", "custom-post-type-ui"),
    "featured_image" => esc_html__("Featured image for this Header", "custom-post-type-ui"),
    "set_featured_image" => esc_html__("Set featured image for this Header", "custom-post-type-ui"),
    "remove_featured_image" => esc_html__("Remove featured image for this Header", "custom-post-type-ui"),
    "use_featured_image" => esc_html__("Use as featured image for this Header", "custom-post-type-ui"),
    "archives" => esc_html__("Header archives", "custom-post-type-ui"),
    "insert_into_item" => esc_html__("Insert into Header", "custom-post-type-ui"),
    "uploaded_to_this_item" => esc_html__("Upload to this Header", "custom-post-type-ui"),
    "filter_items_list" => esc_html__("Filter Headers list", "custom-post-type-ui"),
    "items_list_navigation" => esc_html__("Headers list navigation", "custom-post-type-ui"),
    "items_list" => esc_html__("Headers list", "custom-post-type-ui"),
    "attributes" => esc_html__("Headers attributes", "custom-post-type-ui"),
    "name_admin_bar" => esc_html__("Header", "custom-post-type-ui"),
    "item_published" => esc_html__("Header published", "custom-post-type-ui"),
    "item_published_privately" => esc_html__("Header published privately.", "custom-post-type-ui"),
    "item_reverted_to_draft" => esc_html__("Header reverted to draft.", "custom-post-type-ui"),
    "item_scheduled" => esc_html__("Header scheduled", "custom-post-type-ui"),
    "item_updated" => esc_html__("Header updated.", "custom-post-type-ui"),
    "parent_item_colon" => esc_html__("Parent Header:", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("Top Headers", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => true,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => ["slug" => "header", "with_front" => true],
    "query_var" => true,
    "menu_position" => 20,
    "menu_icon" => "dashicons-editor-insertmore",
    "supports" => ["title", "editor"],
    "show_in_graphql" => false,
  ];

  register_post_type("header", $args);
}

add_action('init', 'cptui_register_my_cpts');

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
