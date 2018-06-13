<?php
// Blog & News

if
(function_exists('vc_map'))
{
	vc_map( array(

			"name" => esc_html__("DC Blog And News", 'factorypro'),

			"base" => "blogs",

			"class" => "",

			"category" => 'Content',

			"icon" => "icon-st",

			"params" => array(

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__('Number', 'factorypro'),
					"param_name" => "num",
					"description" => esc_html__('Enter Number of posts to Show.', 'factorypro')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__('Text Limit', 'factorypro'),
					"param_name" => "text_limit",
					"description" => esc_html__('Enter text limit for posts to Show.', 'factorypro')
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( 'Category', 'factorypro'),
					"param_name" => "cat",
					"value" => array_flip( (array)factorypro_get_categories( array( 'taxonomy' => 'category', 'hide_empty' => FALSE ), true ) ),
					"description" => esc_html__( 'Choose Category.', 'factorypro')
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Order By", 'factorypro'),
					"param_name" => "sort",
					'value' => array_flip( array('select'=>esc_html__('Select Options', 'factorypro'), 'date'=>esc_html__('Date', 'factorypro'), 'title'=>esc_html__('Title', 'factorypro') , 'name'=>esc_html__('Name', 'factorypro') , 'author'=>esc_html__('Author', 'factorypro'), 'comment_count' =>esc_html__('Comment Count', 'factorypro'), 'random' =>esc_html__('Random', 'factorypro') ) ),
					"description" => esc_html__("En<em></em>ter the sorting order.", 'factorypro')
				),
				array(
					"type" => "dropdown",

					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Order", 'factorypro'),
					"param_name" => "order",
					'value' => array_flip(array('select'=>esc_html__('Select Options', 'factorypro'), 'ASC'=>esc_html__('Ascending', 'factorypro'), 'DESC'=>esc_html__('Descending', 'factorypro') ) ),
					"description" => esc_html__("Enter the sorting order.", 'factorypro')
				),
			)


		)

	);
}

//Custom Heading
if
(function_exists('vc_map'))
{



	vc_map( array(



			"name"      => esc_html__("DC Heading", 'factorypro'),



			"base"      => "heading",



			"class"     => "",



			"icon" => "icon-st",



			"category"  => 'Content',



			"params"    => array(



				array(



					"type"      => "textarea",



					"holder"    => "div",



					"class"     => "",



					"heading"   => esc_html__("Text", 'factorypro'),



					"param_name"=> "text",



					"value"     => "",



					"description" => esc_html__("Heading", 'factorypro')



				),

				array(



					"type" => "dropdown",



					"heading" => esc_html__('Element Tag', 'factorypro'),



					"param_name" => "tag",



					"value" => array(

						esc_html__('h1', 'factorypro') => 'h1',

						esc_html__('h2', 'factorypro') => 'h2',



						esc_html__('h3', 'factorypro') => 'h3',



						esc_html__('h4', 'factorypro') => 'h4',



						esc_html__('h5', 'factorypro') => 'h5',



						esc_html__('h6', 'factorypro') => 'h6',



						esc_html__('p', 'factorypro')  => 'p',



						esc_html__('div', 'factorypro') => 'div'

					),

					"description" => esc_html__("Section Element Tag", 'factorypro'),

				),

				array(

					"type" => "dropdown",

					"heading" => esc_html__('Text Align', 'factorypro'),

					"param_name" => "align",

					"value" => array(

						esc_html__('left', 'factorypro') => 'left',

						esc_html__('right', 'factorypro') => 'right',

						esc_html__('center', 'factorypro') => 'center',

						esc_html__('justify', 'factorypro') => 'justify',

					),



					"description" => esc_html__("Section Overlay", 'factorypro'),



				),

				array(



					"type"      => "textfield",



					"holder"    => "div",



					"class"     => "",



					"heading"   => esc_html__("Font Size", 'factorypro'),



					"param_name"=> "size",



					"value"     => "",



					"description" => esc_html__("Ex: 14px", 'factorypro')



				),

				array(
					"type"      => "colorpicker",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Color", 'factorypro'),
					"param_name"=> "color",
					"value"     => "",
					"description" => esc_html__("", 'factorypro')
				),

				array(



					"type"      => "textfield",



					"holder"    => "div",



					"class"     => "",



					"heading"   => esc_html__("Margin Bottom", 'factorypro'),



					"param_name"=> "bot",



					"value"     => "",



					"description" => esc_html__("", 'factorypro')



				),

				array(



					"type"      => "textfield",



					"holder"    => "div",



					"class"     => "",



					"heading"   => esc_html__("Class Extra", 'factorypro'),



					"param_name"=> "class",



					"value"     => "",



					"description" => esc_html__("", 'factorypro')



				),
				
				array(



					"type"      => "textfield",



					"holder"    => "div",



					"class"     => "",



					"heading"   => esc_html__("Line Height", 'factorypro'),



					"param_name"=> "line_height",



					"value"     => "",



					"description" => esc_html__("", 'factorypro')



				),

			)));



}

