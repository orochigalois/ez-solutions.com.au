<?php
/**
 * The Template for displaying all single posts
 */
 $sorbroix_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
?>
<?php if(isset($sorbroix_redux_demo['ser_image']['url']) && $sorbroix_redux_demo['ser_image']['url'] != ''){?>
<section class="banner_area" style="background: url(<?php echo esc_url($sorbroix_redux_demo['ser_image']['url']);?>) no-repeat scroll center center;
    background-size: cover;
    position: relative;
    z-index: 3;">
<?php }else{?>
<section class="banner_area">
<?php } ?>
            <div class="container">
                <div class="banner_inner">
                    <h2><?php the_title(); ?></h2>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'sorbroix' );?></a></li>
                        <li class="active"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Faq Area =================-->
        <!--Start reapires-services-area -->
        <section class="row m0 business_service-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 pull-right">
                        <div class="business_service_content">
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 b-sidebar pull-left">
                        <div class="tt-widget"> 
                              <?php 
                        wp_nav_menu( 
                        array( 
                              'theme_location' => 'service',
                              'container' => '',
                              'menu_class' => '', 
                              'menu_id' => '',
                              'menu'            => '',
                              'container_class' => '',
                              'container_id'    => '',
                              'echo'            => true,
                               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                               'walker'            => new sorbroix_wp_bootstrap_navwalker(),
                              'before'          => '',
                              'after'           => '',
                              'link_before'     => '',
                              'link_after'      => '',
                              'items_wrap'      => '<ul  class="business-services-menu  %2$s">%3$s</ul>',
                              'depth'           => 0,        
                          )
                       ); ?>
                        </div>
                        <?php get_sidebar('service');?>
                    </div>
                    
                </div>
            </div>
        </section>
<?php endwhile; ?>
   <?php
get_footer();
?>