<?php

// Custom Heading
add_shortcode('heading', 'heading_func');

function heading_func($atts, $content = null)
{

	extract(shortcode_atts(array(

				'text'  => '',

				'tag'  =>  '',

				'size'  => '',

				'color'  => '',

				'align'  => '',

				'bot'  => '',

				'class'  => '',

			), $atts));


	$size1 = (!empty($size) ? 'font-size: '.$size.';' : '');

	$color1 = (!empty($color) ? 'color: '.$color.';' : '');

	$align1 = (!empty($align) ? 'text-align: '.$align.';' : '');

	$bot = (!empty($bot) ? 'margin-bottom: '.$bot.';' : '');

	$cl = (!empty($class) ? ' class= "'.$class.'"' : '');

	if ($tag==="")
	{
		$html = "<".'h1'.$cl.' style="' . $size1 . $align1 . $color1 . $bot .'">'. $text .'</'.'h1'.">";
	}
	else
	{
		$html = "<".$tag.$cl.' style="' . $size1 . $align1 . $color1 . $bot .'">'. $text .'</'.$tag.">";
	}

	return $html;

}

// Special Heading
add_shortcode('sheading', 'sheading_func');

function sheading_func($atts, $content = null)
{

	extract(shortcode_atts(array(

				'subhead'  => '',

				'subsize'  =>  '',

				'subcolor'  => '',

				'mainhead'  => '',

				'mainsize'  => '',

				'maincolor'  => '',

				'paragraph'  => '',
				
				'parasize'  => '',
				
				'paracolor'  => '',
				
				'mbottom'  => '',

			), $atts));

ob_start(); ?>

<div class="project-title title" style="margin-bottom: <?php echo htmlspecialchars_decode($mbottom); ?>;">
					<span class="sm-title" style="font-size: <?php echo htmlspecialchars_decode($subsize); ?>; color: <?php echo htmlspecialchars_decode($subcolor); ?>"><?php echo htmlspecialchars_decode($subhead); ?></span>
					<h2 class="box-header" style="font-size: <?php echo htmlspecialchars_decode($mainsize); ?>; color: <?php echo htmlspecialchars_decode($maincolor); ?>"><?php echo htmlspecialchars_decode($mainhead); ?></h2>
					<p style="font-size: <?php echo htmlspecialchars_decode($parasize); ?>; color: <?php echo htmlspecialchars_decode($paracolor); ?>"><?php echo htmlspecialchars_decode($paragraph); ?></p>
				</div>

<?php return ob_get_clean();

}


/*-----------------------------------------------------------------------------------*/
/* Counter
/*-----------------------------------------------------------------------------------*/
add_shortcode('factorypro_counter', 'factorypro_counter_function');

	function factorypro_counter_function( $atts, $content=null ) {
		extract(shortcode_atts(array(
			'number' => '3541',
			'title'  => '',
			'color'  => '#666666'
		), $atts));
		
		return '<div class="counter clearfix wpb_content_element"><div class="counter-number timer" style="color: '.esc_attr($color).' !important;">' .esc_html($number). '</div><span class="counter-title">' .esc_html($title). '</span> <p class="counter-content">' .do_shortcode($content). '</p></div>';
	}



// Icon Box Heading
add_shortcode('factorypro_iconbox', 'iconbox_func');

function iconbox_func($atts, $content = null)
{

	extract(shortcode_atts(array(

			'icon'      	=> 'fa-phone',
			'iconimg'		=> '',
			'title'			=> '',
			'iconcolor'		=> 'accent',
			'icon_animation' => 'none',
			'textcolor'		=> 'dark',
			'customcolor'	=> '',
			'url'			=> '',
			'style'			=> '1',
			'class'			=> '',
			'buttontext'	=> '',
			'buttoncolor'	=> '',
			'titlecolor'	=> '',
			'contentcolor'	=> '',
			'buttontcolor'	=> ''
			), $atts));

		$link="";
		if($customcolor != ''){
			$output_css = 'color: '.$customcolor.';';
		} else {
			$output_css = '';
		}

		if($iconimg == ''){
			$symbol = '<i class="fa '. esc_attr($icon) .' boxicon" style="'. esc_attr($output_css) .'"></i>';
		}
		else{
			$img_src = wp_get_attachment_image_src($iconimg, 'full');
			$symbol = "<img src='".esc_url($img_src[0])."' class='iconimg' />";
		}

		if($style == '1') {
			$out = '
			<div class="service-box '.esc_attr($class).' ">
						<div class="service-icon">
						'. $symbol .'
						</div>
						<a href=""><h3 >'. esc_html($title) .'</h3></a>
						<p >'. do_shortcode($content) .'</p>
					</div>';
		}
		elseif($style == '2') {
			$out = '
			<div class="tl-spoiler pad0 iconbox '.esc_attr($class).' iconbox-style-' .esc_attr($style).' icon-color-'.esc_attr($iconcolor).' color-'.esc_attr($textcolor).'">
                        <h6 class="ok-icon" style="color:'.$titlecolor.'"> '.$symbol.' &nbsp; &nbsp; '. esc_html($title) .'</h6>
                         <div class="su-clearfix tl-spoiler-content" style="color:'.$contentcolor.'">'. do_shortcode($content) . '</div>
                  </div>
			';
		}
		elseif($style == '3') {
			$out = '<div class="col-xs-12 col-sm-12 col-md-12 feature choose-section ' .esc_attr($class). ' wpb_content_element iconbox-style-'.esc_attr($style).' icon-color-'.esc_attr($iconcolor).' color-'.esc_attr($textcolor).'">
						<div class="feature-icon right">
							'.$symbol.'
						</div>
						<h4 class="text-uppercase">'. esc_html($title) .'</h4>
						<p>'. do_shortcode($content) . '</p>
					</div>';
		}
		
		return $out;

}

