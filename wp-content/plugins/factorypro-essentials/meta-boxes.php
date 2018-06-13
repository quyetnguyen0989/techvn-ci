<?php
/**
 * Register meta boxes
 *
 * @since 1.0
 *
 * @param array $meta_boxes
 *
 * @return array
 */



function fitness_register_meta_boxes( $meta_boxes ) {







	$prefix = '_factorypro_';



	// Post format



	$meta_boxes[] = array(



		'id'       => 'format_detail',



		'title'    => __( 'Format Details', 'fitness' ),



		'pages'    => array( 'post' ),



		'context'  => 'normal',



		'priority' => 'high',



		'autosave' => true,



		'fields'   => array(



			array(



				'name'             => __( 'Image', 'fitness' ),



				'id'               => $prefix . 'image',



				'type'             => 'image_advanced',



				'class'            => 'image',



				'max_file_uploads' => 1,



			),



			array(



				'name'  => __( 'Gallery', 'fitness' ),



				'id'    => $prefix . 'images',



				'type'  => 'image_advanced',



				'class' => 'gallery',



			),



			array(



				'name'  => __( 'Quote', 'fitness' ),



				'id'    => $prefix . 'quote',



				'type'  => 'textarea',



				'cols'  => 20,



				'rows'  => 2,



				'class' => 'quote',



			),



			array(



				'name'  => __( 'Author', 'fitness' ),



				'id'    => $prefix . 'quote_author',



				'type'  => 'text',



				'class' => 'quote',



			),



			array(



				'name'  => __( 'Audio', 'fitness' ),



				'id'    => $prefix . 'link_audio',



				'type'  => 'textarea',



				'cols'  => 20,



				'rows'  => 2,



				'class' => 'audio',



				'desc' => 'Ex: https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/139083759',



			),



			array(



				'name'  => __( 'Video', 'fitness' ),



				'id'    => $prefix . 'link_video',



				'type'  => 'textarea',



				'cols'  => 20,



				'rows'  => 2,



				'class' => 'video',



				'desc' => 'Example: <b>http://www.youtube.com/embed/0ecv0bT9DEo</b> or <b>http://player.vimeo.com/video/47355798</b>',



			),			



		),



	);	


	$meta_boxes[] = array(

		'id'       => 'Page_detail',

		'title'    => __( 'Page Details', 'fitness' ),

		'pages'    => array( 'page'),

		'context'  => 'normal',

		'priority' => 'high',

		'autosave' => true,

		'fields'   => array(
			array(
				'name'             => __( 'Background Image Page Sub-header', 'archi' ),
				'id'               => $prefix . 'subheader_image',
				'type'             => 'image_advanced',			
				'max_file_uploads' => 1,
			),	

			array(

				'name'  => __( 'Subtitle Header', 'fitness' ),

				'id'    => $prefix . 'sub_title',

				'type'  => 'textarea',

			),

		),

	);

	$meta_boxes[] = array(

		'id'       => 'testimonial_job',

		'title'    => __( 'Job Of Person', 'fitness' ),

		'pages'    => array( 'testimonial'),

		'context'  => 'normal',

		'priority' => 'high',

		'autosave' => true,

		'fields'   => array(

			array(

				'name'  => __( 'Job', 'fitness' ),

				'id'    => $prefix . 'job',

				'type'  => 'text',

			),

		),

	);
	

	return $meta_boxes;



}



add_filter( 'rwmb_meta_boxes', 'fitness_register_meta_boxes' );







/**
 * Enqueue scripts for admin
 *
 * @since  1.0
 */



function fitness_admin_enqueue_scripts( $hook ) {



	// Detect to load un-minify scripts when WP_DEBUG is enable



	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';







	if ( in_array( $hook, array( 'post.php', 'post-new.php' ) ) ) {



		wp_enqueue_script( 'fitness-backend-js', get_template_directory_uri()."/js/admin.js", array( 'jquery' ), '1.0', true );



	}



}







add_action( 'admin_enqueue_scripts', 'fitness_admin_enqueue_scripts' );



