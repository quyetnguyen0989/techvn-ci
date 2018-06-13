<?php 
/*
 *  The template for displaying Category pages
 */
$textdoimain = 'ananke';
get_header();?>
<!--Portfolio section-->
<section id="portfolio" class="tCenter ofsTop ofsBottom">
	<!--Container-->
	<div class="container clearfix">
		<h1 class="title tCenter"><?php printf( __( 'Category Archives Portfolio: %s', '$textdoimain' ), single_cat_title( '', false ) ); ?></h1>
	</div>
	<!--End container-->
		
	<!-- Works list -->
	<div class=" works clearfix ">
		<!--Portfolio-->
		<ul class="portfolio clearfix">
			<?php while (have_posts()) : the_post(); ?>		
			<li class="item">
				<div class="itemDesc">
					<div class="itemDescInner">
					<h3><?php the_title();?><span><?php printf( __( '%s', '$textdoimain' ), single_cat_title( '', false ) ); ?></span></h3>
					<div class="doubleBtn itemBtn ">
						<a href="<?php echo esc_url(wp_get_attachment_url( get_post_thumbnail_id()));?>" class="doubleLeft folio"><i class="icon-eye"></i></a>
						<a href="<?php the_permalink(); ?>" class="doubleRight"><i class="icon-link"></i></a>
					</div>
					</div>
				</div>
				<?php $params = array( 'width' => 900, 'height' => 700 );
				  $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id()), $params ); ?>
				<img width="900" height="700" src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>" >
			</li>
			<?php endwhile;?>
		</ul>
		<!--End portfolio-->
	</div>
	<!-- End works list -->
</section>
<!--End portfolio section-->
<?php get_footer();?>