// Portfolio Filter

add_shortcode('foliof', 'foliof_func');
function foliof_func($atts, $content = null){
	extract(shortcode_atts(array(
		'style'		=>  'style1',
		'all'		=> 	'',
		'num'		=> 	'',
	), $atts));

	$all1 = (!empty($all) ? $all : 'ALL PROJECTS');
	$num1 = (!empty($num) ? $num : 10);

	ob_start();   
	if($style == 'style1') { ?> 
	<section id="project-version-one" class="projects-section projects-page-section">
				<div class="text-center">
					<ul class="gallery-filter filter">
						<li><a href="#" data-filter="*" class="selected"><?php echo htmlspecialchars_decode($all1); ?></a></li>
                    
                    <?php 

	                  $categories = get_terms('categories');

	                   foreach( (array)$categories as $categorie){

	                    $cat_name = $categorie->name;

	                    $cat_slug = $categorie->slug;

	                    $cat_count = $categorie->count;

	                  ?>
	                  <li><a href="#" data-filter=".<?php echo htmlspecialchars_decode( $cat_slug ); ?>"><?php echo htmlspecialchars_decode( $cat_name ); ?></a></li>
	                <?php } ?>
					</ul>
				</div>
			<div class="normal-gallery project-box col4" id="image-gallery-mix">
			<?php 

	          $args = array(   

	            'post_type' => 'portfolio',   

	            'posts_per_page' => $num1,	            

	          );  

	          $wp_query = new WP_Query($args);

	          while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

	          $cates = get_the_terms(get_the_ID(),'categories');

	          $cate_name ='';

	          $cate_slug = '';

	              foreach((array)$cates as $cate){

	              if(count($cates)>0){

	                $cate_name .= $cate->name.'<span>, </span> ' ;

	                $cate_slug .= $cate->slug .' ';     

	              } 


	          }

	        ?>
				<div class="project-post col-sm-3 col-xs-12 tank outside single-project-item mix <?php echo esc_attr($cate_slug); ?>">
					<div class="img-wrap">
						<?php $image = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                    <img src="<?php echo esc_url($image);?>" alt="">
						<div class="content">
							<div class="box">
														<div class="hover-box">
							<div class="bx">
							<h2><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h2>
							<span><?php echo factorypro_excerpt(); ?></span>
						</div>
						</div>
							</div>
						</div>
					</div>
				</div>
				 <!-- close gallery item -->
           <?php endwhile; wp_reset_postdata(); ?>
			</div>
	</section>
	<?php } elseif($style == 'style2') { ?> 
				<section id="projects-page-section" class="projects-page-section">
				<div class="text-center">
					<ul class="gallery-filter filter">
						<li><a href="#" data-filter="*" class="selected"><?php echo htmlspecialchars_decode($all1); ?></a></li>
                    
                    <?php 

	                  $categories = get_terms('categories');

	                   foreach( (array)$categories as $categorie){

	                    $cat_name = $categorie->name;

	                    $cat_slug = $categorie->slug;

	                    $cat_count = $categorie->count;

	                  ?>
	                  <li><a href="#" data-filter=".<?php echo htmlspecialchars_decode( $cat_slug ); ?>"><?php echo htmlspecialchars_decode( $cat_name ); ?></a></li>
	                <?php } ?>
					</ul>
				</div>
			<div class="normal-gallery project-box col2" id="image-gallery-mix">
				<?php 

	          $args = array(   

	            'post_type' => 'portfolio',   

	            'posts_per_page' => $num1,	            

	          );  

	          $wp_query = new WP_Query($args);

	          while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

	          $cates = get_the_terms(get_the_ID(),'categories');

	          $cate_name ='';

	          $cate_slug = '';

	              foreach((array)$cates as $cate){

	              if(count($cates)>0){

	                $cate_name .= $cate->name.'<span>, </span> ' ;

	                $cate_slug .= $cate->slug .' ';     

	              } 


	          }

	        ?>
				<div class="project-post col-sm-6 col-xs-12 tank outside single-project-item mix <?php echo esc_attr($cate_slug); ?>">
					<div class="img-wrap">
						<?php $image = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                    <img src="<?php echo esc_url($image);?>" alt="">
						<div class="content">
							<div class="box">
														<div class="hover-box">
							
							<div class="bx">
							<h2><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h2>
							<span><?php echo factorypro_excerpt(); ?></span>
						</div>
						</div>
							</div>
						</div>
					</div>
				</div>
				 <!-- close gallery item -->
           <?php endwhile; wp_reset_postdata(); ?>
			</div>
	</section>
	<?php } elseif($style == 'style3') { ?> 
	<section id="projects-page-section" class="projects-page-section">
				<div class="text-center">
					<ul class="gallery-filter filter">
						<li><a href="#" data-filter="*" class="selected"><?php echo htmlspecialchars_decode($all1); ?></a></li>
                    
                    <?php 

	                  $categories = get_terms('categories');

	                   foreach( (array)$categories as $categorie){

	                    $cat_name = $categorie->name;

	                    $cat_slug = $categorie->slug;

	                    $cat_count = $categorie->count;

	                  ?>
	                  <li><a href="#" data-filter=".<?php echo htmlspecialchars_decode( $cat_slug ); ?>"><?php echo htmlspecialchars_decode( $cat_name ); ?></a></li>
	                <?php } ?>
					</ul>
				</div>
			<div class="normal-gallery project-box col3" id="image-gallery-mix">
				<?php 

	          $args = array(   

	            'post_type' => 'portfolio',   

	            'posts_per_page' => $num1,	            

	          );  

	          $wp_query = new WP_Query($args);

	          while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

	          $cates = get_the_terms(get_the_ID(),'categories');

	          $cate_name ='';

	          $cate_slug = '';

	              foreach((array)$cates as $cate){

	              if(count($cates)>0){

	                $cate_name .= $cate->name.'<span>, </span> ' ;

	                $cate_slug .= $cate->slug .' ';     

	              } 


	          }

	        ?>
				<div class="project-post col-sm-6 col-xs-12 tank outside single-project-item mix <?php echo esc_attr($cate_slug); ?>">
					<div class="img-wrap">
						<?php $image = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                    <img src="<?php echo esc_url($image);?>" alt="">
						<div class="content">
							<div class="box">
														<div class="hover-box">
							<div class="bx">
							<h2><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h2>
							<span><?php echo factorypro_excerpt(); ?></span>
						</div>
						</div>
							</div>
						</div>
					</div>
				</div>
				 <!-- close gallery item -->
           <?php endwhile; wp_reset_postdata(); ?>
			</div>
	</section>
	<?php
	}
    return ob_get_clean();
}