//Special Heading
if
(function_exists('vc_map'))
{
vc_map( array(
"name"      => esc_html__("Special Heading", 'factorypro'),
"base"      => "sheading",
"class"     => "",
"icon" => "icon-st",
"category"  => 'Content',
"params"    => array(
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Text", 'factorypro'),
					"param_name"=> "subhead",
					"value"     => "",
					"description" => esc_html__("Sub Heading", 'factorypro')
					),
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Sub Head Font Size", 'factorypro'),
					"param_name"=> "subsize",
					"value"     => "",
					"description" => esc_html__("Ex: 14px", 'factorypro')
					),
					array(
					"type"      => "colorpicker",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Color", 'factorypro'),
					"param_name"=> "subcolor",
					"value"     => "",
					"description" => esc_html__("Subhead Color", 'factorypro')
					),
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Text", 'factorypro'),
					"param_name"=> "mainhead",
					"value"     => "",
					"description" => esc_html__("Main Heading", 'factorypro')
					),
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Main Head Font Size", 'factorypro'),
					"param_name"=> "mainsize",
					"value"     => "",
					"description" => esc_html__("Ex: 14px", 'factorypro')
					),
					array(
					"type"      => "colorpicker",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Main Color", 'factorypro'),
					"param_name"=> "maincolor",
					"value"     => "",
					"description" => esc_html__("Main head Color", 'factorypro')
					),
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Text", 'factorypro'),
					"param_name"=> "paragraph",
					"value"     => "",
					"description" => esc_html__("Paragraph Heading", 'factorypro')
					),
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Paragraph Font Size", 'factorypro'),
					"param_name"=> "parasize",
					"value"     => "",
					"description" => esc_html__("Ex: 14px", 'factorypro')
					),
					array(
					"type"      => "colorpicker",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Color", 'factorypro'),
					"param_name"=> "paracolor",
					"value"     => "",
					"description" => esc_html__("Paragraph Color", 'factorypro')
					),
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Margin Bottom", 'factorypro'),
					"param_name"=> "mbottom",
					"value"     => "",
					"description" => esc_html__("Ex: 70px", 'factorypro')
					),

)));
}

/*-----------------------------------------------------------------------------------*/
/* Map to VC - Counter
/*-----------------------------------------------------------------------------------*/
if
(function_exists('vc_map'))
{
	vc_map( array(
		"name"					=>esc_html__( "Counter", 'factorypro' ),
		"description"			=>esc_html__( "Counter", 'factorypro' ),
		"base"					=> "factorypro_counter",
		'category'				=> "Content",
		"icon"					=> "icon-wpb-factorypro-counter",
		"params"				=> array(
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Number", 'factorypro' ),
				"param_name"	=> "number",
				"value"			=> "197",
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Title", 'factorypro' ),
				"param_name"	=> "title",
				"value"			=> "",
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Color", 'factorypro' ),
				"param_name"	=> "color",
				"value"			=> "#666666",
			),
			array(
				"type"			=> "textarea_html",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Content", 'factorypro' ),
				"param_name"	=> "content",
				"value"			=> "Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.",
				"group"	=>esc_html__( 'Content', 'factorypro' ),
			),
		)
	) );
}


