<?php
			
/**
 * electrician_Social_Info_Widget
 * create social info widget
 *
 * @package 	electrician
 * @author   	Deepak Chandra
 */

class electrician_Social_Info_Widget extends WP_Widget {
	function __construct() {
			parent::__construct('social_widget', __('Social Network', 'electrician'), array( 'description' => __( 'Social Network Widget electrician', 'electrician' ), ) 
			);			
			}
	
	
	// display the widget in the theme
	function widget( $args, $instance ) {
		extract($args);
		
		$title        = apply_filters('widget_title', $instance['title']);
	  	$twitter      = strip_tags($instance['twitter']);
	  	$facebook     = strip_tags($instance['facebook']);
	  	$google_plus  = strip_tags($instance['google_plus']);
		$youtube      = strip_tags($instance['youtube']);
		$vimeo        = strip_tags($instance['vimeo']);
		$dribbble     = strip_tags($instance['dribbble']);
		$behance      = strip_tags($instance['behance']);
		$flickr       = strip_tags($instance['flickr']);
		$tumblr       = strip_tags($instance['tumblr']);
		$pinterest    = strip_tags($instance['pinterest']);
		$linkedin     = strip_tags($instance['linkedin']);
		$instagram    = strip_tags($instance['instagram']);
		$github       = strip_tags($instance['github']);
		$dropbox      = strip_tags($instance['dropbox']);
		$foursquare   = strip_tags($instance['foursquare']);
	
		echo $args['before_widget'];
		if ( ! empty( $title ) )
	    echo $args['before_title'] . $title . $args['after_title']; 
				?>		
				<div class="as-social-info-widget-wrapper">
                    <ul class="as-social-info-widget social">
                        <?php 
						if($twitter) echo '<li><a class="hvr-radial-out" href="'.esc_url($twitter).'" title="Twitter"><span class="fa fa-twitter"></span></a></li>'; 
						if($facebook) echo '<li><a class="hvr-radial-out" href="'.esc_url($facebook).'" title="Facebook"><span class="fa fa-facebook"></span></a></li>';
						if($google_plus) echo '<li><a class="hvr-radial-out" href="'.esc_url($google_plus).'" title="Google Plus"><span class="fa fa-google"></span></a></li>';
						if($youtube) echo '<li><a class="hvr-radial-out" href="'.esc_url($youtube).'" title="Youtube"><span class="fa fa-youtube"></span></a></li>';
						if($vimeo) echo '<li><a class="hvr-radial-out" href="'.esc_url($vimeo).'" title="Vimeo"><span class="fa fa-vimeo"></span></a></li>';
						if($dribbble) echo '<li><a class="hvr-radial-out" href="'.esc_url($dribbble).'" title="Dribbble"><span class="fa fa-dribbble""></span></a></li>';
						if($behance) echo '<li><a class="hvr-radial-out" href="'.esc_url($behance).'" title="Behance"><span class="fa fa-behance"></span></a></li>';
						if($flickr) echo '<li><a class="hvr-radial-out" href="'.esc_url($flickr).'" title="Flickr"><span class="fa fa-flickr"></span></a></li>';
						if($tumblr) echo '<li><a class="hvr-radial-out" href="'.esc_url($tumblr).'" title="Tumblr"><span class="fa fa-tumblr"></span></a></li>';
						if($pinterest) echo '<li><a class="hvr-radial-out" href="'.esc_url($pinterest).'" title="Pinterest"><span class="fa fa-pinterest"></span></a></li>';
						if($linkedin) echo '<li><a class="hvr-radial-out" href="'.esc_url($linkedin).'" title="Linkedin"><span class="fa fa-linkedin"></span></a></li>';
						if($instagram) echo '<li><a class="hvr-radial-out" href="'.esc_url($instagram).'" title="Instagram"><span class="fa fa-instagram"></span></a></li>';
						if($github) echo '<li><a class="hvr-radial-out" href="'.esc_url($github).'" title="Github"><span class="fa fa-github"></span></a></li>';
						if($dropbox) echo '<li><a class="hvr-radial-out" href="'.esc_url($dropbox).'" title="Dropbox"><span class="fa fa-dropbox"></span></a></li>';
						if($foursquare) echo '<li><a class="hvr-radial-out" href="'.esc_url($foursquare).'" title="Foursquare"><span class="fa fa-foursquare"></span></a></li>';
						?>
                    </ul>
                </div>
			<?php
			
		echo $args['after_widget'];
		
		//end
	}
	
