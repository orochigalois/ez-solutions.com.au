<?php
 $sorbroix_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php if(isset($sorbroix_redux_demo['blog_image']['url']) && $sorbroix_redux_demo['blog_image']['url'] != ''){?>
<section class="banner_area" style="background: url(<?php echo esc_url($sorbroix_redux_demo['blog_image']['url']);?>) no-repeat scroll center center;
    background-size: cover;
    position: relative;
    z-index: 3;">
<?php }else{?>
<section class="banner_area">
<?php } ?>
  <div class="container">
      <div class="banner_inner">
          <h2><?php
                    /*
                     * Queue the first post, that way we know what author
                     * we're dealing with (if that is the case).
                     *
                     * We reset this later so we can run the loop properly
                     * with a call to rewind_posts().
                     */
                    the_post();

                    printf( esc_html__( 'All posts by %s', 'sorbroix' ), get_the_author() );
                ?></h2>
      </div>
  </div>
</section>
<!--================End Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_main_area pad_100">
  <div class="container">
      <div class="row blog_main_inner">
          <div class="col-lg-9 col-md-8">
              <div class="blog_item_inner">
          <?php 
                        while (have_posts()): the_post(); 
                    ?>
                  <div class="blog_item">
            <?php if ( has_post_thumbnail() ) { ?>
                      <a href="<?php the_permalink();?>" class="blog_img">
                          <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  >
                      </a>
                      <?php } ?>
                      <div class="blog_text">
                          <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
                          <ul>
                              <li><span><?php if(isset($sorbroix_redux_demo['blog_by'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['blog_by']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'By :', 'sorbroix' );
                                    }
                                    ?></span>  <?php the_author_posts_link(); ?></li>
                              <li><a><?php the_time(get_option( 'date_format' ));?></a></li>
                              <li><?php comments_popup_link(esc_html__('0 Comments', 'sorbroix'), esc_html__('1 Comment', 'sorbroix'), esc_html__('% Comments', 'sorbroix'), '',esc_html__('Comment Off', 'sorbroix') ); ?></li>
                              <?php if ( is_sticky() )
     echo '<li class="featured-post">' . esc_html__( 'Sticky', 'sorbroix' ) . '</li>';
     ?>
                          </ul>
                          <p><?php if(isset($sorbroix_redux_demo['blog_excerpt'])){?>
                                <?php echo esc_attr(sorbroix_excerpt($sorbroix_redux_demo['blog_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(sorbroix_excerpt(50)); 
                                }
                                ?></p>
                          <a class="read_btn" href="<?php the_permalink();?>"><?php if(isset($sorbroix_redux_demo['read_more'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['read_more']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'sorbroix' );
                                    }
                                    ?></a>
                      </div>
                  </div>
                  
            <?php endwhile; ?>
              </div>
              <nav   class="blog_pagination">
                  <?php sorbroix_pagination();?>
              </nav>
          </div>
          <div class="col-lg-3 col-md-4">
              <div class="sidebar_area">
                  <?php get_sidebar();?>
              </div>
          </div>
      </div>
  </div>
</section>
    <?php
get_footer();
?>