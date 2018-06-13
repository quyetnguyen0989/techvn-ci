<?php
 $link_audio = get_post_meta(get_the_ID(),'_factorypro_link_audio', true);
 $link_video = get_post_meta(get_the_ID(),'_factorypro_link_video', true);
get_header();
?>
<!-- subheader begin -->

<section class="rich-header">
  <div class="container">
    <h1 class="page-title">
      <?php if($factorypro_option['blog_title'])
             echo esc_html($factorypro_option['blog_title']);
            else
             bloginfo('name');
           ?>
    </h1>
    <?php factorypro_breadcrumbs(); ?>
  </div>
</section>

<!-- subheader close --> 

<!-- CONTENT BLOG -->
<div id="content" class="blog-section">
<div class="container">
  <div class="row">
    <div class="col-md-8 white-left">
      <?php while (have_posts()) : the_post(); ?>
      <div class="blog-list blog-content">
        <div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php $format = get_post_format(); ?>
          <?php if($format=='audio'){ ?>
          <iframe class="widthfull" src="<?php echo esc_url($link_audio); ?>"></iframe>
          <?php } elseif($format=='video'){ ?>
          <iframe height="430" width="100%" src="<?php echo esc_url($link_video); ?>"></iframe>
          <?php } elseif($format=='gallery'){ ?>
          <div id="owl-demo-<?php the_ID(); ?>" class="post-media post-gallery">
            <?php if( function_exists( 'rwmb_meta' ) ) { ?>
            <?php $images = rwmb_meta( '_factorypro_images', "type=image" ); ?>
            <?php 
	                          foreach ( $images as $image ) { 
	                          ?>
            <?php $img = $image['full_url']; ?>
            <img src="<?php echo esc_url($img); ?>" alt="">
            <?php } ?>
            <?php } ?>
          </div>
          <script type="text/javascript">
	                          (function ($) { 
	                          "use strict";
	                            $("#owl-demo-<?php the_ID(); ?>").owlCarousel({
	                              slideSpeed: 400,
	                              paginationSpeed: 400,
	                              rewindSpeed: 800,
	                              singleItem: true
	                            });
	                          })(jQuery);
	                        </script>
          <?php } elseif($format=="") { ?>
          <?php 
							the_post_thumbnail();
							?>
          <?php } elseif($format=="aside") { ?>
          <?php 
							the_post_thumbnail();
							 ?>
          <?php } elseif($format=="quote") { ?>
          <?php 
							the_post_thumbnail();
				} elseif($format=='image') { ?>
                <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                <?php $images = rwmb_meta( '_factorypro_image', "type=image" ); ?>
                  <?php  
                          foreach ( $images as $image ) { 
                          ?>
                  <?php $img = $image['full_url']; ?>
                  <img src="<?php echo esc_url($img); ?>" alt="">
                  <?php } ?>
                <?php } }?>
          <div class="post-content-text">
	          <?php $title = get_the_title(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php if (strlen($title) == 0) esc_html_e('Untitled Posts', 'factorypro'); else echo esc_html($title); ?></a></h2>
            <ul class="blog_infos nav">
              <li><a href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i><?php echo get_the_date('d/m/Y');?></a></li>
              <li><span>Author :
                <?php the_author(); ?>
                </span></li>

            </ul>
            <p><?php the_content(); ?></p>
            <?php
                        wp_link_pages( array(
                            'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'factorypro' ) . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                            'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'factorypro' ) . ' </span>%',
                            'separator'   => '<span class="screen-reader-text">, </span>',
                        ) );
                    ?>
              <?php if ( has_tag() ) { ?>
              <span class="uppercase"> <i class="fa fa-tag"></i>
              <?php the_tags(); ?>
              </span>
              <?php } ?>
                      <?php endwhile;?>
        <?php 
                // Previous/next post navigation.
                the_post_navigation( array(
                  'next_text' => '<span class="meta-nav btn read-more" aria-hidden="true">' . esc_html__( 'Next >>', 'factorypro' ) . '</span> ' .
                    '<span class="screen-reader-text">' . esc_html__( 'Next post:', 'factorypro' ) . '</span> ' ,
                  'prev_text' => '<span class="meta-nav btn read-more" aria-hidden="true">' . esc_html__( '<< Previous', 'factorypro' ) . '</span> ' .
                    '<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'factorypro' ) . '</span> ' ,
                ) ); 
              ?>
        <?php 
                     if ( comments_open() || get_comments_number() ) :
                      comments_template();
                     endif;  ?>
		</div>
        </div>
      </div></div>
        <div class="col-md-4">
        <?php get_sidebar();?>
      </div>
    </div>
  </div>
</div>

<!-- END CONTENT BLOG -->

<?php get_footer(); ?>