// Buttons
add_shortcode('button', 'button_func');
function button_func($atts, $content = null)
{
	extract(shortcode_atts(array(

				'btntext'  => '',

				'btnlink'  => '',

				'icon'   => '',

				'style'  => '',

			), $atts));

	ob_start(); ?>

	<a class="<?php if
	($style=='sdark')
		{echo 'button2 sdark';} ?><?php if
	($style=='mdark')
		{echo 'button2 mdark';} ?><?php if
	($style=='ldark')
		{echo 'button2 ldark';} ?><?php if
	($style=='lwhite')
		{echo 'button2 lwhite';} ?><?php if
	($style=='mwhite')
		{echo 'button2 mwhite';} ?><?php if
	($style=='swhite')
		{echo 'button2 swhite';} ?><?php if
	($style=='small')
		{echo 'vc_button small';} ?><?php if
	($style=='medium')
		{echo 'vc_button medium';} ?><?php if
	($style=='large')
		{echo 'vc_button large';} ?><?php if
	($style=='ltransparent')
		{echo 'button2 large';} ?><?php if
	($style=='lbtransparent')
		{echo 'button3 large';} ?><?php if
	($style=='mtransparent')
		{echo 'button2 medium';} ?><?php if
	($style=='stransparent')
		{echo 'button2 small';} ?>" href="<?php echo esc_url($btnlink); ?>"><?php if
	($icon)
		{ ?><i class="icon-<?php echo esc_attr($icon); ?>"></i><?php } ?><?php echo esc_attr($btntext); ?></a>

	<?php return ob_get_clean();
}

