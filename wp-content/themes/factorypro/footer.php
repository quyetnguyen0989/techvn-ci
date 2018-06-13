<?php

/**
 * The template for displaying the footer
 */

$factorypro_option = factorypro_global(); 

?>
<!-- footer -->
	<footer class="mover">
		<div class=" up-footer">
			<div class="container">
 <?php get_sidebar('footer');?>				
			</div>
		</div>
	</footer> <!-- /footer -->
		<!-- #bottom-bar -->
	<?php if($factorypro_option['footer_text']) { ?>
	<section id="bottom-bar" class="mover copyright">
		<div class="container">
			<div class="row">
				<!-- .copyright -->
				<div class="copyright pull-left">
					<p><?php echo wp_kses( $factorypro_option['footer_text'], wp_kses_allowed_html('post') ); ?></p> 
				</div> <!-- /.copyright -->
				<!-- .credit -->
				<div class="credit pull-right">
					<p><?php echo esc_html($factorypro_option['created_text']); ?> </p>
				</div> <!-- /.credit -->
			</div>
		</div> 
	</section><!-- /#bottom-bar -->
	
<?php } ?>

<a class="icons-arrow-up7" id="top" href="#wrap"></a>
<?php wp_footer(); ?>
</body>
</html>