<?php

function factorypro_global(){
    global $factorypro_option;
	return $factorypro_option;
}




//Custom fields:
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/aq_resizer.php';
//Get Categories:

function factorypro_get_categories($arg = false, $by_slug = false, $show_all = true)
{
	global $wp_taxonomies;
	if( ! empty($arg['taxonomy']) && ! isset($wp_taxonomies[$arg['taxonomy']]))
	{
		
	}
	$categories = get_terms( 'category', 'orderby=count&hide_empty=0' );
	//$categories = get_terms(post_tag( $arg, 'taxonomy', 'category' ), $arg);
	$cats = array();
	if( $show_all ) $cats[] = esc_html__( 'All Categories', 'factorypro' );
	
	if( !is_wp_error( $categories ) ) {
	foreach($categories as $category)
	{
		if( $by_slug ) $cats[$category->slug] = $category->name;
		else $cats[$category->term_id] = $category->name;
	}
	}
	return $cats;
}

add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $jquery_dependencies = $scripts->registered['jquery']->deps;
        $scripts->registered['jquery']->deps = array_diff( $jquery_dependencies, array( 'jquery-migrate' ) );
    }
} );

//Theme Set up:
function factorypro_theme_setup() {

    if ( ! isset( $content_width ) ) {
      $content_width = 900;
    }

    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
  	load_theme_textdomain( 'factorypro', get_template_directory() . '/languages' );
  	
  	add_theme_support( 'custom-header' ); 

  	add_theme_support( 'custom-background' );
  	
  	add_editor_style( get_stylesheet_uri() );

    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments

    // to output valid HTML5.
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    //Post formats
    add_theme_support( 'post-formats', array(
        'audio',  'gallery', 'image', 'video',
    ) );
	
	  //Tags
	  add_theme_support( 'title-tag' );

    // This theme uses wp_nav_menu() in one location.

  	register_nav_menus( array(    
      'primary'   => esc_html__('Main Menu', 'factorypro'),    
  	) );

}

add_action( 'after_setup_theme', 'factorypro_theme_setup' );


function factorypro_load_custom_wp_admin_style() {
        wp_enqueue_style( 'custom_wp_admin_css', get_template_directory_uri().'/framework/factorypro-admin.css', false, '1.0.0');
}
add_action( 'admin_enqueue_scripts', 'factorypro_load_custom_wp_admin_style' );