	// update the widget when new options have been entered
	function update( $new_instance, $old_instance ) {
		
		$instance                     = $old_instance;
		$instance['title']            = strip_tags($new_instance['title']);
		$instance['twitter']          = strip_tags($new_instance['twitter']);
	  	$instance['facebook']         = strip_tags($new_instance['facebook']);
	  	$instance['google_plus']      = strip_tags($new_instance['google_plus']);
		$instance['youtube']          = strip_tags($new_instance['youtube']);
		$instance['vimeo']            = strip_tags($new_instance['vimeo']);
		$instance['dribbble']         = strip_tags($new_instance['dribbble']);
		$instance['behance']          = strip_tags($new_instance['behance']);
		$instance['flickr']           = strip_tags($new_instance['flickr']);
		$instance['tumblr']           = strip_tags($new_instance['tumblr']);
		$instance['pinterest']        = strip_tags($new_instance['pinterest']);
		$instance['linkedin']         = strip_tags($new_instance['linkedin']);
		$instance['instagram']        = strip_tags($new_instance['instagram']);
		$instance['github']           = strip_tags($new_instance['github']);
		$instance['dropbox']          = strip_tags($new_instance['dropbox']);
		$instance['foursquare']       = strip_tags($new_instance['foursquare']);
		return $instance;
	}
	
	// print the widget option form on the widget management screen
	function form( $instance ) {
		// combine provided fields with defaults
		$instance = wp_parse_args( 
			(array) $instance, 
			array( 
				'title'         => 'Contact Info', 
				'twitter'       => '', 
				'facebook'      => '', 
				'google_plus'   => '', 
				'youtube'       => '', 
				'vimeo'         => '',
				'dribbble'      => '', 
				'behance'       => '', 
				'flickr'        => '', 
				'tumblr'        => '', 
				'pinterest'     => '',
				'linkedin'      => '', 
				'instagram'     => '', 
				'github'        => '', 
				'dropbox'       => '', 
				'foursquare'    => '',
			) 
		);
		$title 		  = strip_tags($instance['title']);
		$twitter      = strip_tags($instance['twitter']);
	  	$facebook     = strip_tags($instance['facebook']);
	  	$google_plus  = strip_tags($instance['google_plus']);
		$youtube      = strip_tags($instance['youtube']);
		$vimeo        = strip_tags($instance['vimeo']);
		$dribbble     = strip_tags($instance['dribbble']);
		$behance      = strip_tags($instance['behance']);
		$flickr       = strip_tags($instance['flickr']);
		$tumblr       = strip_tags($instance['tumblr']);
		$pinterest    = strip_tags($instance['pinterest']);
		$linkedin     = strip_tags($instance['linkedin']);
		$instagram    = strip_tags($instance['instagram']);
		$github       = strip_tags($instance['github']);
		$dropbox      = strip_tags($instance['dropbox']);
		$foursquare   = strip_tags($instance['foursquare']);
		
		// print the form fields
	?>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>"><?php _e('Title:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('twitter') ); ?>"><?php _e('Twitter URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('twitter') ); ?>" name="<?php echo esc_attr( $this->get_field_name('twitter') ); ?>" type="text" value="<?php echo esc_attr($twitter); ?>" />
	</p>
    <p>
		<label for="<?php echo esc_attr( $this->get_field_id('facebook') ); ?>"><?php _e('Facebook URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('facebook') ); ?>" name="<?php echo esc_attr( $this->get_field_name('facebook') ); ?>" type="text" value="<?php echo esc_attr($facebook); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('google_plus') ); ?>"><?php _e('Google Plus URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('google_plus') ); ?>" name="<?php echo esc_attr( $this->get_field_name('google_plus') ); ?>" type="text" value="<?php echo esc_attr($google_plus); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('youtube') ); ?>"><?php _e('Youtube URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('youtube') ); ?>" name="<?php echo esc_attr( $this->get_field_name('youtube') ); ?>" type="text" value="<?php echo esc_attr($youtube); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('vimeo') ); ?>"><?php _e('Vimeo URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('vimeo') ); ?>" name="<?php echo esc_attr( $this->get_field_name('vimeo') ); ?>" type="text" value="<?php echo esc_attr($vimeo); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('dribbble') ); ?>"><?php _e('Dribbble URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('dribbble') ); ?>" name="<?php echo esc_attr( $this->get_field_name('dribbble') ); ?>" type="text" value="<?php echo esc_attr($dribbble); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('behance') ); ?>"><?php _e('Behance URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('behance') ); ?>" name="<?php echo esc_attr( $this->get_field_name('behance') ); ?>" type="text" value="<?php echo esc_attr($behance); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('flickr') ); ?>"><?php _e('Flickr URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('flickr') ); ?>" name="<?php echo esc_attr( $this->get_field_name('flickr') ); ?>" type="text" value="<?php echo esc_attr($flickr); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('tumblr') ); ?>"><?php _e('Tumblr URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('tumblr') ); ?>" name="<?php echo esc_attr( $this->get_field_name('tumblr') ); ?>" type="text" value="<?php echo esc_attr($tumblr); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('pinterest') ); ?>"><?php _e('Pinterest URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('pinterest') ); ?>" name="<?php echo esc_attr( $this->get_field_name('pinterest') ); ?>" type="text" value="<?php echo esc_attr($pinterest); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('linkedin') ); ?>"><?php _e('Linkedin URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('linkedin') ); ?>" name="<?php echo esc_attr( $this->get_field_name('linkedin') ); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('instagram') ); ?>"><?php _e('Instagram URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('instagram') ); ?>" name="<?php echo esc_attr( $this->get_field_name('instagram') ); ?>" type="text" value="<?php echo esc_attr($instagram); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('github') ); ?>"><?php _e('Github URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('github') ); ?>" name="<?php echo esc_attr( $this->get_field_name('github') ); ?>" type="text" value="<?php echo esc_attr($github); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('dropbox') ); ?>"><?php _e('Dropbox URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('dropbox')); ?>" name="<?php echo esc_attr( $this->get_field_name('dropbox') ); ?>" type="text" value="<?php echo esc_attr($dropbox); ?>" />
	</p>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id('foursquare') ); ?>"><?php _e('Foursquare URL:','electrician'); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('foursquare')); ?>" name="<?php echo esc_attr( $this->get_field_name('foursquare') ); ?>" type="text" value="<?php echo esc_attr($foursquare); ?>" />
	</p>    
   	
	<?php
	}
} 

