<?php
/**
 * The Footer widget areas
 */
?>
<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	 
	if (   ! is_active_sidebar( 'footer-area-1'  )
		&& ! is_active_sidebar( 'footer-area-2' )
		&& ! is_active_sidebar( 'footer-area-3'  )
		&& ! is_active_sidebar( 'footer-area-4' )
	)
		return;

	// If we get this far, we have widgets. Let do this.

	$count = 0;

	if ( is_active_sidebar( 'footer-area-1' ) )
	$count++;

	if ( is_active_sidebar( 'footer-area-2' ) )
		$count++;

	if ( is_active_sidebar( 'footer-area-3' ) )

		$count++;

	if ( is_active_sidebar( 'footer-area-4' ) )

		$count++;	

	$class = '';

	switch ( $count ) {

		case '1':

			$class = 'col-md-12';

			break;

		case '2':

			$class = 'col-md-6 col-sm-6';

			break;

		case '3':

			$class = 'col-md-4 col-sm-4';

			break;

		case '4':

			$class = 'col-md-3 col-sm-6';

			break;	

	}

?>
<?php if ( is_active_sidebar('footer-area-1') ) : ?>

<div class="<?php echo esc_attr( $class ); ?>">
  <?php dynamic_sidebar( 'footer-area-1' ); ?>
</div>
<!-- end col-lg-3 -->

<?php endif; ?>
<?php if ( is_active_sidebar('footer-area-2') ) : ?>
<div class="<?php echo esc_attr( $class ); ?>">
  <?php dynamic_sidebar( 'footer-area-2' ); ?>
</div>
<!-- end col-lg-3 -->

<?php endif; ?>
<?php if ( is_active_sidebar('footer-area-3') ) : ?>
<div class="<?php echo esc_attr( $class ); ?>">
  <?php dynamic_sidebar( 'footer-area-3' ); ?>
</div>
<!-- end col-lg-3 -->

<?php endif; ?>
<?php if ( is_active_sidebar('footer-area-4') ) : ?>
<div class="<?php echo esc_attr( $class ); ?>">
  <?php dynamic_sidebar( 'footer-area-4' ); ?>
</div>
<!-- end col-lg-3 -->

<?php endif; ?>