/*-----------------------------------------------------------------------------------*/
/* Map to VC - Iconbox
/*-----------------------------------------------------------------------------------*/
if
(function_exists('vc_map'))
{
	vc_map( array(
		"name"					=> esc_html__( "Iconbox", 'factorypro' ),
		"description"			=> esc_html__( "Box with Icon and Content.", 'factorypro' ),
		"base"					=> "factorypro_iconbox",
		'category'				=> "Content",
		"icon" 					=> "icon-st",
		"params"				=> array(
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Icon", 'factorypro' ),
				"param_name"	=> "icon",
				"value"			=> "fa-phone",
				"description"	=> esc_html__( "Can be any Fontawesome Icon (fa-phone) or Simple Line Icon (sl-users)", 'factorypro' ),
			),
			array(
				"type"			=> "attach_image",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Image Alternative", 'factorypro' ),
				"param_name"	=> "iconimg",
				"value"			=> "",
				"description"	=> esc_html__( "Select an image instead of using a Font Icon", 'factorypro' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Style", 'factorypro' ),
				"param_name"	=> "style",
				"value"			=> array(
					'Icon Box Style1' => '1',
					'Icon next to Box' => '2',
					'Icon above Box' => '3',
				),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Icon Color", 'factorypro' ),
				"param_name"	=> "iconcolor",
				"value"			=> array(
					'Accent Color' => 'accent',
					'Greyscale' => 'grey',
					'Custom Color' => 'custom',
				),
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Color", 'factorypro' ),
				"param_name"	=> "customcolor",
				"value"			=> "",
				'dependency' => Array( 'element' => 'iconcolor', 'value' => Array('custom') ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Custom Class", 'factorypro' ),
				"param_name"	=> "class",
				"value"			=> "",
				"description"	=> esc_html__( "Use this field to add a custom class.", 'factorypro' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=> esc_html__( "Title", 'factorypro' ),
				"param_name"	=> "title",
				"value"			=> "",
				"group"	=> esc_html__( 'Content', 'factorypro' ),
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Title Color", 'factorypro' ),
				"param_name"	=> "titlecolor",
				"value"			=> "",
				"description"	=> "Pick Title Text Color.",
				"group"	=> esc_html__( 'Content', 'factorypro' ),
			),
			
			array(
				"type"			=> "textarea_html",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Content", 'factorypro' ),
				"param_name"	=> "content",
				"value"			=> "Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.",
				"group"	=> esc_html__( 'Content', 'factorypro' ),
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Content Color", 'factorypro' ),
				"param_name"	=> "contentcolor",
				"value"			=> "",
				"description"	=> "Pick Content Text Color.",
				"group"	=> esc_html__( 'Content', 'factorypro' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=> esc_html__( "Iconbox Button URL (links the complete iconbox to this url)", 'factorypro' ),
				"param_name"	=> "url",
				"value"			=> "",
				"description"	=> "Enter URL or leave empty. ",
				"group"	=> esc_html__( 'Content', 'factorypro' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=> esc_html__( "Iconbox Button Text ", 'factorypro' ),
				"param_name"	=> "buttontext",
				"value"			=> "",
				"description"	=> "Enter Button Text or leave empty.",
				"group"	=> esc_html__( 'Content', 'factorypro' ),
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Button Text Color", 'factorypro' ),
				"param_name"	=> "buttontcolor",
				"value"			=> "",
				"description"	=> "Pick Button Text Color.",
				"group"	=> esc_html__( 'Content', 'factorypro' ),
				'dependency' => Array( 'element' => 'style', 'value' => Array('1') ),
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Button Background Color", 'factorypro' ),
				"param_name"	=> "buttoncolor",
				"value"			=> "",
				"description"	=> "Pick Button Background Color.",
				"group"	=> esc_html__( 'Content', 'factorypro' ),
				'dependency' => Array( 'element' => 'style', 'value' => Array('1') ),
			),
		)
	) );
}




//Portfolio Filter
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("DC Portfolio Filter", 'factorypro'),
   "base"      => "foliof",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(
	   
	  array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Icon Color", 'factorypro' ),
				"param_name"	=> "style",
				"value"			=> array(
					'Style 1' => 'style1',
					'Style 2' => 'style2',
					'Style 3' => 'style3',
				),
			),

      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'factorypro'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'factorypro')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number portfolio per page", 'factorypro' ),
         "param_name" => "num",
         "value" => "10",
         "description" => __("Enter Number Portfolio.", 'factorypro' )
      ), 
      
    )));
}

// Buttons

if
(function_exists('vc_map'))
{


	vc_map( array(

			"name" => esc_html__("DC Buttons", 'factorypro'),

			"base" => "button",

			"class" => "",

			"category" => 'Content',

			"icon" => "icon-st",

			"params" => array(


				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Icon", 'factorypro'),

					"param_name" => "icon",

					"value" => '',

					"description" => esc_html__("Ex: download. Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'factorypro')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Button Text", 'factorypro'),

					"param_name" => "btntext",

					"value" => "",

					"description" => esc_html__("", 'factorypro')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Button Link", 'factorypro'),

					"param_name" => "btnlink",

					"value" => '',

					"description" => esc_html__("", 'factorypro')

				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__('Style Button', 'factorypro'),
					"param_name" => "style",
					"value" => array(
						esc_html__('Select Style', 'factorypro') => 'no',
						esc_html__('Small', 'factorypro') => 'small',
						esc_html__('Medium', 'factorypro') => 'medium',
						esc_html__('Large', 'factorypro') => 'large',
						esc_html__('Small/Background: transparent', 'factorypro') => 'stransparent',
						esc_html__('Medium/Background: transparent', 'factorypro') => 'mtransparent',
						esc_html__('Large/Background: transparent', 'factorypro') => 'ltransparent',
						esc_html__('Large/Border/Transparent', 'factorypro') => 'lbtransparent',
						esc_html__('Small/White', 'factorypro') => 'swhite',
						esc_html__('Medium/White', 'factorypro') => 'mwhite',
						esc_html__('Large/White', 'factorypro') => 'lwhite',
						esc_html__('Small/dark', 'factorypro') => 'sdark',
						esc_html__('Medium/dark', 'factorypro') => 'mdark',
						esc_html__('Large/dark', 'factorypro') => 'ldark',

					),
					"description" => esc_html__("", 'factorypro'),
				),

			)
		));

}
// Blocqouter Solid