// Blocquote
add_shortcode('blocquote', 'blocquote_func');
function blocquote_func($atts, $content = null)
{

	extract(shortcode_atts(array(

				'title' =>  '',
				'text'  => '',

			), $atts));

	ob_start(); ?>

		<div class="blocquote"><h4><?php echo esc_attr($title); ?></h4>
		<p><?php echo esc_attr($text); ?></p></div><br>

	<?php

	return ob_get_clean();
}


// Pricing Table

add_shortcode('pricingtable', 'pricingtable_func');
function pricingtable_func($atts, $content = null)
{
	extract(shortcode_atts(array(
				'title'   => '',
				'price'   => '',
				'currency' => '',
				'class'   => '',
				'buttontext' => '',
				'link'       => '',
				'month'      => '',
			), $atts));
	ob_start(); ?>


<ul class="pricing-table sec-border highlight-no <?php echo esc_attr($class); ?>" data-animation="fadeIn"><li class="pricing-title"><h6 class="sec-color"><?php echo esc_attr($title); ?></h6></li><li class="pricing-price"><h2 class="price"><?php echo esc_attr($price); ?></h2><span class="currency"><?php echo esc_attr($currency); ?></span><span class="pricing-duration special-subtitle"><?php echo esc_attr($month); ?></span></li>
<li class="pricing-feature no-highlight"><?php echo htmlspecialchars_decode($content); ?><li class="pricing-button"><div><a href="<?php echo esc_url($link); ?>"><?php echo esc_attr($buttontext); ?></a></div></li></ul>

	<?php
	return ob_get_clean();
}


//Newsletters
add_shortcode('newsletter_fitness', 'newsletter_func');
function newsletter_func($atts, $content = null)
{
	extract(shortcode_atts(array(
				'btntext' => ''
			), $atts));

	ob_start(); ?>

	<?php
	/**
	 * Detect plugin. For use on Front End only.
	 */
	include_once ABSPATH . 'wp-admin/includes/plugin.php';

	// check for plugin using plugin name
	if ( is_plugin_active( 'newsletter/plugin.php' ) )
	{
?>
	<br/>
	<div id="mc_embed_signup">
		<form id="mc-embedded-subscribe-form" class="newsletters-1" action="<?php echo esc_url( home_url('/') ); ?>wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
			<input name="ne" class="newsletter-email" type="email" data-icon="icon-envelope2" placeholder="<?php _e('Enter your email address', 'factorypro'); ?>">
			<button type="submit" class="button newsletter-submit d-btn d-btn-secondary d-btn-normal"><?php echo htmlspecialchars_decode($btntext); ?></button>
		</form>
	</div>

	<script type="text/javascript">
		if (typeof newsletter_check !== "function") {
			window.newsletter_check = function (f) {
			    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
			    if (!re.test(f.elements["ne"].value)) {
			        alert("The email is not correct");
			        return false;
			    }

			    return true;
			}
		}
	</script>

<?php } ?>

<?php
	return ob_get_clean();
}

// Call To Action Box

add_shortcode('ctabox', 'ctabox_func');

function ctabox_func($atts, $content = null)
{

	extract(shortcode_atts(array(

				'title'  =>  '',
				'icon1'  =>  '',
				'btn1'  =>  '',
				'link1'  =>  '',
				'icon2'  =>  '',
				'btn2'  =>  '',
				'link2'  =>  '',

			), $atts));

	ob_start(); ?>
	<div class="callto-action text-center">
						<h3 class=""><span class="call-title-text"><span class="call-title-text"><?php echo htmlspecialchars_decode($title); ?></span></span><a href="https://themeforest.net/checkout/13941544" class="button-one"><?php echo htmlspecialchars_decode($btn1); ?></a></h3>
					</div>
    <?php

	return ob_get_clean();

}

