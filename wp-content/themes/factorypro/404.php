<?php

/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

<section class="error-section" <?php if($factorypro_option['error']) { ?> style='background: url("<?php echo esc_url($factorypro_option['error']['url']); ?> "' <?php }?>>
				<div class="error-content">
					<div class="container">
						<br>
						<h1><?php esc_html_e('oops! Page not found', 'factorypro'); ?></h1>
						<p><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.', 'factorypro'); ?></p>
						<a href="<?php echo esc_url(home_url('/')); ?>" class="button-one"><?php esc_html_e('Back To Home', 'factorypro'); ?></a>
					</div>
				</div>
			</section>

<?php get_footer(); ?>