if
(function_exists('vc_map'))
{
	vc_map( array(
			"name"      => esc_html__("DC Blockquote Solid", 'factorypro'),
			"base"      => "blocquote",
			"class"     => "",
			"icon" => "icon-st",
			"category"=>'Content',
			"params"=>array(
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Title", 'factorypro'),
					"param_name" => "title",
					"value" => "",
					"description" => esc_html__("Title display in Blockquote Table.", 'factorypro')
				),
				array(
					"type" => "textarea",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Text ", 'factorypro'),
					"param_name" => "text",
					"value" => "",
					"description" => esc_html__("Text display in blocquote", 'factorypro')
				),


			)


		)

	);
}

// Pricing Table (use)
if
(function_exists('vc_map'))
{
	vc_map( array(
			"name" => esc_html__("DC Pricing Table", 'factorypro'),
			"base" => "pricingtable",
			"class" => "",
			"category" => 'Content',
			"icon" => "icon-st",
			"params" => array(
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Title Pricing", 'factorypro'),
					"param_name" => "title",
					"value" => "",
					"description" => esc_html__("Title display in Pricing Table.", 'factorypro')
				),
				
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Add Class", 'factorypro'),
					"param_name" => "class",
					"value" => "",
					"description" => esc_html__("Add extra class.", 'factorypro')
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Price Pricing", 'factorypro'),
					"param_name" => "price",
					"value" => "",
					"description" => esc_html__("Price display in Pricing Table.", 'factorypro')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Per Month", 'factorypro'),
					"param_name" => "month",
					"value" => "",
					"description" => esc_html__("Per Month display in Pricing Table.", 'factorypro')
				),
				array(
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Detail Pricing", 'factorypro'),
					"param_name" => "content",
					"value" => "",
					"description" => esc_html__("Content Pricing Table.", 'factorypro')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Label Button", 'factorypro'),
					"param_name" => "buttontext",
					"value" => "",
					"description" => esc_html__("Text display in button.", 'factorypro')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link Button", 'factorypro'),
					"param_name" => "link",
					"value" => "",
					"description" => esc_html__("Link in button, Leave a blank do not show.", 'factorypro')
				),

			)));
}

//Newsletters
if
(function_exists('vc_map'))
{

	vc_map( array(

			"name"      => esc_html__("DC Newsletters", 'factorypro'),

			"base"      => "newsletter_factorypro",

			"class"     => "",

			"icon" => "icon-st",

			"category"  => 'Content',

			"params"    => array(

				array(

					"type"      => "textfield",

					"holder"    => "div",

					"class"     => "",

					"heading"   => esc_html__("Button Submit", 'factorypro'),

					"param_name"=> "btntext",

					"value"     => "",

					"description" => esc_html__("", 'factorypro')

				),

			)));

}


//Call To Action

if
(function_exists('vc_map'))
{

	vc_map( array(

			"name" => esc_html__("DC Call To Action Box", 'factorypro'),

			"base" => "ctabox",

			"class" => "",

			"icon" => "icon-st",

			"category" => 'Content',

			"params" => array(

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Title Box", 'factorypro'),

					"param_name" => "title",

					"value" => "",

					"description" => esc_html__("", 'factorypro')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Icon 1", 'factorypro'),

					"param_name" => "icon1",

					"value" => "",

					"description" => esc_html__("Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'factorypro')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Label Button 1", 'factorypro'),

					"param_name" => "btn1",

					"value" => "",

					"description" => esc_html__("", 'factorypro')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Link Button 1", 'factorypro'),

					"param_name" => "link1",

					"value" => "",

					"description" => esc_html__("", 'factorypro')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Icon 2", 'factorypro'),

					"param_name" => "icon2",

					"value" => "",

					"description" => esc_html__("Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'factorypro')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Label Button 2", 'factorypro'),

					"param_name" => "btn2",

					"value" => "",

					"description" => esc_html__("", 'factorypro')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Link Button 2", 'factorypro'),

					"param_name" => "link2",

					"value" => "",

					"description" => esc_html__("", 'factorypro')

				),

			)));

}

//Our Team

