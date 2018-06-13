<?php get_header(); ?>

<!-- subheader begin -->
<section class="rich-header">            
    	<div class="container">
        <h1 class="page-title"><?php printf( esc_html__( 'All posts by: %s', 'factorypro' ), get_the_author() ); ?></h1>     
</div>
</section>

<!-- subheader close -->

<!-- content begin -->

<div id="content" class="blog-section">

    <div class="container">

        <div class="row">

            <div class="col-md-8 blog-content white-left">

                <div class="blog-list">

                 <?php if(have_posts()) : ?>  



                  <?php 

                  while (have_posts()) : the_post();

                  get_template_part( 'content', get_post_format() ) ;   // End the loop

                  endwhile;
                  
                  ?>


                <?php else: ?>



                    <h1><?php esc_html_e('Nothing Found Here!','factorypro'); ?></h1>



                <?php endif; ?>



                </ul>



                <div class="pagination text-center ">

                    <ul>

                        <?php echo factorypro_pagination(); ?>

                    </ul>
                </div>
                </div>

            </div>



            <div class="col-md-4">

                <?php get_sidebar();?>

            </div>

        </div>

    </div>

</div>

<!-- content close -->

<?php get_footer(); ?>