<?php
    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }
    // This is your option name where all the Redux data is stored.
    $opt_name = "factorypro_option";
    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */
    $theme = wp_get_theme(); // For use with some settings. Not necessary.
    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Factorypro Options', 'factorypro' ),
        'page_title'           => __( 'Factorypro Options', 'factorypro' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.
        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
        //'compiler'             => true,
        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );
  
    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }
    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );
    Redux::setArgs( $opt_name, $args );
    /*
     * ---> END ARGUMENTS
     */
    /*
     * ---> START HELP TABS
     */
    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );
    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );
    /*
     * <--- END HELP TABS
     */
    /*
     *
     * ---> START SECTIONS
     *
     */
    /*
        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
     */
    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
      'icon' => ' el-icon-picture',

              'title' => __('Logo & Favicon Settings', 'factorypro'),

              'fields' => array(

                  array(

                      'id' => 'favicon',

                      'type' => 'media',

                      'url' => true,

                      'title' => __('Custom Favicon', 'factorypro'),

                      'compiler' => 'true',

                      'desc' => __('Upload your Favicon.', 'factorypro'),

                      'subtitle' => __('', 'factorypro'),

                      'default' => array('url' => get_template_directory_uri().'/img/favicon.png'),

                  ),
                  array(
                      'id' => 'logo',
                      'type' => 'media',
                      'url' => true,
                      'title' => __('Logo', 'factorypro'),
                      'compiler' => 'true',
                      'desc' => __('logo.', 'factorypro'),
                      'subtitle' => __('', 'factorypro'),
                     'default' => array('url' => get_template_directory_uri().'/img/logo.png'),
                  ),
                  array(
                      'id' => 'error',
                      'type' => 'media',
                      'url' => true,
                      'title' => __('404 Images', 'factorypro'),
                      'compiler' => 'true',
                      'desc' => __('404 Images.', 'factorypro'),
                      'subtitle' => __('', 'factorypro'),
					  'default' => array('url' => get_template_directory_uri().'/img/error.jpg'),
                  ),

              )
    ) );
    
    
	 Redux::setSection( $opt_name, array(
                'icon' => ' el-icon-website',
                'title' => __('Header Settings', 'factorypro'),
                'fields' => array(  
                    
                    array(
                        'id' => 'hphone',
                        'type' => 'editor',
                        'title' => __('Phone Number ', 'factorypro'),
                        'subtitle' => __('Enter Phone Number', 'factorypro'),
                        'default' => '+44 567 890123 <br> +44 567 890123',
                    ),
                    array(
                        'id' => 'haddress',
                        'type' => 'editor',
                        'title' => __('Address ', 'factorypro'),
                        'subtitle' => __('Enter Address', 'factorypro'),
                        'default' => 'Mountain Drive, Kensington, London, UK',
                    ),
                    array(
                        'id' => 'quote_text',
                        'type' => 'text',
                        'title' => __('Enter Button Text ', 'factorypro'),
                        'default' => 'GET A QUOTE',
                    ),
                     array(
                        'id' => 'quote_link',
                        'type' => 'text',
                        'title' => __('Enter Button Link ', 'factorypro'),
                        'default' => '#',
                    ),
                     array(
                        'id' => 'email_id',
                        'type' => 'editor',
                        'title' => __('Email ID ', 'factorypro'),
                        'subtitle' => __('Enter Email ID', 'factorypro'),
                        'default' => 'support@factorypro.com',
                    ),
                     array(
                        'id' => 'h_mobile',
                        'type' => 'editor',
                        'title' => __('Mobile Number ', 'factorypro'),
                        'subtitle' => __('Enter Mobile Number', 'factorypro'),
                        'default' => '+91 00000 00000',
                    ),
                    array(
                        'id' => 'hslogan',
                        'type' => 'text',
                        'title' => __('Add Slogan ', 'factorypro'),
                        'default' => 'No 1 Leading Provider Of Industrial Solutions ',
                    ),
                     array(
                        'id' => 'quote_text',
                        'type' => 'text',
                        'title' => __('Enter Button Text ', 'factorypro'),
                        'default' => 'GET A QUOTE',
                    ),
                    array(
                'id' => 'facebook',
                'type' => 'text',
                'title' => __('Facebook Url', 'factorypro'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://www.facebook.com/',
            ),
            array(
                'id' => 'google',
                'type' => 'text',
                'title' => __('Google+ Url', 'factorypro'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'twitter',
                'type' => 'text',
                'title' => __('Twitter Url', 'factorypro'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://twitter.com/',
            ),
            array(
                'id' => 'github',
                'type' => 'text',
                'title' => __('Github Url', 'factorypro'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'youtube',
                'type' => 'text',
                'title' => __('Youtube Url', 'factorypro'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'linkedin',
                'type' => 'text',
                'title' => __('Linkedin Url', 'factorypro'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://www.linkedin.com/',
            ),
            array(
                'id' => 'dribbble',
                'type' => 'text',
                'title' => __('Dribbble Url', 'factorypro'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'behance',
                'type' => 'text',
                'title' => __('Behance Url', 'factorypro'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'instagram',
                'type' => 'text',
                'title' => __('Instagram Url', 'factorypro'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'skype',
                'type' => 'text',
                'title' => __('Skype Url', 'factorypro'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
                )
            ));	
            
    Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-shopping-cart-sign',
                'title' => __('Shop Settings', 'biss'),
                'fields' => array(   
                    array(
                        'id' => 'shop_thumbnail',
                        'type' => 'media',
                        'title' => __('Background Main Shop Top Page', 'archi'),
                        'subtitle' => __('Background Shop', 'archi'),                        
                        'default' => array('url' => get_template_directory_uri().'/img/ban.jpg'),
                    ),
                    array(
                        'id' => 'product_thumbnail',
                        'type' => 'media',
                        'title' => __('Background Single Product Top Page', 'archi'),
                        'subtitle' => __('Background Single Product', 'archi'),                        
                        'default' => array('url' => get_template_directory_uri().'/img/ban.jpg'),
                    ),
                    
                )
            ));
            
    Redux::setSection( $opt_name, array(

        'icon' => 'el-icon-blogger',

        'title' => __('Blog Settings', 'factorypro'),

        'fields' => array(
            array(
                'id' => 'bg_allpage',
                'type' => 'media',
                'url' => true,
                'title' => __('Background Header', 'factorypro'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('.', 'factorypro'),
                'subtitle' => __('', 'factorypro'),
               'default' => array('url' => get_template_directory_uri().'/img/ban.jpg'),
            ),
            array(

                'id' => 'blog_title',

                'type' => 'text',

                'title' => __('The Blog Title', 'factorypro'),

                'subtitle' => __('Title Blog', 'factorypro'),

                'desc' => __('', 'factorypro'),

                'default' => 'Blog'

            ),

            array(

                'id' => 'blog_excerpt',

                'type' => 'text',

                'title' => __('Blog custom excerpt leng', 'factorypro'),

                'subtitle' => __('Input Blog custom excerpt leng', 'factorypro'),

                'desc' => __('', 'factorypro'),

                'default' => '50'

            ),
            array(

                'id' => 'blog_widget_excerpt',

                'type' => 'text',

                'title' => __('Blog custom widget excerpt leng', 'factorypro'),

                'subtitle' => __('Input Blog custom widget excerpt leng', 'lectrician'),

                'desc' => __('', 'factorypro'),

                'default' => '10'

            ),

         )

    ));
    
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-credit-card',
        'title' => __('Services Settings', 'factorypro'),
        'fields' => array(
	        
	        array(
                        'id' => 'headline',
                        'type' => 'text',
                        'title' => __('Headline', 'factorypro'),
                        'default' => 'Contact Info',
           ),

            array(
                'id' => 'address',
                'type' => 'editor',
                'title' => __('Address', 'factorypro'),
                'subtitle' => __('Copyright Text', 'factorypro'),
                'default' => 'A 41, Pandav Nagar Complex, New Delhi',
            ),
            array(
                        'id' => 'phone',
                        'type' => 'editor',
                        'title' => __('Phone No', 'factorypro'),
                        'default' => '+1 612-4000-5000 <br> +1 612-4500-4500',
           ), 
            array(
                        'id' => 'email',
                        'type' => 'text',
                        'title' => __('Email ID', 'factorypro'),
                        'default' => 'deepak@gmail.com',
           ),    
            
        )
    ));

    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-credit-card',
        'title' => __('Footer Settings', 'factorypro'),
        'fields' => array(

            array(
                'id' => 'footer_text',
                'type' => 'editor',
                'title' => __('Footer Text', 'factorypro'),
                'subtitle' => __('Copyright Text', 'factorypro'),
                'default' => '© 2016 factorypro • All Rights Reserved',
            ),
            array(
                        'id' => 'created_text',
                        'type' => 'text',
                        'title' => __('Created Text', 'factorypro'),
                        'default' => 'Created by: Deepak Chandra',
           ),    
            
        )
    ));

    Redux::setSection( $opt_name, array(

        'icon' => 'el-icon-website',

        'title' => __('Styling Options', 'factorypro'),

        'fields' => array(
            array(
                'id' => 'version_type',
                'type' => 'select',
                'title' => __('Theme Version', 'factorypro'),
                'subtitle' => __('Dark or White', 'factorypro'),
                'desc' => __('', 'factorypro'),
                'options'  => array(
                    'dark' => 'Dark Version',
                    'light' => 'Light Version',
                ),
                'default' => 'dark',
            ),



            array(

                'id' => 'main-color',

                'type' => 'color',

                'title' => __('Theme Main Color', 'factorypro'),

                'subtitle' => __('Pick the main color for the theme (default: #515252).', 'factorypro'),

                'default' => '#515252',

                'validate' => 'color',

            ),
            array(

                'id' => 'btn-color',

                'type' => 'color',

                'title' => __('Theme BTN Color', 'factorypro'),

                'subtitle' => __('Pick the BTN color for the theme (default: #ff8606).', 'factorypro'),

                'default' => '#ff8606',

                'validate' => 'color',

            ),
            array(

                'id' => 'btn-text-color',

                'type' => 'color',

                'title' => __('Theme BTN Text Color', 'factorypro'),

                'subtitle' => __('Pick the BTN Text color for the theme (default: #fff).', 'factorypro'),

                'default' => '#fff',

                'validate' => 'color',

            ),
            array(

                'id' => 'top_menu_bg',

                'type' => 'color',

                'title' => __('Top Bar Background Color', 'factorypro'),

                'subtitle' => __('Pick a background color for the Top Bar background (default: #4c50a5).', 'factorypro'),

                'default' => '#4c50a5',

                'validate' => 'color',

            ),
            array(

                'id' => 'top_menu_color',

                'type' => 'color',

                'title' => __('Top Bar Text Color', 'factorypro'),

                'subtitle' => __('Pick a background color for the Top Bar background (default: #fff).', 'factorypro'),

                'default' => '#fff',

                'validate' => 'color',

            ),
            array(

                'id' => 'background_header',

                'type' => 'color',

                'title' => __('Header Background Color', 'factorypro'),

                'subtitle' => __('Pick a background color for the header (default: #fff).', 'factorypro'),

                'default' => '#fff',

                'validate' => 'color',

            ),
            array(

                'id' => 'menu_background',

                'type' => 'color',

                'title' => __('Menu Background Color', 'factorypro'),

                'subtitle' => __('Pick a background color for the menu background (default: Transparent).', 'factorypro'),

                'default' => 'transparent',

                'validate' => 'color',

            ),
            array(

                'id' => 'menu_active_text_color',

                'type' => 'color',

                'title' => __('Menu Text Color', 'factorypro'),

                'subtitle' => __('Pick a text color for the menu (default: #ff8606).', 'factorypro'),

                'default' => '#ff8606',

                'validate' => 'color',

            ),
            array(

                'id' => 'background_header_scroll',

                'type' => 'color',

                'title' => __('Header Scroll Background Color', 'factorypro'),

                'subtitle' => __('Pick a background color for the header scroll (default: #fff).', 'factorypro'),

                'default' => '#fff',

                'validate' => 'color',

            ),
             array(

                'id' => 'header_scroll_text',

                'type' => 'color',

                'title' => __('Text Color Scroll Header', 'factorypro'),

                'subtitle' => __('Pick a  color for the header (default: #404141).', 'factorypro'),

                'default' => '#404141',

                'validate' => 'color',

            ),
             array(

                'id' => 'blog_text_color',

                'type' => 'color',

                'title' => __('Blog Header Text Color', 'factorypro'),

                'subtitle' => __('Pick a text color for the inner page header (default: #fff).', 'factorypro'),

                'default' => '#fff',

                'validate' => 'color',

            ),
            array(

                'id' => 'color_header',

                'type' => 'color',

                'title' => __('Text Color Header', 'factorypro'),

                'subtitle' => __('Pick a  color for the header (default: #404141).', 'factorypro'),

                'default' => '#404141',

                'validate' => 'color',

            ),

            array(

                'id' => 'background_footer',

                'type' => 'color',

                'title' => __('Footer Background Color', 'factorypro'),

                'subtitle' => __('Pick a background color for the footer (default: #103F6E).', 'factorypro'),

                'default' => '#103F6E',

                'validate' => 'color',

            ),
             array(

                'id' => 'color_footer_title',

                'type' => 'color',

                'title' => __('Footer Title Color', 'factorypro'),

                'subtitle' => __('Pick a  color for the footer Title(default: #c5c5c5).', 'factorypro'),

                'default' => '#c5c5c5',

                'validate' => 'color',

            ),
            array(

                'id' => 'color_footer',

                'type' => 'color',

                'title' => __('Text Color Footer', 'factorypro'),

                'subtitle' => __('Pick a  color for the footer (default: #8c8c8c).', 'factorypro'),

                'default' => '#8c8c8c',

                'validate' => 'color',

            ),

            array(

                'id' => 'body-font2',

                'type' => 'typography',

                'output' => array('body'),

                'title' => __('Body Font', 'factorypro'),

                'subtitle' => __('Specify the body font properties.', 'factorypro'),

                'google' => true,

                'default' => array(

                    'color' => '',

                    'font-size' => '',

                    'line-height' => '',

                    'font-family' => '',

                    'font-weight' => ''

                ),

            ),

             array(

                'id' => 'custom-css',

                'type' => 'ace_editor',

                'title' => __('CSS Code', 'factorypro'),

                'subtitle' => __('Paste your CSS code here.', 'factorypro'),

                'mode' => 'css',

                'theme' => 'monokai',

                'desc' => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',

                'default' => "#header{\nmargin: 0 auto;\n}"

            ),

        )

    ));

      /*
     * <--- END SECTIONS
     */