if
(function_exists('vc_map'))
{
	vc_map( array(
			"name" => esc_html__("DC Our Team", 'factorypro'),
			"base" => "team",
			"class" => "",
			"icon" => "icon-st",
			"category" => 'Content',
			"params" => array(
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => "Photo Member",
					"param_name" => "photo",
					"value" => "",
					"description" => esc_html__("", 'factorypro')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Name", 'factorypro'),
					"param_name" => "name",
					"value" => "",
					"description" => esc_html__("Member's Name", 'factorypro')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Job", 'factorypro'),
					"param_name" => "job",
					"value" => "",
					"description" => esc_html__("Member's job.", 'factorypro')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Icon 1", 'factorypro'),
					"param_name"=> "icon1",
					"value"     => "",
					"description" => esc_html__("EX: facebook, twitter,linkedin... Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'factorypro')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => "Url 1",
					"param_name"=> "url1",
					"value"     => "",
					"description" => esc_html__("Url.", 'factorypro')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Icon 2", 'factorypro'),
					"param_name"=> "icon2",
					"value"     => "",
					"description" => esc_html__("EX: facebook, twitter,linkedin... Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'factorypro')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => "Url 2",
					"param_name"=> "url2",
					"value"     => "",
					"description" => esc_html__("Url.", 'factorypro')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Icon 3", 'factorypro'),
					"param_name"=> "icon3",
					"value"     => "",
					"description" => esc_html__("EX: facebook, twitter,linkedin... Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'factorypro')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => "Url 3",
					"param_name"=> "url3",
					"value"     => "",
					"description" => esc_html__("Url.", 'factorypro')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Icon 4", 'factorypro'),
					"param_name"=> "icon4",
					"value"     => "",
					"description" => esc_html__("EX: facebook, twitter,linkedin... Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'factorypro')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => "Url 4",
					"param_name"=> "url4",
					"value"     => "",
					"description" => esc_html__("Url.", 'factorypro')
				),
								array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Icon 5", 'factorypro'),
					"param_name"=> "icon5",
					"value"     => "",
					"description" => esc_html__("EX: facebook, twitter,linkedin... Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'factorypro')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => "Url 5",
					"param_name"=> "url5",
					"value"     => "",
					"description" => esc_html__("Url.", 'factorypro')
				),
								array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Icon 6", 'factorypro'),
					"param_name"=> "icon6",
					"value"     => "",
					"description" => esc_html__("EX: facebook, twitter,linkedin... Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'factorypro')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => "Url 6",
					"param_name"=> "url6",
					"value"     => "",
					"description" => esc_html__("Url.", 'factorypro')
				),
			)));
}


//Facts

if
(function_exists('vc_map'))
{

	vc_map( array(

			"name" => esc_html__("DC Facts Box", 'factorypro'),

			"base" => "facts",

			"class" => "",

			"icon" => "icon-st",

			"category" => 'Content',

			"params" => array(

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Icon", 'factorypro'),

					"param_name" => "icon",

					"value" => "",

					"description" => esc_html__("Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'factorypro')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Number", 'factorypro'),

					"param_name" => "number",

					"value" => "",

					"description" => esc_html__("", 'factorypro')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Title", 'factorypro'),

					"param_name" => "title",

					"value" => "",

					"description" => esc_html__("", 'factorypro')

				),
				array(
					"type"      => "colorpicker",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Color Title", 'factorypro'),
					"param_name"=> "color",
					"value"     => "",
					"description" => esc_html__("", 'factorypro')
				),

				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Do You Want Border-Right?", 'factorypro'),
					"param_name" => "border",
					"value" => array(

						esc_html__('Select', 'factorypro') => 'yesno',

						esc_html__('No', 'factorypro') => 'no',

						esc_html__('Yes', 'factorypro') => 'yes',

					),
					"description" => esc_html__("", 'factorypro')
				),

			)));

}


//Clients Logo

if
(function_exists('vc_map'))
{

	vc_map( array(

			"name"      => esc_html__("DC Clients Logo", 'factorypro'),

			"base"      => "logos",

			"class"     => "",

			"icon" => "icon-st",

			"category"  => 'Content',

			"params"    => array(

				array(

					"type" => "attach_images",

					"holder" => "div",

					"class" => "",

					"heading" => "Logo Client",

					"param_name" => "gallery",

					"value" => "",

					"description" => esc_html__("Note: Add link to <b>caption</b> image.", 'factorypro')

				),

			)));

}

//Slider(use)

if
(function_exists('vc_map'))
{

	vc_map( array(

			"name"      => esc_html__("DC Slider", 'factorypro'),

			"base"      => "slider",

			"class"     => "",

			"icon" => "icon-st",

			"category"  => 'Content',

			"params"    => array(

				array(

					"type" => "attach_images",

					"holder" => "div",

					"class" => "",

					"heading" => "Slider Images",

					"param_name" => "gallery",

					"value" => "",

					"description" => esc_html__("Note: Add link to <b>caption</b> image.", 'factorypro')

				),


			)));

}

//Contact Address

if
(function_exists('vc_map'))
{

	vc_map( array(

			"name" => esc_html__("DC Contact Address", 'factorypro'),

			"base" => "c-address",

			"class" => "",

			"category" => 'Content',

			"icon" => "icon-st",

			"params" => array(

				array(

					"type" => "attach_images",

					"holder" => "div",

					"class" => "",

					"heading" => "Upload Icon",

					"param_name" => "icon",

					"value" => "",

					"description" => esc_html__("Note: Upload Icon.", 'factorypro')

				),

				array(

					"type" => "textarea_html",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Content Box", 'factorypro'),

					"param_name" => "content",

					"value" => "",

					"description" => esc_html__("", 'factorypro')

				),
		)

		));

}

// Testimonials

if
(function_exists('vc_map'))
{



	vc_map( array(

			"name" => esc_html__("DC Testimonial", 'factorypro'),

			"base" => "testimonial",

			"class" => "",

			"category" => 'Content',

			"icon" => "icon-st",

			"params" => array(

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Number Show", 'factorypro' ),
					"param_name" => "number",
					"value" => ''
				),
			)

		));

}

