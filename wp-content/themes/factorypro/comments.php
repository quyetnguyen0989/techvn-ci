<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<?php if ( have_comments() ) : ?>
<div class="comments">
<div id="thecomments">
<ol class="commentlist">
            <?php wp_list_comments('callback=factorypro_theme_comment'); ?>
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
            <nav class="navigation comment-navigation" role="navigation">          
                <div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'factorypro' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'factorypro' ) ); ?></div>
            </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'factorypro' ); ?></p>
        <?php endif; ?> 
</ol>
</div>
</div>     
<?php endif; ?>     

<div class="commentsform">
    <div id="addcomments">
        <div id="respond" class="comment-respond">
        <?php
            if ( is_singular() ) wp_enqueue_script( "comment-reply" );
                $aria_req = ( $req ? " aria-required='true'" : '' );
                $comment_args = array(
                        'id_form' => 'commentform',                                
                        'title_reply'=> esc_html__('Leave a reply','factorypro'),
                        'fields' => apply_filters( 'comment_form_default_fields', array(
                            'author' => '<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" class="form-control" name="author" type="text" value="" size="30"/></p>',
                            'email' => '<p class="comment-form-email"><label for="email">Email<span class="required">*</span></label> <input id="email" class="form-control" name="email" type="email" value="" size="30"/></p>', 
                        ) ),                                
                         'comment_field' => '<p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" class="form-control" name="comment" cols="45" rows="8"></textarea></p>',                                                   
                         'label_submit' => esc_html__( 'Post Comment', 'factorypro' ),
                         'comment_notes_before' => '<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>',
                         'comment_notes_after' => '',               
                )
            ?>
            <?php comment_form($comment_args); ?>
        </div>
    </div>
</div><!-- //LEAVE A COMMENT -->
                