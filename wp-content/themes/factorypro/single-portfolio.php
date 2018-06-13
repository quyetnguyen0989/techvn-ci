<?php
get_header(); ?>


<!-- subheader begin -->

<section class="rich-header">            
    	<div class="container">
        <h1 class="page-title">
           <?php the_title(); ?>
         </h1>

		<?php factorypro_breadcrumbs(); ?>
    	</div>
</section>

<div id="content" class="services-page-section white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="services-wrapp">
							<?php while (have_posts()) : the_post()?>
					<?php the_content(); ?>
				<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- subheader close -->
<?php get_footer(); ?>