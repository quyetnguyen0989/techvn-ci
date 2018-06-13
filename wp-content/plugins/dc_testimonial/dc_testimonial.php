<?php
/*
Plugin Name: Disenador Testimonials
Plugin URI: http://deepakchandra.in/
Description: Declares a plugin that will create a custom post type displaying portfolio.
Version: 1.0
Author: Deepak Chandra
Author URI: http://deepakchandra.in/
License: GPLv2
*/

function dc_testimonials_type() {
	$testimoniallabels = array (	

		'name' => __('Testimonial','dc_testimonial'),

		'singular_name' => __('Testimonial','dc_testimonial'),

		'add_new' => __('Add testimonial','dc_testimonial'),

		'add_new_item' => __('Add new testimonial','dc_testimonial'),

		'edit_item' => __('Edit testimonial','dc_testimonial'),

		'new_item' => __('Add new testimonial','dc_testimonial'),

		'all_items' => __('All testimonial','dc_testimonial'),

		'view_item' => __('View testimonial','dc_testimonial'),

		'search_item' => __('Search testimonial','dc_testimonial'),

		'not_found' => __('No testimonial found..','dc_testimonial'),

		'not_found_in_trash' => __('No testimonial found in Trash.','dc_testimonial'),

		'menu_name' => 'Testimonial'

	

	);

	$args = array(

		'labels' => $testimoniallabels,
		'hierarchical' => true,
		'description' => 'Manages testimonial',
		'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
		'menu_icon' => 'dashicons-testimonial',		
		'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post',
		'supports' => array( 'title','editor','thumbnail','excerpt','comments','custom-fields'),
	);
		register_post_type ('testimonial',$args);
	}
add_action ('init','dc_testimonials_type');

function dc_testimonial_taxonomy () {
	$taxonomylabels = array(

	'name' => __('Category testimonial','dc_testimonial'),

	'singular_name' => __('Category testimonial','dc_testimonial'),

	'search_items' => __('Search Category testimonial','dc_testimonial'),

	'all_items' => __('All Category testimonial','dc_testimonial'),

	'edit_item' => __('Edit Category testimonial','dc_testimonial'),

	'add_new_item' => __('Add new Category testimonial','dc_testimonial'),

	'menu_name' => __('Category testimonial','dc_testimonial'),

	);

	$args = array(

	'labels' => $taxonomylabels,

	'hierarchical' => true,

);
	register_taxonomy('category_testimonial','testimonial',$args);
}
add_action ('init','dc_testimonial_taxonomy',0);

?>