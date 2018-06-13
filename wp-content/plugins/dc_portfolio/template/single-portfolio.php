<?php
 global $theme_option;
 
 get_header(); 
?>

	<?php while (have_posts()) : the_post(); 
	$bg = get_post_meta(get_the_ID(),'_cmb_bg_folio', true);
	$tit = get_post_meta(get_the_ID(),'_cmb_folio_title', true);
	$stit = get_post_meta(get_the_ID(),'_cmb_folio_stitle', true); ?>

		<?php if($bg) { ?>
		<section class="cd-section bg-top">
			<div class="cd-block">
				<div class="project2-top blog-top" style="<?php if($bg) echo 'background-image: url('.$bg.');'; ?>">
				
					<div class="big-text-portfolio-top">
						<h2><?php if($tit) { echo htmlspecialchars_decode($tit); }else { the_title(); } ?></h2>
						<?php $cates = get_the_terms(get_the_ID(),'categories');
			                $cate_name ='';
			                $cate_slug = '';
			                  foreach((array)$cates as $cate){
			                  if(count($cates)>0){
			                    $cate_name .= $cate->name.'<b>, </b> ' ; 
			                  } 
			                }
			            ?>
						<p><?php if($stit) { echo htmlspecialchars_decode($stit); }else{ echo htmlspecialchars_decode($cate_name); }?></p>
					</div>
					
					<a href="#scroll-link" class="scroll scroll-down"></a>
					
				</div>
			</div>
		</section>

		<div id="scroll-link"></div>
		<?php } ?>

		<?php the_content(); ?>

	<?php endwhile; ?>

	<?php $prev_post = get_adjacent_post(false, '', true); $next_post = get_adjacent_post(false, '', false); ?>
	<?php if($prev_post || $next_post) { ?>
	<section class="section white-background padding-bottom">
		<div class="container">
			<div class="sixteen columns">	
				<div class="project-arrows-wrapper">
					<?php if($prev_post) { ?><a href="<?php echo get_permalink($prev_post->ID); ?>"><div class="project-arrow-left"><p><?php _e('prev','pallas'); ?></p></div></a><?php } ?>
					<?php if($next_post) { ?><a href="<?php echo get_permalink($next_post->ID); ?>"><div class="project-arrow-right"><p><?php _e('next','pallas'); ?></p></div></a><?php } ?>
				</div>
			</div>	
		</div>
	</section>
	<?php } ?>

<?php get_footer(); ?>