// Our Team
add_shortcode('team', 'team_func');
function team_func($atts, $content = null)
{
	extract(shortcode_atts(array(
				'photo'  =>  '',
				'name'  => '',
				'job'  => '',
				'icon1'  => '',
				'icon2'  => '',
				'icon3'  => '',
				'icon4'  => '',
				'icon5'  => '',
				'icon6'  => '',
				'url1'  => '',
				'url2'  => '',
				'url3'  => '',
				'url4'  => '',
				'url5'  => '',
				'url6'  => '',
			), $atts));

	$img = wp_get_attachment_image_src($photo, 'full');
	$img = $img[0];

	$icon11 = (!empty($icon1) ? '<li><a href="'.esc_url($url1).'" target="_blank" class="fa-'.esc_attr($icon1).'"></a></li>' : '');
	$icon22 = (!empty($icon2) ? '<li><a href="'.esc_url($url2).'" target="_blank" class="fa-'.esc_attr($icon2).'"></a></li>' : '');
	$icon33 = (!empty($icon3) ? '<li><a href="'.esc_url($url3).'" target="_blank" class="fa-'.esc_attr($icon3).'"></a></li>' : '');
	$icon44 = (!empty($icon4) ? '<li><a href="'.esc_url($url4).'" target="_blank" class="fa-'.esc_attr($icon4).'"></a></li>' : '');
	$icon55 = (!empty($icon5) ? '<li><a href="'.esc_url($url5).'" target="_blank" class="fa-'.esc_attr($icon5).'"></a></li>' : '');
	$icon66 = (!empty($icon6) ? '<li><a href="'.esc_url($url6).'" target="_blank" class="fa-'.esc_attr($icon6).'"></a></li>' : '');

	ob_start(); ?>
	
                            <div class="team-box">
                                <div class="team-inner">
                                     <img src="<?php echo esc_url($img); ?>" alt="" />
                                    <div class="mask"></div>
                                    <ul class="team-social-list"> 
                                        <?php echo htmlspecialchars_decode($icon22); ?>                                  
                                        <?php echo htmlspecialchars_decode($icon22); ?>
                                        <?php echo htmlspecialchars_decode($icon33); ?>  
                                        <?php echo htmlspecialchars_decode($icon44); ?>
                                        <?php echo htmlspecialchars_decode($icon55); ?>
                                        <?php echo htmlspecialchars_decode($icon66); ?>                                 
                                    </ul>
                                </div>                                
                                <h6><?php echo htmlspecialchars_decode($name); ?></h6>
                                <div class="subtext"><?php echo htmlspecialchars_decode($job); ?></div>
                            </div>                     

	<?php

	return ob_get_clean();
}



// Fun Facts

add_shortcode('facts', 'facts_func');

function facts_func($atts, $content = null)
{

	extract(shortcode_atts(array(

				'icon'  => '',
				'title'  => '',
				'color'  => '',
				'number' => '',
				'border' => '',

			), $atts));

	$color1 = (!empty($color) ? 'color: '.$color.';' : '');

	ob_start(); ?>

	<div class="child-element counter clearfix">
		<div class="<?php if
	($border=='yes')
		{echo 'count';}else
		{echo 'counts';} ?> icon-<?php echo esc_attr($icon); ?>" data-value="<?php echo esc_attr($number); ?>"></div>
		<p class="title-count" style="<?php echo esc_attr($color1); ?>"><?php echo esc_attr($title); ?></p>
	</div>

    <?php

	return ob_get_clean();

}

// Slider(use)
add_shortcode('slider', 'slider_func');

function slider_func($atts, $content = null)
{

	extract(shortcode_atts(array(

				'gallery'  => '',


			), $atts));

	ob_start(); ?>

	<div class="child-element carousel">
		<?php

	$img_ids = explode(",", $gallery);

	foreach
	( $img_ids as $img_id )
	{

		$meta = wp_prepare_attachment_for_js($img_id);

		$caption = $meta['caption'];

		$image_src = wp_get_attachment_image_src($img_id, ''); ?>
			<?php if
		($caption)
			{ ?>
				<div class="item"><a href="<?php echo esc_url($caption); ?>" data-lightbox-gallery="gallery1"><img src="<?php echo esc_url($image_src[0]); ?>" alt=""></a></div>
			<?php }else
			{ ?>
				<div class="item"><img src="<?php echo esc_attr($image_src[0]); ?>" alt=""></div>
			<?php } ?>
		<?php } ?>
	</div>
    <?php

	return ob_get_clean();

}

// Contact Address

add_shortcode('c-address', 'address_func');

function address_func($atts, $content = null)
{

	extract(shortcode_atts(array(

				'icon'  =>  '',

			), $atts));

$icon1 = wp_get_attachment_image_src($icon, 'full');

	$icon1 = $icon1[0];

	ob_start(); ?>
          
          	<div class="contact-detail"><span class="icon"><img src="<?php echo $icon1 ?>" alt=""></span>
                <div class="address">
                <?php echo htmlspecialchars_decode($content); ?>
                </div>
			</div>
	<?php



	return ob_get_clean();

}

//Blog & News
add_shortcode('blogs', 'blogs_func');


