<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php $factorypro_option = factorypro_global();  ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php if ( ! function_exists( 'has_site_icons' ) || ! has_site_icons() ) { ?>
        <link rel="icon" href="<?php echo esc_url($factorypro_option['favicon']['url']); ?>" type="image/png">
    <?php } ?>
    
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?> <?php if($factorypro_option['version_type']=='light'){echo 'data-skin="light"';} else ?>>
<div id="wrap">
	
<div class="social-top">

			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6">
<ul class="inline">
				<?php if($factorypro_option['h_mobile']) { ?>
									<li><span class="icon icon-Phone2"></span>&nbsp;<?php echo esc_html($factorypro_option['h_mobile']); ?></li>
									<?php } if($factorypro_option['email_id']) { ?>
									<li>&nbsp; &nbsp; &nbsp; <span class="icon icon-Mail"></span>&nbsp;<?php echo esc_html($factorypro_option['email_id']); ?></li>
									<?php }  ?>
</ul>								</div>
				<div class="col-sm-12 col-md-6 col-lg-6 text-right">
											<ul class="social-icons">
<?php if($factorypro_option['facebook']) { ?>
                <li><a target="_blank" class="facebook" href="<?php echo esc_url($factorypro_option['facebook']); ?>"> <i class="icons-facebook"></i></a></li>
                <?php } ?>
                <?php if($factorypro_option['twitter']) { ?>
                <li><a target="_blank" class="twitter" href="<?php echo esc_url($factorypro_option['twitter']); ?>"> <i class="icons-twitter"></i></a></li>
                <?php } ?>
                <?php if($factorypro_option['github']) { ?>
                <li><a target="_blank" class="github" href="<?php echo esc_url($factorypro_option['github']); ?>"><i class="icons-github"></i></a></li>
                <?php } ?>
                <?php if($factorypro_option['dribbble']) { ?>
                <li><a target="_blank" class="github" href="<?php echo esc_url($factorypro_option['dribbble']); ?>"><i class="icons-dribbble"></i></a></li>
                <?php } ?>
                <?php if($factorypro_option['linkedin']) { ?>
                <li><a target="_blank" class="linkedin" href="<?php echo esc_url($factorypro_option['linkedin']); ?>"><i class="icons-linkedin"></i></a></li>
                <?php } ?>
                <?php if($factorypro_option['behance']) { ?>
                <li><a target="_blank" class="behance" href="<?php echo esc_url($factorypro_option['behance']); ?>"><i class="icons-behance"></i></a></li>
                <?php } ?>
                
                <?php if($factorypro_option['instagram']) { ?>
                <li><a target="_blank" class="instagram" href="<?php echo esc_url($factorypro_option['instagram']); ?>"><i class="icons-instagram"></i></a></li>
                <?php } ?>
                <?php if($factorypro_option['youtube']) { ?>
                <li><a target="_blank" class="youtube" href="<?php echo esc_url($factorypro_option['youtube']); ?>"><i class="icons-youtube"></i></a></li>
                <?php } ?>
                <?php if($factorypro_option['skype']) { ?>
                <li><a target="_blank" class="skype" href="<?php echo esc_url($factorypro_option['skype']); ?>"><i class="icons-skype"></i></a></li>
                <?php } ?>
                <?php if($factorypro_option['google']) { ?>
                <li><a target="_blank" class="google" href="<?php echo esc_url($factorypro_option['google']); ?>"><i class="icons-googleplus"></i></a></li>
                <?php } ?>
</ul>										</div>		
			</div>
	</div>
	
		<!-- Header
		    ================================================== -->
		<header class="clearfix header active">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="top-line bottom_header">
					<div class="container clear_fix">
					<div class="pull-left logo">
						<a href="<?php echo esc_url( home_url('/') ); ?>">
		                <?php if($factorypro_option['logo']) { ?>
	                    <img src="<?php echo esc_url($factorypro_option['logo']['url']); ?>" alt="">
	                    <?php } else { ?>
	                    <img src="<?php echo get_template_directory_uri().'/img/logo.png' ?>" alt="">
	                     <?php }  ?>
	                	</a>
					</div>
					<div class="col-md-8 hidden-xs pull-right">
	        <div class="right-info">
					<div class="col-md-5">	
	         <div class="iconbox iconbox-style-2">
		         <?php if($factorypro_option['haddress']) { ?>
							<div class="iconbox-icon"><i class="pe-7s-map-marker" aria-hidden="true"></i></div>
									<div class="iconbox-content">
										<h4 class="uppercase"><?php echo esc_html($factorypro_option['haddress']); ?></h4>
									</div>
							</div>
						</div>
			 		<div class="col-md-4">
				<div class="iconbox iconbox-style-2">
					<?php } if($factorypro_option['hphone']) { ?>
							<div class="iconbox-icon"><i class="pe-7s-call" aria-hidden="true"></i></div>
									<div class="iconbox-content">
										<h4 class="uppercase"><?php echo wp_kses( $factorypro_option['hphone'], wp_kses_allowed_html('post') ); ?></h4>
									</div>
						</div>
						
			</div>		
	         <div class="col-md-3">
		         <?php } if($factorypro_option['quote_text']) { ?>
				 <div class="find-advisor pull-right">
						<a class="btn-theme" href="<?php echo esc_html($factorypro_option['quote_link']); ?>"><?php echo esc_html($factorypro_option['quote_text']); ?></a>
					</div>
					<?php }  ?>
	         </div>
			 
	        </div>
	       </div>
				</div>
				</div>
				<div class="mainmenu-area">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed menu-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="navbar-collapse " id="bs-example-navbar-collapse-1">
						<nav class="menu clearfix navbar-nav" role="navigation">
			                <?php
			                    $primarymenu = array(
			                        'theme_location'  => 'primary',
			                        'menu'            => '',
			                        'container'       => '',
			                        'container_class' => '',
			                        'container_id'    => '',
			                        'menu_class'      => 'menu',
			                        'menu_id'         => 'nav',
			                        'echo'            => true,
			                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
			                        'walker'          => new wp_bootstrap_navwalker(),
			                        'before'          => '',
			                        'after'           => '',
			                        'link_before'     => '',
			                        'link_after'      => '',
			                        'items_wrap'      => '<ul class="clearfix nav navbar-nav navbar-right">%3$s</ul>',
			                        'depth'           => 0,
			                    );
			                    if ( has_nav_menu( 'primary' ) ) {
			                        wp_nav_menu( $primarymenu );
			                    }
			                    else{
			                                echo esc_html__('No Menu Assigned!','factorypro');
			                        }
			                ?>

			            </nav>
						
					</div><!-- /.navbar-collapse -->
					
				 <div class="leading pull-right">
						<?php if($factorypro_option['hslogan']) { echo esc_html($factorypro_option['hslogan']);  } ?>

					</div>
				</div><!-- /.container -->
				</div>
			</nav>
		</header>
		<!-- End Header -->