/*-----------------------------------------------------------------------------------*/
/* Setting Contact Form */
/*-----------------------------------------------------------------------------------*/
class electrician_Contact_Info_Widget extends WP_Widget {
		function __construct() {
			parent::__construct('contact_info', __('Contact Form', 'electrician'), array( 'description' => __( 'Displaying your contact information', 'electrician' ), ) 
			);			
			}
	
	// display the widget in the theme
	function widget( $args, $instance ) {
		extract($args);
		
		$title 		= apply_filters('widget_title', $instance['title']);
	  	$mail 		= strip_tags($instance['mail']);
		$phone 		= strip_tags($instance['phone']);
		$address 	= strip_tags($instance['address']);
		$website 	= strip_tags($instance['website']);
		
		echo $args['before_widget'];
		if ( ! empty( $title ) )
	    echo $args['before_title'] . $title . $args['after_title']; 
				 ?>		
				<div class="contact-info-widget-wrapper">
                    <ul class="contact-info">
                        <?php 
						if($address) echo '<li><i class="fa fa-map-marker"></i><span>'.esc_html($address).'</span><div class="clearfix"></div></li>';
						if($phone) echo '<li><i class="fa fa-phone"></i>'.esc_html($phone).'<div class="clearfix"></div></li>';
						if($mail) echo '<li><i class="fa fa-envelope-o"></i>'.is_email($mail).'<div class="clearfix"></div></li>';
						if($website) echo '<li><a href="'.esc_textarea($website).'"><i class="fa fa-globe"></i>'.esc_textarea($website).'</a><div class="clearfix"></div></li>';
						?>
                    </ul>
                </div>
			<?php
			
		echo $args['after_widget'];
		
		//end
	}
	