//Social
if
(function_exists('vc_map'))
{


	vc_map( array(

			"name" => esc_html__("DC Social", 'factorypro'),

			"base" => "social",

			"class" => "",

			"category" => 'Content',

			"icon" => "icon-st",

			"params" => array(


				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link twitter", 'factorypro' ),
					"param_name" => "link1",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link github", 'factorypro' ),
					"param_name" => "link2",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link dribbble", 'factorypro' ),
					"param_name" => "link3",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link linkedin", 'factorypro' ),
					"param_name" => "link4",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link behance", 'factorypro' ),
					"param_name" => "link5",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link facebook", 'factorypro' ),
					"param_name" => "link6",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link instagram", 'factorypro' ),
					"param_name" => "link7",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link youtube", 'factorypro' ),
					"param_name" => "link8",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link skype", 'factorypro' ),
					"param_name" => "link9",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link google", 'factorypro' ),
					"param_name" => "link10",
					"value" => ''
				),
			)

		));

}


/*-----------------------------------------------------------------------------------*/
/* Map to VC - Box - Imagebox Shortcode
/*-----------------------------------------------------------------------------------*/
function factorypro_imagebox_vc() {
	vc_map( array(
		"name"					=>esc_html__( "Imagebox", 'factorypro' ),
		"description"			=>esc_html__( "Box with Content and Button", 'factorypro' ),
		"base"					=> "factorypro_imagebox",
		'category'				=> "Content",
		"icon"					=> "icon-wpb-factorypro-imagebox",
		"params"				=> array(
			array(
				"type"			=> "attach_image",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Image", 'factorypro' ),
				"param_name"	=> "img",
				"value"			=> "",
				"description"	=>esc_html__( "If you want to use an Image you can upload it here.", 'factorypro' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Title", 'factorypro' ),
				"param_name"	=> "img_title",
				"value"			=> ""
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Link Image to this URL", 'factorypro' ),
				"param_name"	=> "url",
				"value"			=> "",
				"description"	=>esc_html__( "Enter URL or leave empty", 'factorypro' )
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Margin Bottom", 'factorypro' ),
				"param_name"	=> "margin_bot",
				"value"			=> "",
				"description"	=>esc_html__( "ex : 40px", 'factorypro' )
			),
			array(
				"type"			=> "textarea_html",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Content", 'factorypro' ),
				"param_name"	=> "content",
				"value"			=> "Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.",
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Style", 'factorypro' ),
				"param_name"	=> "style",
				"value"			=> array(
					'Boxed' => '1',
					'Simple' => '2',
					'Boxed Content Left' => '3',
					'Simple Content Left' => '4',
				),
			),
		)
	) );
}
add_action( 'vc_before_init', 'factorypro_imagebox_vc' );



/*-----------------------------------------------------------------------------------*/
/* Map to VC - Divider
/*-----------------------------------------------------------------------------------*/
function factorypro_divider_vc() {
	vc_map( array(
		"name"					=>esc_html__( "Divider", 'factorypro' ),
		"description"			=>esc_html__( "Divider & Separator", 'factorypro' ),
		"base"					=> "factorypro_divider",
		'category'				=> "Structure",
		"icon"					=> "icon-wpb-factorypro-divider",
		"params"				=> array(
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Divider Style", 'factorypro' ),
				"param_name"	=> "style",
				"value"			=> array(
					'Thin Light Grey' => '1',
					'Dotted' => '2',
					'Line with Shadow' => '3',
					'Diagonal Lines' => '4',
					'Short Accent Color' => '5',
					'Short Dark Grey' => '6',
					'Dashed Line' => '7',
					'Centered Line with Icon' => '8',
					'Thin Light for dark Backgrounds' => '9',
				),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Margin", 'factorypro' ),
				"param_name"	=> "margin",
				"value"			=> "60px 0 60px 0",
				"description"	=>esc_html__( "Set Divider Margin - topmargin rightmargin bottommargin leftmargin", 'factorypro' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Icon", 'factorypro' ),
				"param_name"	=> "icon",
				"value"			=> "",
				"description"	=>esc_html__( "Can be any Fontawesome Icon (ie. fa-phone)", 'factorypro' ),
				'dependency' => Array( 'element' => 'style', 'value' => Array('8') ),
			),
		)
	) );
}
add_action( 'vc_before_init', 'factorypro_divider_vc' );

/*-----------------------------------------------------------------------------------*/
/* Map to VC - New Divider
/*-----------------------------------------------------------------------------------*/
function factorypro_newdivider_vc() {
	vc_map( array(
		"name" =>esc_html__( "New Divider", 'factorypro' ),
		"description" =>esc_html__( "Divider & Separator", 'factorypro' ),
		"base" => "factorypro_newdivider",
		"category" => 'Structure',
		"icon" => "icon-wpb-factorypro-divider",
		"params" => array(
			array(
				"type" => "dropdown",
				"admin_label"	=> false,
				"class" => "",
				"heading" => "Line Style",
				"param_name" => "style",
				"value" => array(
					"Solid" => "solid",
					"Dashed" => "dashed",
					"Dotted" => "dotted",
					"Transparent" => "transparent",
				),
				"description" => "",
			),
			array(
	            "type" => "colorpicker",
	            "admin_label" => false,
	            "class" => "",
	            "heading" => "Line Color",
	            "value" => "#999999",
	            "param_name" => "line_color",
	        ),
			array(
				"type" => "textfield",
				"admin_label"	=> false,
				"class" => "",
				"heading" => "Width",
				"param_name" => "width",
				"value" => "100%",
				"save_value" => true,
				"description" => "Width of the separator. Can be px or %. Default: 100%",
			),
			array(
				"type" => "textfield",
				"admin_label"	=> false,
				"class" => "",
				"heading" => "Thickness",
				"param_name" => "thickness",
				"value" => "1px",
				"save_value" => true,
				"description" => "Tickness of the separator. Default: 1px",
			),
			array(
				"type" => "textfield",
				"admin_label"	=> false,
				"class" => "",
				"heading" => "Top Margin",
				"param_name" => "topmargin",
				"value" => "",
				"save_value" => true,
				"description" => "Top Margin. For example: 20px",
			),
			array(
				"type" => "textfield",
				"admin_label"	=> false,
				"class" => "",
				"heading" => "Bottom Margin",
				"param_name" => "bottommargin",
				"value" => "",
				"save_value" => true,
				"description" => "Top Margin. For example: 20px",
			),
			array(
				"type" => "dropdown",
				"admin_label"	=> false,
				"class" => "",
				"heading" => "Align",
				"param_name" => "align",
				"value" => array(
					"Center" => "center",
					"Left" => "left",
					"Right" => "right",
				),
				"description" => "",
			),
		)
	) );
}
add_action( 'vc_before_init', 'factorypro_newdivider_vc' );

/*-----------------------------------------------------------------------------------*/
/* Map to VC - Headline
/*-----------------------------------------------------------------------------------*/
function factorypro_headline_vc() {
	vc_map( array(
		"name"					=>esc_html__( "Headline", 'factorypro' ),
		"description"			=>esc_html__( "Insert a Custom Headline", 'factorypro' ),
		"base"					=> "factorypro_headline",
		'category'				=> "Text",
		"icon"					=> "icon-wpb-factorypro-headline",
		"params"				=> array(
			array(
				"type"			=> "textarea",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Content", 'factorypro' ),
				"param_name"	=> "content",
				"value"			=> "",
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Headline Type", 'factorypro' ),
				"param_name"	=> "type",
				"value"			=> array(
					'h1' => 'h1',
					'h2' => 'h2',
					'h3' => 'h3',
					'h4' => 'h4',
					'h5' => 'h5',
					'h6' => 'h6',
					'Normal Text' => 'div',
				),
				"description"	=>esc_html__( "This is for SEO purposes and does not set the size (i.e. you can have an h1 that is small or an h6 that displays large)", 'factorypro' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Font", 'factorypro' ),
				"param_name"	=> "font",
				"value"			=> array(
					'Standard Headline Font' => 'font-inherit',
					'Special Font' => 'font-special',
				),
				"description"	=>esc_html__( "Headline Font & Special Font can be defined in Theme Options", 'factorypro' ),
				"group"	=>esc_html__( 'Custom Styling', 'factorypro' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Font Size", 'factorypro' ),
				"param_name"	=> "size",
				"value"			=> array(
					'Default' 		=> 'fontsize-inherit',
					'Extra Small' 	=> 'fontsize-xs',
					'Small' 		=> 'fontsize-s',
					'Medium' 		=> 'fontsize-m',
					'Large' 		=> 'fontsize-l',
					'Extra Large' 	=> 'fontsize-xl',
					'XXL' 			=> 'fontsize-xxl',
					'XXXL' 			=> 'fontsize-xxxl',
					'XXXXL' 			=> 'fontsize-xxxxl',
					'XXXXXL' 			=> 'fontsize-xxxxxl',
				),
				"description"	=>esc_html__( "Customize the Font Size or leave it at default (defined in Theme Options)", 'factorypro' ),
				"group"	=>esc_html__( 'Custom Styling', 'factorypro' ),
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Font Color", 'factorypro' ),
				"param_name"	=> "color",
				"value"			=> "",
				"description"	=>esc_html__( "Choose a custom Font Color or leave it at default (defined in Theme Options)", 'factorypro' ),
				"group"	=>esc_html__( 'Custom Styling', 'factorypro' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Font Weight", 'factorypro' ),
				"param_name"	=> "weight",
				"value"			=> array(
					'Default' => 'fontweight-inherit',
					'Font Weight 300' => 'fontweight-300',
					'Font Weight 400' => 'fontweight-400',
					'Font Weight 500' => 'fontweight-500',
					'Font Weight 600' => 'fontweight-600',
					'Font Weight 700' => 'fontweight-700',
					'Font Weight 800' => 'fontweight-800',
					'Font Weight 900' => 'fontweight-900',
				),
				"description"	=>esc_html__( "Choose a custom Font Weight or leave it at default (defined in Theme Options)", 'factorypro' ),
				"group"	=>esc_html__( 'Custom Styling', 'factorypro' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Line Height", 'factorypro' ),
				"param_name"	=> "lineheight",
				"value"			=> array(
					'Default' 		=> 'lh-inherit',
					'Line-Height 1.2' 	=> 'lh-12',
					'Line-Height 1.3' 	=> 'lh-13',
					'Line-Height 1.4' 	=> 'lh-14',
					'Line-Height 1.5' 	=> 'lh-15',
					'Line-Height 1.6' 	=> 'lh-16',
					'Line-Height 1.7' 	=> 'lh-17',
					'Line-Height 1.8'   => 'lh-18',
					'Line-Height 1.9' 	=> 'lh-19',
					'Line-Height 2.0' 	=> 'lh-20',
				),
				"description"	=>esc_html__( "For Large Fonts over more than 2 lines you might want to define that value", 'factorypro' ),
				"group"	=>esc_html__( 'Custom Styling', 'factorypro' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Bottom Line Style", 'factorypro' ),
				"param_name"	=> "bottom_lines",
				"value"			=> array(
					'Line Bottom' 		=> 'bottom-line',
					'Line Bottom Left' 		=> 'bottom-line-left',
					'No Line Bottom' 	=> 'no',
				),
				"group"	=>esc_html__( 'Custom Styling', 'factorypro' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Text Transform", 'factorypro' ),
				"param_name"	=> "transform",
				"value"			=> array(
					'Default' => 'transform-inherit',
					'Uppercase' => 'transform-uppercase',
				),
				"group"	=>esc_html__( 'Custom Styling', 'factorypro' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Text Align", 'factorypro' ),
				"param_name"	=> "align",
				"value"			=> array(
					'Center' => 'align-center',
					'Left' => 'align-left',
					'Right' => 'align-right',
				),
				"group"	=>esc_html__( 'Layout', 'factorypro' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Margin", 'factorypro' ),
				"param_name"	=> "margin",
				"value"			=> "0 0 20px 0",
				"description"	=>esc_html__( "Margin - topmargin rightmargin bottommargin leftmargin. Default: 0 0 20px 0", 'factorypro' ),
				"group"	=>esc_html__( 'Layout', 'factorypro' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Extra Class", 'factorypro' ),
				"param_name"	=> "class",
				"value"			=> "",
				"description"	=>esc_html__( "Add your own class and refer to it in your CSS file.", 'factorypro' ),
				"group"	=>esc_html__( 'Layout', 'factorypro' ),
			),
		)
	) );
}
add_action( 'vc_before_init', 'factorypro_headline_vc' );




//Google Map



if
(function_exists('vc_map'))
{

	vc_map( array(

			"name" => esc_html__("DC Google Map", 'factorypro'),

			"base" => "ggmap",

			"class" => "",

			"icon" => "icon-st",

			"category" => 'Content',

			"params" => array(

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("ID Map", 'factorypro'),

					"param_name" => "idmap",

					"value" => "",

					"description" => esc_html__("Ex: map-canvas, Please enter ID Map, map-canvas1, map-canvas2, map-canvas3, ..etc", 'factorypro')

				),

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Height Map", 'factorypro'),

					"param_name" => "height",

					"value" => 250,

					"description" => esc_html__("Please enter number height Map, 300, 350, 380, ..etc. Default: 250.", 'factorypro')

				),

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Latitude", 'factorypro'),

					"param_name" => "lat",

					"value" => 53.3525963,

					"description" => esc_html__("Please enter <a href='http://www.latlong.net/'>Latitude</a> google map. Default: 53.3525963.", 'factorypro')

				),

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Longitude", 'factorypro'),

					"param_name" => "long",

					"value" => -6.2623117,

					"description" => esc_html__("Please enter <a href='http://www.latlong.net/'>Longitude</a> google map. Default: -6.2623117", 'factorypro')



				),

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Zoom Map", 'factorypro'),

					"param_name" => "zoom",

					"value" => 18,

					"description" => esc_html__("Please enter Zoom Map, Default: 18", 'factorypro')

				),


				array(

					"type" => "attach_image",

					"holder" => "div",

					"class" => "",

					"heading" => "Icon Map marker",

					"param_name" => "icon",

					"value" => "",

					"description" => esc_html__("Icon Map marker, 58 x 67", 'factorypro')

				),



			)));



}

?>
