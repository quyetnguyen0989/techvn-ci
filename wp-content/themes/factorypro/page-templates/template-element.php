<?php
/*
 * Template Name: Full Width
 * Description: A Page Template with a Page Builder design.
 */

get_header(); ?>
<section class="rich-header">            
    	<div class="container">
        <h1 class="page-title">
          <?php the_title(); ?>
         </h1>

		<?php factorypro_breadcrumbs(); ?>
    	</div>
</section>
<?php if (have_posts()){ ?>

	<div class="canvas">

		<?php while (have_posts()) : the_post()?>

			<?php the_content(); ?>

		<?php endwhile; ?>

	</div>

	<?php }else {

		esc_html_e('Page Canvas For Page Builder', 'factorypro'); 

	}?>



<?php get_footer(); ?>