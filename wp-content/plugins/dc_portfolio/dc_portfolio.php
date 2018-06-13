<?php
/*
Plugin Name: Disenador Portfolio
Plugin URI: http://deepakchandra.in/
Description: Declares a plugin that will create a custom post type displaying portfolio.
Version: 1.0
Author: Deepak Chandra
Author URI: http://deepakchandra.in/
License: GPLv2
*/

add_action( 'init', 'register_disenador_Portfolio' );
function register_disenador_Portfolio() {
    
    $labels = array( 
        'name' => __( 'Portfolio', 'dc-portfolio' ),
        'singular_name' => __( 'Portfolio', 'dc-portfolio' ),
        'add_new' => __( 'Add New Portfolio', 'dc-portfolio' ),
        'add_new_item' => __( 'Add New Portfolio', 'dc-portfolio' ),
        'edit_item' => __( 'Edit Portfolio', 'dc-portfolio' ),
        'new_item' => __( 'New Portfolio', 'dc-portfolio' ),
        'view_item' => __( 'View Portfolio', 'dc-portfolio' ),
        'search_items' => __( 'Search Portfolios', 'dc-portfolio' ),
        'not_found' => __( 'No Portfolios found', 'dc-portfolio' ),
        'not_found_in_trash' => __( 'No Portfolios found in Trash', 'dc-portfolio' ),
        'parent_item_colon' => __( 'Parent Portfolio:', 'dc-portfolio' ),
        'menu_name' => __( 'Portfolio', 'dc-portfolio' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List Portfolio',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'post-formats' ),
        'taxonomies' => array( 'Portfolio_category','categories','tags' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'Portfolio', $args );
}
add_action( 'init', 'create_Categories_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it Skillss for your posts

function create_Categories_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => __( 'Categories', 'dc-portfolio' ),
    'singular_name' => __( 'Categories', 'dc-portfolio' ),
    'search_items' =>  __( 'Search Categories','dc-portfolio' ),
    'all_items' => __( 'All Categories','dc-portfolio' ),
    'parent_item' => __( 'Parent Categories','dc-portfolio' ),
    'parent_item_colon' => __( 'Parent Categories:','dc-portfolio' ),
    'edit_item' => __( 'Edit Categories','dc-portfolio' ), 
    'update_item' => __( 'Update Categories','dc-portfolio' ),
    'add_new_item' => __( 'Add New Categories','dc-portfolio' ),
    'new_item_name' => __( 'New Categories Name','dc-portfolio' ),
    'menu_name' => __( 'Categories','dc-portfolio' ),
  );     

// Now register the taxonomy

  register_taxonomy('categories',array('Portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categories' ),
  ));

}
add_action( 'init', 'create_Tags_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it Skillss for your posts

function create_Tags_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => __( 'Tags', 'dc-portfolio' ),
    'singular_name' => __( 'Tags', 'dc-portfolio' ),
    'search_items' =>  __( 'Search Tags','dc-portfolio' ),
    'all_items' => __( 'All Tags','dc-portfolio' ),
    'parent_item' => __( 'Parent Tags','dc-portfolio' ),
    'parent_item_colon' => __( 'Parent Tags:','dc-portfolio' ),
    'edit_item' => __( 'Edit Tags','dc-portfolio' ), 
    'update_item' => __( 'Update Tags','dc-portfolio' ),
    'add_new_item' => __( 'Add New Tags','dc-portfolio' ),
    'new_item_name' => __( 'New Tags Name','dc-portfolio' ),
    'menu_name' => __( 'Tags','dc-portfolio' ),
  );     

// Now register the taxonomy
  register_taxonomy('tags',array('Portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tags' ),
  ));
}

/**
 * Load template file for portfolio single
 *
 * @since  1.0.0
 *
 * @param  string $template
 *
 * @return string
 */
add_filter( 'template_include', 'include_template_function', 1 ); 
function include_template_function( $template_path ) {
    if ( get_post_type() == 'Portfolio' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-portfolio.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path(__FILE__) . 'template/single-portfolio.php';
            }
        }
    }
    return $template_path;
}

?>