function factorypro_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $open_sans = _x( 'on', 'Open Sans font: on or off', 'factorypro' );
 
    if ( 'off' !== $open_sans ) {
        $font_families = array();
 
        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:400,600,700,800,300';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}

add_filter( 'loop_shop_columns', 'wc_loop_shop_columns', 1, 10 );
function wc_loop_shop_columns( $number_columns ) {
return 3;
}

function factorypro_theme_scripts_styles() {

	$factorypro_option = factorypro_global(); 

	$protocol = is_ssl() ? 'https' : 'http';	

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'fonts', factorypro_fonts_url(), array(), null );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'owl-car', get_template_directory_uri().'/css/owl.carousel.css');
	wp_enqueue_style( 'stroke-gap-font', get_template_directory_uri().'/css/owl.theme.css');
	wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/css/strokegap.css');
	wp_enqueue_style( 'nivo-lightbox', get_template_directory_uri().'/css/nivo-lightbox.css');
	wp_enqueue_style( 'factorypro-demo-css', get_template_directory_uri().'/css/demo.css');
	wp_enqueue_style( 'factorypro-custom-css', get_template_directory_uri().'/css/custom.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style( 'woocommerce', get_template_directory_uri().'/css/woocommerce.css');
	wp_enqueue_style( '7stroke', get_template_directory_uri().'/7stroke/css/pe-icon-7-stroke.css');
	wp_enqueue_style( 'factorypro-style', get_stylesheet_uri(), array(), 'true' );
	
	
	wp_enqueue_script("disenador-magnific-popup", get_template_directory_uri()."/js/jquery.magnific-popup.min.js",array(),false,true);	
	wp_enqueue_script("disenador-isotope", get_template_directory_uri()."/js/isotope.pkgd.min.js",array(),false,true);	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script("modernizer", get_template_directory_uri()."/js/modernizer.js",array(),false,true);
	wp_enqueue_script("fitvids-js", get_template_directory_uri()."/js/jquery.fitvids.js",array(),false,true);
	
	wp_enqueue_script("wow-js", get_template_directory_uri()."/js/wow.min.js",array(),false,true);
	
	wp_enqueue_script("imagesloaded-pkgd", get_template_directory_uri()."/js/imagesloaded.pkgd.min.js",array(),false,true);
	wp_enqueue_script("counter", get_template_directory_uri()."/js/jquery.countTo.js",array(),false,true);
	wp_enqueue_script("easing-js", get_template_directory_uri()."/js/jquery.easing.min.js",array(),false,true);
	wp_enqueue_script("mobile-events", get_template_directory_uri()."/js/jquery.mobile-events.min.js",array(),false,true);
	wp_enqueue_script("owl-carousel", get_template_directory_uri()."/js/owl.carousel.min.js",array(),false,false);
	wp_enqueue_script("slider-js", get_template_directory_uri()."/js/jquery.slider.js",array(),false,true);
	wp_enqueue_script("inview-js", get_template_directory_uri()."/js/jquery.inview.min.js",array(),false,true);
	wp_enqueue_script("malihu-js", get_template_directory_uri()."/js/jquery.malihu.PageScroll2id.js",array(),false,true);
	wp_enqueue_script("nivo-lightbox", get_template_directory_uri()."/js/nivo-lightbox.min.js",array(),false,true);
	wp_enqueue_script("factorypro-controller", get_template_directory_uri()."/js/controller.js",array(),false,true);		

}
add_action( 'wp_enqueue_scripts', 'factorypro_theme_scripts_styles');

require_once(get_template_directory() . '/framework/color.php');

if(!function_exists('factorypro_custom_frontend_style')){
	function factorypro_custom_frontend_style(){
		$factorypro_option = factorypro_global(); 
		echo '<style type="text/css">'.$factorypro_option['custom-css'].'</style>';
	}
}

add_action('wp_head', 'factorypro_custom_frontend_style');

/**** WooCommerce ****/

if (class_exists('Woocommerce')) {
    add_theme_support( 'woocommerce' );    
	function woocommerce_get_sidebar() { 
    	echo '<div class="sidebar">';
	    dynamic_sidebar( 'shop-sidebar' );
	    echo '</div>';
	}; 
    add_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 ); 
}


// Widget Sidebar
function factorypro_widgets_init() {
		
	register_sidebar( array(

        'name'          => esc_html__( 'Primary Sidebar', 'factorypro' ),

        'id'            => 'sidebar-1',        

		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'factorypro' ),        

		'before_widget' => '<div id="%1$s" class="widget %2$s">',        

		'after_widget'  => '</div>',        

		'before_title'  => '<h2>',        

		'after_title'   => '</h2>'

    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Shop Sidebar', 'factorypro' ),
        'id'            => 'shop-sidebar',        
        'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'factorypro' ),        
        'before_widget' => '<div id="%1$s" class="widget %2$s">',        
        'after_widget'  => '</div>',        
        'before_title'  => '<h2>',        
        'after_title'   => '</h2>'
    ) );
     register_sidebar( array(
		'name'          => esc_html__( 'Footer One Widget Area', 'factorypro' ),
		'id'            => 'footer-area-1',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'factorypro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two Widget Area', 'factorypro' ),
		'id'            => 'footer-area-2',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'factorypro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three Widget Area', 'factorypro' ),
		'id'            => 'footer-area-3',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'factorypro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Fourth Widget Area', 'factorypro' ),
		'id'            => 'footer-area-4',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'factorypro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'factorypro_widgets_init' );


