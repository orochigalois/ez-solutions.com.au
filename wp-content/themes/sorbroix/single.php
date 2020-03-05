<?php
/**
 * The Template for displaying all single posts
 */
 $sorbroix_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
?>
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
          <h2><?php the_title(); ?></h2>
      </div>
  </div>
</section>
        <!--================End Banner Area =================-->
        
        <!--================Blog Details Area =================-->
        <section class="blog_details_area pad_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="blog_details_inner">
                            <div class="blog_item">
            <?php if ( has_post_thumbnail() ) { ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php } ?>
                                <div class="blog_text">
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
                                </div>
                            </div>
                            <div class="single-content">
                        <?php the_content(); ?>
                        <?php wp_link_pages( array(
            'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'sorbroix' ),
            'after'       => '</div>',
            'link_before' => '<span class="page-number">',
            'link_after'  => '</span>',
        ) ); ?>
                        </div>
                            <?php comments_template();?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="sidebar_area">
                            <?php get_sidebar();?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile; ?>
   <?php
get_footer();
?>