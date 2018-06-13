<div id="post-<?php the_ID(); ?>" <?php post_class("blog-post"); ?>>
								 <?php 
						the_post_thumbnail();
						?>
								<div class="post-content-text">
									<ul class="blog_infos nav">
                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i><?php echo get_the_date('d/m/Y');?></a></li>
                            <li><span>Author : <?php the_author(); ?> </span></li>
							<li><span>Comments : <?php comments_number( esc_html__('0 comment', 'factorypro'), esc_html__('1 comment', 'factorypro'), esc_html__('% comments', 'factorypro') ); ?></span></li>
                        </ul>
                        			<?php $title = get_the_title(); ?> 
									<h2><a href="<?php the_permalink(); ?>"><?php if (strlen($title) == 0) esc_html_e('Untitled Posts', 'factorypro'); else echo esc_html($title); ?></a></h2>
									
									<p><?php echo factorypro_excerpt(); ?></p>
									<a href="<?php the_permalink(); ?>" class="btn readmore"><?php esc_html_e('Read more', 'factorypro') ?></a> 
								</div>
							</div>