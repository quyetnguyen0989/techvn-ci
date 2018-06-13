<?php get_header(); ?>
<!-- subheader begin -->
<section class="rich-header">            
    	<div class="container">
        <h1 class="page-title">
          <?php the_title(); ?>
         </h1>

		<?php factorypro_breadcrumbs(); ?>
    	</div>
</section>

<div id="content" class="sbar page-content">

    <div class="container">

        <div class="row">

        <?php if (have_posts()){ ?>

            

            <div class="col-md-8 ">   

                <?php while (have_posts()) : the_post()?>
                    
                    <?php the_post_thumbnail() ?>
                    <div class="content-page">
                        <?php the_content(); ?>
                    </div>                    
                    <?php

                     if ( comments_open() || get_comments_number() ) :
                      comments_template();
                     endif; 
                    ?>
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
                <?php endwhile; ?>

            </div>

            <?php }else {
                esc_html_e('Page Canvas For Page Builder', 'factorypro'); 
            }?>

            <div class="col-md-4">

                <?php get_sidebar();?>

            </div>            

        </div>

    </div>

</div>



<?php get_footer(); ?>