function factorypro_excerpt() {
  $factorypro_option = factorypro_global(); 
  if(isset($factorypro_option['blog_excerpt'])){
    $limit = $factorypro_option['blog_excerpt'];
  }else{
    $limit = 15;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function factorypro_widget_excerpt() {
  $factorypro_option = factorypro_global(); 
  if(isset($factorypro_option['blog_widget_excerpt'])){
    $limit = $factorypro_option['blog_widget_excerpt'];
  }else{
    $limit = 7;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
//pagination
function factorypro_pagination($prev = '<i class="fa fa-angle-double-left"></i>', $next = '<i class="fa fa-angle-double-right"></i>', $pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }

    $pagination = array(
		'base' 			=> str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
		'format' 		=> '',
		'current' 		=> max( 1, get_query_var('paged') ),
		'total' 		=> $pages,
		'prev_text' => $prev,
		'next_text' => $next,		
		'type'			=> 'list',
		'end_size'		=> 3,
		'mid_size'		=> 3
);
    $return =  paginate_links( $pagination );
	echo str_replace( "<ul class='page-numbers'>", '', $return );
}



function factorypro_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="search-form" action="' . home_url( '/' ) . '" >  
    	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . esc_html__('type to search and hit enter','factorypro') . '" />
    	<button class="btn read-more" type="submit"><i class="fa fa-search"></i></button>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'factorypro_search_form' );

/* Custom comment List: */
function factorypro_theme_comment($comment, $args, $depth) {    
   $GLOBALS['comment'] = $comment; 

			$tag = 'li';

			$add_below = 'div-comment';

		?>

		<<?php echo esc_attr($tag); ?> <?php comment_class ( empty ( $args ['has_children'] ) ? 'single_comment' : 'reply_comment single_comment' )?> id="comment-<?php comment_ID() ?>">

    <div id="div-comment-<?php comment_ID() ?>" class="comment">
        <div class="comment-body" id="comment-<?php comment_ID(); ?>">
            <div class="comment-author vcard">
                <?php echo get_avatar($comment,$size='60' ); ?>
                <h6><?php printf(esc_html__('%s','factorypro'), get_comment_author()) ?></h6>
                <div class="comment-time"><a href=""><?php echo date(get_option( 'date_format' ), strtotime($comment->comment_date)) ?></a></div>
                
            </div>
            <div class="comment-meta commentmetadata">
                <?php if ($comment->comment_approved == '0'){ ?>
                     <p><em><?php esc_html_e('Your comment is awaiting moderation.','factorypro') ?></em></p>
                <?php }else{ ?>
                    <?php comment_text() ?>
                <?php } ?>
                <div class="reply">
                    <span class="comment-reply-link"><?php comment_reply_link(array_merge( $args, array('add_below' => $add_below,'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
                </div>
            </div>
        </div>
    </div>
   
<?php
}



//Code Visual Compurso.
require_once get_template_directory() . '/vc_shortcode.php';
//if(class_exists('WPBakeryVisualComposerSetup')){
function factorypro_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {

        $class_string = preg_replace('/vc_col-xs-(\d{1,2})/', 'col-xs-$1', $class_string);

        $class_string = preg_replace('/vc_col-sm-(\d{1,2})/', 'col-md-$1', $class_string);

        $class_string = preg_replace('/vc_col-md-(\d{1,2})/', 'col-sm-$1', $class_string);

        $class_string = preg_replace('/vc_col-lg-(\d{1,2})/', 'col-lg-$1', $class_string);

    }

    return $class_string;

}
add_filter('vc_shortcodes_css_class', 'factorypro_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 


// Add new Param in Row
if(function_exists('vc_add_param')){
vc_add_param('vc_row',array(

                              "type" => "dropdown",

                              "heading" => esc_html__('Fullwidth', 'factorypro'),

                              "param_name" => "fullwidth",

                              "value" => array(   

                                                esc_html__('No', 'factorypro') => 'no',  

                                                esc_html__('Yes', 'factorypro') => 'yes',                                                                                

                                              ),

                              "description" => esc_html__("Select Fullwidth or not, Default: No fullwidth", "factorypro"),      

                            )
                            );
                     
                    vc_add_param('vc_row',array(
						   "type" => "dropdown",
						   "class" => "",
						   "heading" =>  esc_html__('Background position', 'factorypro'),
						   "param_name" => "background_position",
						   "value" => array(
						   '' => 'None',
						   esc_html__('center center', 'factorypro') => 'center center',
						   esc_html__('center top', 'factorypro') => 'center top',
						   esc_html__('center bottom', 'factorypro') => 'center bottom',
						   esc_html__('left bottom', 'factorypro') => 'left bottom',
						   esc_html__('right bottom', 'factorypro') => 'right bottom',
						   esc_html__('right top', 'factorypro') => 'right top',
						   esc_html__('left top', 'factorypro') => 'left bottom',
						   ),
						   "description" => esc_html__("Select Position Bottom Or Left Or Top Or RIght or not, Default: No Position", "factorypro"),   
						   )
						   );

	

// Add new Param in Column	
vc_add_param('vc_column',array(

                              "type" => "dropdown",

                              "heading" => esc_html__('Animate', 'factorypro'),

                              "param_name" => "animate",

                              "value" => array(   

                                                esc_html__('None', 'factorypro') => 'none', 

                                                esc_html__('Fade In Up', 'factorypro') => 'fadeinup', 

                                                esc_html__('Fade In Down', 'factorypro') => 'fadeindown', 

                                                esc_html__('Fade In', 'factorypro') => 'fadein', 

                                                esc_html__('Fade In Left', 'factorypro') => 'fadeinleft',  

                                                esc_html__('Fade In Right', 'factorypro') => 'fadeinright',



                                              ),

                              "description" => esc_html__("Select Animate , Default: None", "factorypro"),      

                            ) 

    );


	

vc_remove_param( "vc_row", "parallax" );
vc_remove_param( "vc_row", "parallax_image" );
vc_remove_param( "vc_row", "parallax_speed" );
vc_remove_param( "vc_row", "full_width" );
vc_remove_param( "vc_row", "full_height" );
vc_remove_param( "vc_row", "video_bg" );
vc_remove_param( "vc_row", "video_bg_parallax" );
vc_remove_param( "vc_row", "content_placement" );
vc_remove_param( "vc_row", "video_bg_url" );
}

require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'factorypro_theme_register_required_plugins' );
function factorypro_theme_register_required_plugins() {

    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */

    $plugins = array(        
        // Plugin Download the http://wordpress.org
        array(
            'name'               => 'Meta Box',
            'slug'               => 'meta-box',
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
        array(
            'name'      => 'Redux Framework',
            'slug'      => 'redux-framework',
            'required'           => true,
			'force_activation'   => false,
            'force_deactivation' => false,
        ),		
        // This is an example of how to include a plugin from a private repo in your theme.
        array(            
            'name'               => 'WPBakery Visual Composer', // The plugin name.
            'slug'               => 'js_composer', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(
            'name'               => 'Revolution Slider', // The plugin name.
            'slug'               => 'revslider', // The plugin slug (typically the folder name).            
            'source'             => get_template_directory_uri() . '/framework/plugins/revslider.zip', // The plugin source.            
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(
            'name'               => 'factorypro Essentials', // The plugin name.
            'slug'               => 'factorypro-essentials', // The plugin slug (typically the folder name).
            'source'             => get_stylesheet_directory() . '/framework/plugins/factorypro-essentials.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
	
        array(            
            'name'               => 'DC Testimonial', // The plugin name.
            'slug'               => 'dc_testimonial', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/dc_testimonial.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(            
            'name'               => 'DC Portfolio', // The plugin name.
            'slug'               => 'dc_portfolio', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/dc_portfolio.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(            
            'name'               => 'DC Service', // The plugin name.
            'slug'               => 'dc_service', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/dc_service.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(
        	'name'      		=> 'WooCommerce',
        	'slug'      		=> 'woocommerce',
        	'required'  		=> false,
        	'force_activation'	=> false,
        ),

    );



    $config = array(

        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.

        'default_path' => '',                      // Default absolute path to pre-packaged plugins.

        'menu'         => 'tgmpa-install-plugins', // Menu slug.

        'parent_slug'  => 'themes.php',            // Parent menu slug.

        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.

        'has_notices'  => true,                    // Show admin notices or not.

        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.

        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.

        'is_automatic' => false,                   // Automatically activate plugins after installation or not.

        'message'      => '',                      // Message to output right before the plugins table.

        'strings'      => array(

            'page_title'                      => esc_html__( 'Install Required Plugins', 'factorypro' ),

            'menu_title'                      => esc_html__( 'Install Plugins', 'factorypro' ),

            'installing'                      => esc_html__( 'Installing Plugin: %s', 'factorypro' ), // %s = plugin name.

            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'factorypro' ),

            'notice_can_install_required'     => _n_noop(

                'This theme requires the following plugin: %1$s.',

                'This theme requires the following plugins: %1$s.',

                'factorypro'

            ), // %1$s = plugin name(s).

            'notice_can_install_recommended'  => _n_noop(

                'This theme recommends the following plugin: %1$s.',

                'This theme recommends the following plugins: %1$s.',

                'factorypro'

            ), // %1$s = plugin name(s).

            'notice_cannot_install'           => _n_noop(

                'Sorry, but you do not have the correct permissions to install the %1$s plugin.',

                'Sorry, but you do not have the correct permissions to install the %1$s plugins.',

                'factorypro'

            ), // %1$s = plugin name(s).

            'notice_ask_to_update'            => _n_noop(

                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',

                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',

                'factorypro'

            ), // %1$s = plugin name(s).

            'notice_ask_to_update_maybe'      => _n_noop(

                'There is an update available for: %1$s.',

                'There are updates available for the following plugins: %1$s.',

                'factorypro'

            ), // %1$s = plugin name(s).

            'notice_cannot_update'            => _n_noop(

                'Sorry, but you do not have the correct permissions to update the %1$s plugin.',

                'Sorry, but you do not have the correct permissions to update the %1$s plugins.',

                'factorypro'

            ), // %1$s = plugin name(s).

            'notice_can_activate_required'    => _n_noop(

                'The following required plugin is currently inactive: %1$s.',

                'The following required plugins are currently inactive: %1$s.',

                'factorypro'

            ), // %1$s = plugin name(s).

            'notice_can_activate_recommended' => _n_noop(

                'The following recommended plugin is currently inactive: %1$s.',

                'The following recommended plugins are currently inactive: %1$s.',

                'factorypro'

            ), // %1$s = plugin name(s).

            'notice_cannot_activate'          => _n_noop(

                'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',

                'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',

                'factorypro'

            ), // %1$s = plugin name(s).

            'install_link'                    => _n_noop(

                'Begin installing plugin',

                'Begin installing plugins',

                'factorypro'

            ),

            'update_link'                     => _n_noop(

                'Begin updating plugin',

                'Begin updating plugins',

                'factorypro'

            ),

            'activate_link'                   => _n_noop(

                'Begin activating plugin',

                'Begin activating plugins',

                'factorypro'

            ),

            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'factorypro' ),

            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'factorypro' ),

            'activated_successfully'          => esc_html__( 'The following plugin was activated successfully:', 'factorypro' ),

            'plugin_already_active'           => esc_html__( 'No action taken. Plugin %1$s was already active.', 'factorypro' ),  // %1$s = plugin name(s).

            'plugin_needs_higher_version'     => esc_html__( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'factorypro' ),  // %1$s = plugin name(s).

            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %1$s', 'factorypro' ), // %s = dashboard link.

            'contact_admin'                   => esc_html__( 'Please contact the administrator of this site for help.', 'factorypro' ),



            'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.

        )

    );



    tgmpa( $plugins, $config );



}

//Breadcrumbs
 
 function factorypro_breadcrumbs() {
    $text['home']     = wp_kses('<i class="fa fa-home"></i> Home', 'factorypro'); // text for the 'Home' link
    $text['category'] = '%s'; // text for a category page
    $text['tax']      = '%s'; // text for a taxonomy page
    $text['search']   = '%s'; // text for a search results page
    $text['tag']      = '%s'; // text for a tag page
    $text['author']   = '%s'; // text for an author page
    $text['404']      = '404'; // text for the 404 page

    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $showOnHome  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter   = ''; // delimiter between crumbs
    $before      = '<li class="active">'; // tag before the current crumb
    $after       = '</li>'; // tag after the current crumb


    global $post;
    $homeLink = home_url('/') . '';
    $linkBefore = '<li>';
    $linkAfter = '</li>';
    $linkAttr = ' rel="v:url" property="v:title"';
    $link = $linkBefore . '<a' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;

    if (is_home() || is_front_page()) {

        if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $text['home'] . '</a></div>';

    } else {

        echo '<ul class="breadcrumb page-depth">' . sprintf($link, $homeLink, $text['home']) . $delimiter;


        if ( is_category() ) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                $cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo htmlspecialchars_decode( $cats );
            }
            echo htmlspecialchars_decode( $before ) . sprintf($text['category'], single_cat_title('', false)) . htmlspecialchars_decode( $after );

        } elseif( is_tax() ){
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                $cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo htmlspecialchars_decode( $cats );
            }
            echo htmlspecialchars_decode( $before ) . sprintf($text['tax'], single_cat_title('', false)) . htmlspecialchars_decode( $after );

        }elseif ( is_search() ) {
            echo htmlspecialchars_decode( $before ) . sprintf($text['search'], get_search_query()) . htmlspecialchars_decode( $after );

        } elseif ( is_day() ) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
            echo htmlspecialchars_decode( $before ) . get_the_time('d') . htmlspecialchars_decode( $after );

        } elseif ( is_month() ) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo htmlspecialchars_decode( $before ) . get_the_time('F') . htmlspecialchars_decode( $after );

        } elseif ( is_year() ) {
            echo htmlspecialchars_decode( $before ) . get_the_time('Y') . htmlspecialchars_decode( $after );

        } elseif ( is_single() && !is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                if ( get_post_type() == 'portfolio' ) {
                 printf(''); //Translate breadcrumb.
             }else{
              printf($link, $homeLink . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
             }
                if ($showCurrent == 1) echo htmlspecialchars_decode( $delimiter ) . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $delimiter);
                if ($showCurrent == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo htmlspecialchars_decode( $cats );
                if ($showCurrent == 1) echo htmlspecialchars_decode( $before ) . get_the_title() . $after;
            }

        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());
            echo htmlspecialchars_decode( $before ) . $post_type->labels->singular_name . htmlspecialchars_decode( $after );

        } elseif ( is_attachment() ) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            $cats = get_category_parents($cat, TRUE, $delimiter);
            $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
            $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
            echo htmlspecialchars_decode( $cats );
            printf($link, get_permalink($parent), $parent->post_title);
            if ($showCurrent == 1) echo htmlspecialchars_decode( $delimiter ) . $before . get_the_title() . $after;

        } elseif ( is_page() && !$post->post_parent ) {
            if ($showCurrent == 1) echo htmlspecialchars_decode( $before ) . get_the_title() . $after;

        } elseif ( is_page() && $post->post_parent ) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo htmlspecialchars_decode( $breadcrumbs[$i] );
                if ($i != count($breadcrumbs)-1) echo htmlspecialchars_decode( $delimiter );
            }
            if ($showCurrent == 1) echo htmlspecialchars_decode( $delimiter ) . $before . get_the_title() . $after;

        } elseif ( is_tag() ) {
            echo htmlspecialchars_decode( $before ) . sprintf($text['tag'], single_tag_title('', false)) . $after;

        } elseif ( is_author() ) {
             global $author;
            $userdata = get_userdata($author);
            echo htmlspecialchars_decode( $before ) . sprintf($text['author'], $userdata->display_name) . $after;

        } elseif ( is_404() ) {
            echo htmlspecialchars_decode( $before ) . $text['404'] . $after;
        }

        if ( get_query_var('paged') ) {
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() );
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() );
        }

        echo '</ul>';

    }
}

?>