	// update the widget when new options have been entered
	function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		$instance['title'] 		= strip_tags($new_instance['title']);
		$instance['mail'] 		= strip_tags($new_instance['mail']);
		$instance['phone'] 		= strip_tags($new_instance['phone']);
		$instance['address'] 	= strip_tags($new_instance['address']);
		$instance['website'] 	= strip_tags($new_instance['website']);
		return $instance;
	}
	
	// print the widget option form on the widget management screen
	function form( $instance ) {
		// combine provided fields with defaults
		$instance = wp_parse_args( (array) $instance, array( 'title' => 'Contact Info', 'mail'=> '', 'phone' => '', 'address' => '', 'website' => '' ) );
		$mail 		= strip_tags($instance['mail']);
		$phone 		= strip_tags($instance['phone']);
		$address 	= strip_tags($instance['address']);
		$website 	= strip_tags($instance['website']);
		$title 		= strip_tags($instance['title']);
		// print the form fields
	?>
	<p><label for="<?php echo esc_attr ($this->get_field_id('title') ); ?>">
	<?php _e('Title:','electrician'); ?></label>
	<input class="widefat" id="<?php echo esc_attr ($this->get_field_id('title') ); ?>" name="<?php echo esc_attr ($this->get_field_name('title') ); ?>" type="text" value="<?php echo
		esc_attr($title); ?>" /></p>
	
       
       	<p><label for="<?php echo esc_attr ($this->get_field_id('address') ); ?>">
	<?php _e('Address:','electrician'); ?></label>
	<input class="widefat" id="<?php echo esc_attr ($this->get_field_id('address') ); ?>" name="<?php echo esc_attr ($this->get_field_name('address') ); ?>" type="text" value="<?php echo
		esc_attr($address); ?>" /></p>
		    
  	<p><label for="<?php echo esc_attr ($this->get_field_id('phone') ); ?>">
	<?php _e('Phone:','electrician'); ?></label>
	<input class="widefat" id="<?php echo esc_attr ($this->get_field_id('phone') ); ?>" name="<?php echo esc_attr ($this->get_field_name('phone') ); ?>" type="text" value="<?php echo
		esc_attr($phone); ?>" /></p>
        
		   	<p><label for="<?php echo esc_attr ($this->get_field_id('mail') ); ?>">
	<?php _e('Mail:','electrician'); ?></label>
	<input class="widefat" id="<?php echo esc_attr ($this->get_field_id('mail') ); ?>" name="<?php echo esc_attr ($this->get_field_name('mail') ); ?>" type="text" value="<?php echo
		esc_attr($mail); ?>" /></p>
   
   	<p><label for="<?php echo esc_attr ($this->get_field_id('website') ); ?>">
	<?php _e('Website:','electrician'); ?></label>
	<textarea class="widefat" id="<?php echo esc_attr ($this->get_field_id('website') ); ?>" name="<?php echo esc_attr ($this->get_field_name('website') ); ?>"><?php echo
		esc_attr($website); ?></textarea></p>
	<?php
	}
}

/*-----------------------------------------------------------------------------------*/
/* UPLOAD IMAGE WIDGET */
/*-----------------------------------------------------------------------------------*/


class electrician_Widget_Image extends WP_Widget {

	function __construct( $id_base = false, $name = false, $widget_options = array(), $control_options = array() ) {
		$id_base = ( $id_base ) ? $id_base : 'blazersix-widget-image';
		$name = ( $name ) ? $name : __( 'electrician Image', 'blazersix-widget-image-i18n' );
		
		$widget_options = wp_parse_args( $widget_options, array(
			'classname'   => 'widget_image',
			'description' => __( 'An image from the media library', 'blazersix-widget-image-i18n' )
		) );
		
		$control_options = wp_parse_args( $control_options, array( 'width' => 278 ) );

		//load js for admin
		add_action( 'sidebar_admin_setup', array( $this, 'admin_setup' ) );
		

		parent::__construct( $id_base, $name, $widget_options, $control_options );


	}
	
	// Function to upload
	function admin_setup(){

		wp_enqueue_media();
		wp_register_script('tpw-admin-js', get_template_directory_uri()  .'/js/upload-img/tpw_admin.js', array( 'jquery', 'media-upload', 'media-views' ) );
		wp_enqueue_script('tpw-admin-js');

	}
	/**
	 * Default widget front end display method.
	 * 
	 */

