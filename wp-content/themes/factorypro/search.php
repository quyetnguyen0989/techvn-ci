<?php get_header(); ?>


<!-- subheader begin -->
<section class="rich-header">            
    	<div class="container">
        <h1 class="page-title"><?php printf( esc_html__( 'Search results for: %s', 'factorypro' ), get_search_query() ); ?></h1> 
</div>
</section>

<!-- subheader close -->

<!-- content begin -->

<div id="content" class="blog-section">

    <div class="container">

        <div class="row">

            <div class="col-md-8 blog-content white-left">

                <ul class="blog-list">

                 <?php if(have_posts()) : ?>  



                  <?php 

                  while (have_posts()) : the_post();

                  get_template_part( 'content-search', get_post_format() ) ;   // End the loop

                  endwhile;
                  
                  ?>


                <?php else: ?>



                    <h1><?php esc_html_e( 'Nothing Found', 'factorypro' ); ?></h1>
                    <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'factorypro' ); ?></p>
                    <?php get_search_form(); ?>



                <?php endif; ?>



                </ul>



                <div class="pagination text-center ">

                    <ul>

                        <?php echo factorypro_pagination(); ?>

                    </ul>

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

