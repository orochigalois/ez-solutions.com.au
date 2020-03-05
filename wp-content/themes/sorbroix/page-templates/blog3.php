<?php
/*
 * Template Name: Blog 2 Column
 * Description: A Page Template with a Page Builder design.
 */
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
          <h2><?php if(isset($sorbroix_redux_demo['blog_title'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['blog_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Blog', 'sorbroix' );
                                    }
                                    ?></h2>
          <ul>
              <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'sorbroix' );?></a></li>
              <li class="active"><?php if(isset($sorbroix_redux_demo['blog_title'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['blog_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'My Blog', 'sorbroix' );
                                    }
                                    ?></li>
          </ul>
      </div>
  </div>
</section>
<!--================End Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_main_area pad_100">
            <div class="container">
                <div class="row blog_main_inner_two">
          <?php $args = array(    
                            'paged' => $paged,
                            'post_type' => 'post',
                            );
                        $wp_query = new WP_Query($args);
                        while (have_posts()): the_post(); 
                    ?>
                    <div class="col-sm-6">
                        <div class="blog_item">
                            <?php if ( has_post_thumbnail() ) { ?>
                      <a href="<?php the_permalink();?>" class="blog_img">
                          <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  >
                      </a>
                      <?php } ?>
                            <div class="blog_text">
                            <h5><?php the_time(get_option( 'date_format' ));?></h5>
                                <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
                                <p><?php if(isset($sorbroix_redux_demo['blog_excerpt'])){?>
                                <?php echo esc_attr(sorbroix_excerpt($sorbroix_redux_demo['blog_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(sorbroix_excerpt(50)); 
                                }
                                ?> </p>
                                <a class="read_btn" href="<?php the_permalink();?>"><?php if(isset($sorbroix_redux_demo['read_more'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['read_more']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'sorbroix' );
                                    }
                                    ?></a>
                            </div>
                        </div>
                    </div>
                  
            <?php endwhile; ?>
             </div>
            </div>
        </section>
        <!--================End Bolg Area =================-->
        <section class="pagination_two">
            <nav   class="blog_pagination">
                <?php sorbroix_pagination();?>
            </nav>
        </section>
    <?php
get_footer();
?>