
<?php
/*
Plugin Name: DC dich-vu
Plugin URI: http://deepakchandra.in
Description: Declares a plugin that will create a custom post type displaying dich-vu.
Version: 1.0
Author: Deepak Chandra
Author URI: http://deepakchandra.in/
Text Domain: dc_service
License: GPLv2
*/

function dc_service_type() {
	$servicelabels = array (	

		'name' => __('dich-vu','dc_service'),

		'singular_name' => __('Service','dc_service'),

		'add_new' => __('Add Service','dc_service'),

		'add_new_item' => __('Add new service','dc_service'),

		'edit_item' => __('Edit service','dc_service'),

		'new_item' => __('Add new service','dc_service'),

		'all_items' => __('All dich-vu','dc_service'),

		'view_item' => __('View Service','dc_service'),

		'search_item' => __('Search service','dc_service'),

		'not_found' => __('No service found..','dc_service'),

		'not_found_in_trash' => __('No service found in Trash.','dc_service'),

		'menu_name' => 'dich-vu'

	

	);

	$args = array(

		'labels' => $servicelabels,
		'hierarchical' => true,
		'description' => 'Manages service',
		'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
		'menu_icon' => 'dashicons-admin-generic',		
		'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite'  => array( 'slug' => 'dich-vu' ),
        'capability_type' => 'post',
		'supports' => array( 'title','editor','thumbnail','excerpt','comments','custom-fields'),
	);
		register_post_type ('service',$args);
	}
add_action ('init','dc_service_type');

function dc_service_taxonomy () {
	$taxonomylabels = array(

	'name' => __('Category Service','dc_service'),

	'singular_name' => __('Category Service','dc_service'),

	'search_items' => __('Search Category Service','dc_service'),

	'all_items' => __('All Category Service','dc_service'),

	'edit_item' => __('Edit Category Service','dc_service'),

	'add_new_item' => __('Add new Category Service','dc_service'),

	'menu_name' => __('Category Service','dc_service'),

	);

	$args = array(

	'labels' => $taxonomylabels,

	'hierarchical' => true,

);
	register_taxonomy('category_service','service',$args);
}
add_action ('init','dc_service_taxonomy',0);

?>