	public function widget( $args, $instance ) {
		// Return cached widget if it exists.
		// Filter and sanitize instance data

		extract($args);

		$title = apply_filters( 'widget_title', $instance['title'] );
	    // before and after widget arguments are defined by themes
	    echo $args['before_widget'];
	    if ( ! empty( $title ) )
	    echo $args['before_title'] . $title . $args['after_title'];


		$image = $instance['img_url'];
		$link_to_web = $instance['link_to_web'];
		$img_title = $instance['img_title'];

		if($link_to_web != '')
		{
			?>
				<a href="<?php echo esc_url( $link_to_web );?>" target="_blank">
					<img class="positioned" src='<?php echo esc_url($image); ?>' title="<?php echo esc_attr( $img_title ); ?>" alt="<?php echo esc_attr( $img_title ); ?>" />
				</a>
			<?php
		}
		else{
			?>			
			<img class="positioned" src='<?php echo esc_url($image); ?>' title="<?php echo esc_attr( $img_title );?>" alt="<?php echo esc_attr( $img_title ); ?>" />
			<?php
		}
		

	    echo $args['after_widget'];
	}
	
	/**
	* 3. Show widget in admin dashboard
	*/
	public function form( $instance ) {

		$title = isset( $instance['title'] ) ? $instance['title'] : 'Default Title';
	    $img_url = isset( $instance['img_url'] ) ? $instance['img_url'] : '';
	    $img_title = isset( $instance['img_title'] ) ? $instance['img_title'] : '';
	    $link_to_web = isset( $instance['link_to_web'] ) ? $instance['link_to_web'] : '';


	    // widget admin form
	    ?>
	    <p class="widget-upload-wrap">

	      <div class="widget_input">
				<button id="title_image_button" class="button" onclick="image_button_click('Choose Title Image','Select Image','image','title_image_preview_new','<?php echo esc_attr( $this->get_field_id( 'img_url' ) );  ?>',this,event);">Select Image</button>			
			</div>

				<div class="title_image_preview_new" id="title_image_preview_new" name="title_image_preview" >
					<?php 
						if($img_url != ''){
							echo '<img src="'. esc_url( $img_url ) .'" style="width:100%;margin-top:15px">';
						}
					?>
				</div>

	    </p>
	    <p>
	      <label for="<?php echo esc_attr( $this->get_field_id( 'img_url' ) ); ?>"><?php _e( 'Image url:', 'electrician' ) ?></label>
	      <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'img_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'img_url' ) ); ?>" value="<?php echo esc_attr( $img_url ); ?>">
	    </p>
	    <p>
	      <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'electrician' ) ?></label>
	      <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>">
	    </p>
	    
	    
	    <p>
	      <label for="<?php echo esc_attr( $this->get_field_id( 'img_title' ) ); ?>"><?php _e( 'Image title:', 'electrician' ) ?></label>
	      <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'img_title' ) ?>" name="<?php echo esc_attr( $this->get_field_name( 'img_title' ) ); ?>" value="<?php echo esc_attr( $img_title ); ?>">
	    </p>
	    <p>
	      <label for="<?php echo esc_attr( $this->get_field_id( 'link_to_web' ) ); ?>"><?php _e( 'Link to website:', 'electrician' ) ?></label>
	      <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link_to_web' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link_to_web' ) ); ?>" value="<?php echo esc_attr( $link_to_web ); ?>">
	    </p>
	    <?php

	}
  	/**
	* 4. Save All Infomation
	*/
	public function update( $new_instance, $old_instance ) {
		$instance = array();
	    $instance['title'] = strip_tags($new_instance['title']);
	    $instance['img_url'] = strip_tags($new_instance['img_url']);
	    $instance['img_title'] = strip_tags($new_instance['img_title']);
	    $instance['link_to_web'] = strip_tags($new_instance['link_to_web']);
	    return $instance;
	}

}


function wpb_recentposts_widget() {
		register_widget( 'electrician_Contact_Info_Widget' );
		register_widget( 'electrician_Social_Info_Widget' );
		register_widget( 'electrician_Widget_Image' );
}



add_action( 'widgets_init', 'wpb_recentposts_widget' );
		