function blogs_func($atts, $content = null)
{

	extract(shortcode_atts(array(
				'num'    =>  '',
				'text_limit'  => '',
				'cat'    => '',
				'sort'    => '',
				'order'    => '',

			), $atts));

	ob_start(); ?>

		<?php
	$count = 0;
	//$number1 = (!empty($num)) ? $num : 3;
	$query_args = array('post_type' => 'post' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
	if
	( $cat ) $query_args['category_name'] = $cat;
	$query = new WP_Query($query_args) ;
?>

<?php if
	($query->have_posts()):    ?>

       <?php while
	($query->have_posts()): $query->the_post(); ?>
	
	
								<div class="col-md-<?php echo 12/$num; ?> col-sm-6 news-section-home news-section">
							<article>
								<div class="news-post">
								<div class="img-cap-effect">
					<div class="img-box">
						<?php
							$original_image = wp_get_attachment_url(get_post_thumbnail_id());
				$thumb_w = '360';
				$thumb_h = '210';	  
				$image = aq_resize($original_image, $thumb_w, $thumb_h, true);
				?>
						<img src="<?php echo esc_url($image); ?>" alt="">
						<div class="img-caption">
							<div class="box-holder"></div>
						</div>
					</div>
				</div>
								<div class="post-content-text">
									<ul class="blog_infos nav">
                            <li><span><i class="fa fa-calendar"></i> &nbsp; <?php echo get_the_date('d'); echo get_the_date('-M'); echo get_the_date('-Y');?>  </span></li>
                            <li><span><i class="fa fa-comment"></i> &nbsp; <?php comments_number( esc_html__('0 comment', 'construct'), esc_html__('1 comment', 'construct'), esc_html__('% comments', 'construct') ); ?> </span></li>
                        </ul>
									<h2><a href="single-post.html"><?php the_title(); ?></a></h2>
									
									<?php $content = get_the_content();
  $trimmed_content = wp_trim_words( $content, 15 ); ?>
  <p><?php echo $trimmed_content; ?></p>
									<a class="btn readmore" href="<?php the_permalink(); ?>"><?php _e('Read more', 'factorypro') ?></a>
								</div>
							</div>
							</article>
							
						</div>
	
        <?php  endwhile;?>



	<?php     endif; wp_reset_postdata();

	$output = ob_get_contents();
	ob_get_clean();
	return $output ;

}


// Testimonials

add_shortcode('testimonial', 'testimonial_func');

function testimonial_func($atts, $content = null)
{

	extract(shortcode_atts(array(

				'number' => '',

			), $atts));

	ob_start(); ?>

	<div class="testimonial-box testimonials">
	<?php
	$number1 = (!empty($number)) ? $number : 3;
	$args = array(
		'post_type' => 'testimonial',
		'posts_per_page' => $number,

	);
	$testimonial = new WP_Query($args);
	if
	($testimonial->have_posts()):
		$i = 0;
	while ($testimonial -> have_posts()) : $testimonial -> the_post();
	$job = get_post_meta(get_the_ID(), '_cmb_job', true);
?>
		
          <div class="items bx-clone">
           <h2><?php the_title(); ?></h2>
							<span><?php echo $job; ?></span>
							<?php the_content(); ?>
          </div>
		<?php $i++; endwhile;?>
		<?php wp_reset_postdata(); ?>
	 	<?php endif; ?>
	</div>
    <?php
	return ob_get_clean();
}





// Clients Logo

add_shortcode('logos', 'logos_func');

function logos_func($atts, $content = null)
{

	extract(shortcode_atts(array(

				'gallery'  =>  '',


			), $atts));


	ob_start(); ?>


            <div class="child-element clients">
              	<?php

	$img_ids = explode(",", $gallery);

	foreach
	( $img_ids as $img_id )
	{

		$meta = wp_prepare_attachment_for_js($img_id);

		$caption = $meta['caption'];

		$title = $meta['title'];

		$image_src = wp_get_attachment_image_src($img_id, ''); ?>

	                <div class="client"><a href="<?php echo esc_url($caption); ?>" title="<?php echo esc_url($title); ?>"><img src="<?php echo esc_url($image_src[0]); ?>" alt=""></a></div>

	            <?php } ?>

	        </div>


	<?php

	return ob_get_clean();

}

// Social
add_shortcode('social', 'social_func');

function social_func($atts, $content = null)
{

	extract(shortcode_atts(array(


				'link1'  => '',

				'link2'  => '',

				'link3'  => '',

				'link4'  => '',

				'link5'  => '',

				'link6'  => '',

				'link7'  => '',

				'link8'  => '',

				'link9'  => '',

				'link10' => '',

			), $atts));


	ob_start(); ?>

	    <div class="social-links text-align-center">
			<?php if
	($link1)
		{ ?>
            <a target="_blank" href="<?php echo esc_url($link1); ?>" class="icons-twitter"></a>
            <?php } ?>
            <?php if
	($link2)
		{ ?>
            <a target="_blank" href="<?php echo esc_url($link2); ?>" class="icons-github"></a>
            <?php } ?>
            <?php if
	($link3)
		{ ?>
            <a target="_blank" href="<?php echo esc_url($link3); ?>" class="icons-dribbble"></a>
            <?php } ?>
            <?php if
	($link4)
		{ ?>
            <a target="_blank" href="<?php echo esc_url($link4); ?>" class="icons-linkedin"></a>
            <?php } ?>
            <?php if
	($link5)
		{ ?>
            <a target="_blank" href="<?php echo esc_url($link5); ?>" class="icons-behance"></a>
            <?php } ?>
            <?php if
	($link6)
		{ ?>
            <a target="_blank" href="<?php echo esc_url($link6); ?>" class="icons-facebook"></a>
            <?php } ?>
            <?php if
	($link7)
		{ ?>
            <a target="_blank" href="<?php echo esc_url($link7); ?>" class="icons-instagram"></a>
            <?php } ?>
            <?php if
	($link8)
		{ ?>
            <a target="_blank" href="<?php echo esc_url($link8); ?>" class="icons-youtube"></a>
            <?php } ?>
            <?php if
	($link9)
		{ ?>
            <a target="_blank" href="<?php echo esc_url($link9); ?>" class="icons-skype"></a>
            <?php } ?>
            <?php if
	($link10)
		{ ?>
            <a target="_blank" href="<?php echo esc_url($link10); ?>" class="icons-google"></a>
            <?php } ?>
		</div>

	<?php

	return ob_get_clean();

}


/*-----------------------------------------------------------------------------------*/
/* Imagebox 
/*-----------------------------------------------------------------------------------*/
if (!function_exists('factorypro_imagebox_function')) {
	function factorypro_imagebox_function( $atts, $content = null) {
		extract( shortcode_atts( array(
			'img' => '',
			'img_title' => '',
			'url' => '',
			'style' => '1',
			'margin_bot' => ''
		), $atts ) );
		
		$output_css="";
		
		if($url == '') {
			$return2 = "";
			$return3 = "";
		} else{
			$return2 = "<a href='".esc_url($url)."'>";
			$return3 = "</a>";
		}
		
		if($margin_bot != ''){
			$output_css = 'margin-bottom: '.$margin_bot.';';
		} else {
			$output_css = '';
		}

		if(!empty($img)) {
			$img_src = wp_get_attachment_image_src($img, 'full');
			$alt_text = get_post_meta($img , '_wp_attachment_image_alt', true);
			$return = '
						<div class="imagebox-img "></div>
						<div class="entry-image">
						'.$return2.'<img src="'.esc_url($img_src[0]).'" alt="'.esc_attr($alt_text).'" />
						<span class="entry-overlay"><i class="fa fa-expand"></i></span>'.$return3.'
						</div>';
		} else{
			$return = "";
		}
		  
		return '<div style="'.esc_attr($output_css).'" class="imagebox welcome_details wpb_content_element style-'.esc_attr($style).'">' .$return. '<a href="'.esc_url($url).'"><h3>'.$img_title.'</h3></a> <p class="content">' . do_shortcode($content) . '</p></div>';
	}
	add_shortcode('factorypro_imagebox', 'factorypro_imagebox_function');
}


/*-----------------------------------------------------------------------------------*/
/* divider
/*-----------------------------------------------------------------------------------*/
if (!function_exists('factorypro_divider_function')) {
	function factorypro_divider_function( $atts, $content = null) {
		extract( shortcode_atts( array(
			'style' => '1',
			'icon' => '',
			'margin' => '60px 0 60px 0'
		), $atts ) );
		  
		if($margin == '') {
			$return = "";
		} else{
			$return = "style='margin:".esc_attr($margin)." !important;'";
		}

		if($style == '8' && $icon != '') {
			$return2 = '<div class="factorypro-icon"><i class="fa '.esc_attr($icon).'"></i></div>';
		} else{
			$return2 = "";
		}
		  
		return '<div class="factorypro factorypro' .esc_attr($style). '" ' .$return. '>' .$return2. '</div>';  
	}
	add_shortcode('factorypro_factorypro', 'factorypro_divider_function');
}

/*-----------------------------------------------------------------------------------*/
/* New divider
/*-----------------------------------------------------------------------------------*/
if (!function_exists('factorypro_newdivider_function')) {
	function factorypro_newdivider_function( $atts, $content = null) {
		extract( shortcode_atts( array(
			'style' => 'solid',
			'line_color' => '#999999',
			'width' => '100%',
			'thickness' => '1px',
			'topmargin' => '0',
			'bottommargin' => '0',
			'align' => 'center',
		), $atts ) );
		  
		$css = '';

		if($style != ''){
			$css .= 'border-bottom-style: '.esc_attr($style).'; ';
		}

		if($style == 'transparent'){
			$css .= 'border-bottom-color: transparent; ';
		} else{
			if($line_color != ''){
				$css .= 'border-color: '.esc_attr($line_color).'; ';
			}
		}

		if($thickness != ''){
			$css .= 'border-bottom-width: '.esc_attr($thickness).'; ';
		}

		if($topmargin != ''){
			$css .= 'margin-top: '.esc_attr($topmargin).'; ';
		}

		if($bottommargin != ''){
			$css .= 'margin-bottom: '.esc_attr($bottommargin).'; ';
		}

		if($width != ''){
			$css .= 'width: '.esc_attr($width).'; ';
		}

		  
		return '<div class="newdivider align-'.esc_attr($align).'" style="'.esc_attr($css).'"></div><div class="clear"></div>';  
	}
	add_shortcode('factorypro_newdivider', 'factorypro_newdivider_function');
}

/*-----------------------------------------------------------------------------------*/
/* Headline
/*-----------------------------------------------------------------------------------*/
if (!function_exists('factorypro_headline_function')) {
	function factorypro_headline_function( $atts, $content = null) {
		extract( shortcode_atts( array(
			'type'   => 'h1',
			'margin' => '0 0 20px 0',
			'size'	 => 'fontsize-inherit',
			'color'	 => '',
			'weight' => 'fontweight-inherit',
			'lineheight' => 'lh-inherit',
			'bottom_lines' => 'bottom-line',
			'class'	 => '',
			'transform'	 => 'transform-inherit',
			'align'	 => 'align-center',
			'font'	 => 'font-inherit',
			'styles' => '1'
		), $atts ) );

		$style = '';

		if($margin != '') {
			$style .= 'margin: '.esc_attr($margin).';';
		}
		if($color != '') {
			$style .= ' color: '.esc_attr($color).';';
		}
		return '<' . esc_attr($type) . ' class="headline '.esc_attr($font).' '.esc_attr($bottom_lines).' '.esc_attr($size).' '.esc_attr($weight).' '.esc_attr($lineheight).' '.esc_attr($align).' '.esc_attr($transform).' '.esc_attr($class).'" style="'.esc_attr($style).'">' . $content . '</' . esc_attr($type) . '>';
	}
	add_shortcode('factorypro_headline', 'factorypro_headline_function');
}
// Google Map



add_shortcode('ggmap', 'ggmap_func');

function ggmap_func($atts, $content = null)
{

	extract( shortcode_atts( array(

				'idmap'  => 'map-1',

				'height'  => '',

				'lat'     => '',

				'long'    => '',

				'zoom'  => '',

				'icon'  => '',

			), $atts ) );



	$icon1 = wp_get_attachment_image_src($icon, 'full');

	$icon1 = $icon1[0];



	ob_start(); ?>




    <div height="<?php echo esc_attr($height); ?>" class="map" id="<?php echo esc_attr($idmap); ?>" data-x="<?php echo esc_js($lat);?>" data-y="<?php echo esc_js($long);?>" data-zoom="<?php echo esc_js($zoom);?>" data-marker="<?php echo esc_js($icon1);?>"></div>


    <script type="text/javascript">

    (function($){

		"use strict";

		var styleArray = [{"featureType":"all","stylers":[{"saturation":-100},{"gamma":0.5}]}];

/*
		if ($('body').data('skin') == 'dark') {
			styleArray = [{"stylers":[{"hue":"#ff1a00"},{"invert_lightness":true},{"saturation":-100},{"lightness":33},{"gamma":0.5}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2D333C"}]}];
		};
*/

		$('.map').each(function(){

			var $this     = $(this),
				x         = ($this.attr('data-x')) ? $this.data('x') : <?php echo esc_js($lat);?>,
				y         = ($this.attr('data-y')) ? $this.data('y') : <?php echo esc_js($long);?>,
				z         = ($this.attr('data-zoom')) ? parseInt($this.data('zoom')) : <?php echo esc_js($zoom);?>;
				

			var options = {
				center     : new google.maps.LatLng(x, y),
				zoom       : z,
				mapTypeId  : google.maps.MapTypeId.TERRAIN,
				//styles     : styleArray,
				scrollwheel: false
			};

			var map    = new google.maps.Map(document.getElementById($this.attr('id')), options);

			if ($this.attr('data-marker')) {
				var marker = new google.maps.Marker({ position: new google.maps.LatLng(x,y), map: map, icon: $this.data('marker'), customInfo: "Marker A"});
			};

		});

	})(jQuery);

   	</script>

<?php



	return ob_get_clean();



}