<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<?php if ( have_comments() ) : ?>
                
        <div class="s_comment_list">
                <h3><?php comments_number( esc_html__('0 Comments', 'sorbroix'), esc_html__('1 Comment', 'sorbroix'), esc_html__('% Comments', 'sorbroix') ); ?></h3>
              <div class="s_comment_list_inner">
          <?php wp_list_comments('callback=sorbroix_theme_comment'); ?>
          </div>
          <?php
                    // Are there comments to navigate through?
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                ?>
            <div class="text-center">
              <ul class="pagination">
                <li>
                  <?php //Create pagination links for the comments on the current post, with single arrow heads for previous/next
                  paginate_comments_links( 
                  array(
                  'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left"></i>', 'sorbroix' ),ENT_QUOTES),
                  'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right"></i>', 'sorbroix' ),ENT_QUOTES),
                  ));  ?>
                </li> 
              </ul>
            </div>
<?php endif; // Check for comment navigation ?>
<?php if ( ! comments_open() && get_comments_number() ) : ?>
                    <p class="no-comments"><?php echo esc_html__( 'Comments are closed.' , 'sorbroix' ); ?></p>
                <?php endif; ?> 
        </div><!-- End Comments -->
                <?php endif; ?> 

<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => '',        
                'class_form' => 'row contact_us_form',                         
                'title_reply'=> esc_html__( 'Leave a Comment', 'sorbroix' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="form-group col-sm-6">
                                            <input type="text" class="form-control" placeholder="'.esc_attr__('Enter your name', 'sorbroix').'">
                                        </div>',
                    'email' => '<div class="form-group col-sm-6">
                                            <input type="email" class="form-control" placeholder="'.esc_attr__('Enter your email address', 'sorbroix').'">
                                        </div>'  ,                                                                                 
                ) ),   
                'comment_field' => '<div class="form-group col-sm-12">
                                            <textarea class="form-control" name="comment"'.$aria_req.' placeholder="'.esc_attr__('Comments', 'sorbroix').'"></textarea>
                                        </div>',                    
                 'label_submit' => esc_html__( 'Post Comment', 'sorbroix' ),
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>
    <?php if ( comments_open() ) : ?>
      <div class="s_comment_area">
                                <div class="s_comment_inner">
    <?php comment_form($comment_args); ?>
    </div>
    </div>
                        <?php endif; ?> 