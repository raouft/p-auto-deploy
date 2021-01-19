<?php
function wordpressify_resources()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false);
  wp_enqueue_script('footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true);
}

add_action('wp_enqueue_scripts', 'wordpressify_resources');

// Customize excerpt word count length
function custom_excerpt_length()
{
  return 22;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setup
function wordpressify_setup()
{
  // Handle Titles
  add_theme_support('title-tag');

  // Add featured image support
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 720, 720, true);
  add_image_size('square-thumbnail', 80, 80, true);
  add_image_size('banner-image', 1024, 1024, true);
}

add_action('after_setup_theme', 'wordpressify_setup');

show_admin_bar(false);

// Checks if there are any posts in the results
function is_search_has_results()
{
  return 0 != $GLOBALS['wp_query']->found_posts;
}

// Register Navigation Menus
function register_menus()
{
  register_nav_menu('primary_menu', __('Primary Menu'));
  register_nav_menu('footer_menu_1', __('Footer Menu 1'));
  register_nav_menu('footer_menu_2', __('Footer Menu 2'));
}
add_action('init', 'register_menus');

// Add Widget Areas
function wordpressify_widgets()
{
  register_sidebar(
    array(
      'name'          => 'Sidebar',
      'id'            => 'sidebar1',
      'before_widget' => '<div class="widget-item">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}

add_action('widgets_init', 'wordpressify_widgets');


// Register Custom Post Types
function career_post_type()
{
  $labels = array(
    'name'                  => _x('Careers', 'Post Type General Name', 'text_domain'),
    'singular_name'         => _x('Career', 'Post Type Singular Name', 'text_domain'),
    'menu_name'             => __('Careers', 'text_domain'),
    'name_admin_bar'        => __('Careers', 'text_domain'),
    'archives'              => __('Career Archives', 'text_domain'),
    'attributes'            => __('Career Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Career:', 'text_domain'),
    'all_items'             => __('All Careers', 'text_domain'),
    'add_new_item'          => __('Add New Career', 'text_domain'),
    'add_new'               => __('Add New', 'text_domain'),
    'new_item'              => __('New Career', 'text_domain'),
    'edit_item'             => __('Edit Career', 'text_domain'),
    'update_item'           => __('Update Career', 'text_domain'),
    'view_item'             => __('View Career', 'text_domain'),
    'view_items'            => __('View Careers', 'text_domain'),
    'search_items'          => __('Search Career', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into career', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this career', 'text_domain'),
    'items_list'            => __('Careers list', 'text_domain'),
    'items_list_navigation' => __('Careers list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter careers list', 'text_domain'),
  );
  $args = array(
    'label'                 => __('Career', 'text_domain'),
    'description'           => __('Manage list of careers', 'text_domain'),
    'labels'                => $labels,
    'supports'              => array('title', 'custom-fields'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-businessman',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type('career', $args);
}
add_action('init', 'career_post_type', 0);

function project_post_type()
{

  $labels = array(
    'name'                  => _x('Projects', 'Post Type General Name', 'text_domain'),
    'singular_name'         => _x('Project', 'Post Type Singular Name', 'text_domain'),
    'menu_name'             => __('Projects', 'text_domain'),
    'name_admin_bar'        => __('Projects', 'text_domain'),
    'archives'              => __('Project Archives', 'text_domain'),
    'attributes'            => __('Project Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Project:', 'text_domain'),
    'all_items'             => __('All Projects', 'text_domain'),
    'add_new_item'          => __('Add New Project', 'text_domain'),
    'add_new'               => __('Add New', 'text_domain'),
    'new_item'              => __('New Project', 'text_domain'),
    'edit_item'             => __('Edit Project', 'text_domain'),
    'update_item'           => __('Update Project', 'text_domain'),
    'view_item'             => __('View Project', 'text_domain'),
    'view_items'            => __('View Projects', 'text_domain'),
    'search_items'          => __('Search Project', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into project', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this project', 'text_domain'),
    'items_list'            => __('Projects list', 'text_domain'),
    'items_list_navigation' => __('Projects list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter projects list', 'text_domain'),
  );
  $args = array(
    'label'                 => __('Project', 'text_domain'),
    'description'           => __('Manage list of projects', 'text_domain'),
    'labels'                => $labels,
    'supports'              => array('title', 'custom-fields'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-open-folder',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type('project', $args);
}
add_action('init', 'project_post_type', 0);
