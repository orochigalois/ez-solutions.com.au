<?php
/*
 * Template Name: Template Services
 * Description: A Page Template with a Page Builder design.
 */
$sorbroix_redux_demo = get_option('redux_demo');
get_header(); ?>
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
                        <li class="active"><?php the_title(); ?></li>
                    </ul>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Prictice Area =================-->
<section class="practice_area sevice_offer pad_100">
    <div class="container">
        <div class="left_title">
            <h2><?php if(isset($sorbroix_redux_demo['ser_title'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['ser_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'We Offer Services', 'sorbroix' );
                                    }
                                    ?></h2>
            <p><?php if(isset($sorbroix_redux_demo['ser_subtitle'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['ser_subtitle']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain.', 'sorbroix' );
                                    }
                                    ?></p>
        </div>
        <div class="row practice_inner">
        <?php 
                        $args = array(   
                                    'post_type' => 'service',   
                                    'paged' => $paged,
                                );  
                                $wp_query = new WP_Query($args);
                                $i = 1;
                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                ?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="practice_item">
                    <div class="p_img_inner">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <a class="p_img" href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  ></a>
                        <?php } ?>
                        <a class="p_hover" href="<?php the_permalink();?>">
                            <h5><?php the_title(); ?></h5>
                        </a>
                    </div>
                    <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
                </div>
            </div>
            <?php 
                    endwhile;?>
        </div>
    </div>
</section>
<!--================End Prictice Area =================-->

<!--================Business Area =================-->
<?php if(isset($sorbroix_redux_demo['ser_template'])){?>
    <?php echo do_shortcode($sorbroix_redux_demo['ser_template']);?>
    <?php } ?>
    <?php
get_footer();
?>