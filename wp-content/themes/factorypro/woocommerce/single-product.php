<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
		<section class="rich-header"  <?php if($factorypro_option['product_thumbnail'] != ''){ ?> style="background-image: url('<?php echo esc_url($factorypro_option['product_thumbnail']['url']); ?>');" <?php } ?> >            
    	<div class="container">
       <h1><?php the_title(); ?></h1>
		<?php factorypro_breadcrumbs(); ?>
    	</div>
</section>

<div id="content" class="sbar blog-section">

    <div class="container">

        <div class="row">
		<div class="col-md-8 white-left">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
	</div>	

	<div class="col-md-4">
		<?php
			/**
			 * woocommerce_sidebar hook
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			do_action( 'woocommerce_sidebar' );
			//get_sidebar('shop-sidebar');
		?>
	</div>	
        </div></div></div>
	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>
