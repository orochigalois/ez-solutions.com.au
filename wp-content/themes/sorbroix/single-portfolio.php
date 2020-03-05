<?php
/**
 * The Template for displaying all single posts
 */
 $sorbroix_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
    $port_img = get_post_meta(get_the_ID(),'_cmb_port_img', true);
    $port_cus = get_post_meta(get_the_ID(),'_cmb_port_cus', true);
    $port_cat = get_post_meta(get_the_ID(),'_cmb_port_cat', true);
    $port_date = get_post_meta(get_the_ID(),'_cmb_port_date', true);
    $port_status = get_post_meta(get_the_ID(),'_cmb_port_status', true);
    $port_demo = get_post_meta(get_the_ID(),'_cmb_port_demo', true);
    $port_tags = get_post_meta(get_the_ID(),'_cmb_port_tags', true);
?>
<?php if(isset($sorbroix_redux_demo['port_image']['url']) && $sorbroix_redux_demo['port_image']['url'] != ''){?>
<section class="banner_area" style="background: url(<?php echo esc_url($sorbroix_redux_demo['port_image']['url']);?>) no-repeat scroll center center;
    background-size: cover;
    position: relative;
    z-index: 3;">
<?php }else{?>
<section class="banner_area">
<?php } ?>
  <div class="container">
      <div class="banner_inner">
          <h2><?php if(isset($sorbroix_redux_demo['port_subtitle'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['port_subtitle']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Project Details', 'sorbroix' );
                                    }
                                    ?></h2>
          <ul>
              <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'sorbroix' );?></a></li>
              <li class="active"><?php if(isset($sorbroix_redux_demo['port_subtitle'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['port_subtitle']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Project Details', 'sorbroix' );
                                    }
                                    ?></li>
          </ul>
      </div>
  </div>
</section>
<!--================End Banner Area =================-->

<!--================Cases Details Area =================-->
<section class="cases_details_area pad_100">
  <div class="container">
      <div class="cases_details_inner">
          <div class="row cases_image_inner">
              <div class="col-sm-8">
              <?php if ( $port_img ) { ?>
                  <div class="cases_img">
                      <img src="<?php echo esc_url($port_img) ?>"  >
                  </div>
                  <?php } ?>
              </div>
              <div class="col-sm-4">
                  <div class="table-responsive customer_table"> 
                      <table class="table"> 
                          <tbody> 
                              <tr> 
                                  <td><?php if(isset($sorbroix_redux_demo['port_cus'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['port_cus']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Customer :', 'sorbroix' );
                                    }
                                    ?></td> 
                                  <td><?php echo esc_attr($port_cus) ?></td> 
                              </tr>
                              <tr> 
                                  <td><?php if(isset($sorbroix_redux_demo['port_cat'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['port_cat']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Category :', 'sorbroix' );
                                    }
                                    ?> </td> 
                                  <td><?php echo esc_attr($port_cat) ?></td> 
                              </tr>
                              <tr> 
                                  <td><?php if(isset($sorbroix_redux_demo['port_date'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['port_date']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Date :', 'sorbroix' );
                                    }
                                    ?></td> 
                                  <td><?php echo esc_attr($port_date) ?></td> 
                              </tr>
                              <tr> 
                                  <td><?php if(isset($sorbroix_redux_demo['port_status'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['port_status']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Status :', 'sorbroix' );
                                    }
                                    ?> </td> 
                                  <td><?php echo esc_attr($port_status) ?></td> 
                              </tr>
                              <tr> 
                                  <td><?php if(isset($sorbroix_redux_demo['port_demo'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['port_demo']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Live demo :', 'sorbroix' );
                                    }
                                    ?></td> 
                                  <td><?php echo esc_attr($port_demo) ?></td> 
                              </tr>
                              <tr> 
                                  <td><?php if(isset($sorbroix_redux_demo['port_tags'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($sorbroix_redux_demo['port_tags']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Tags :', 'sorbroix' );
                                    }
                                    ?></td> 
                                  <td><?php echo esc_attr($port_tags) ?></td> 
                              </tr>
                          </tbody> 
                      </table> 
                  </div>
              </div>
          </div>
          <div class="left_title">
              <h2><?php the_title(); ?></h2>
          </div>
          <?php the_content(); ?>
          <?php wp_link_pages(); ?>
      </div>
  </div>
</section>
<!--================End Cases Details Area =================-->

<!--================What Did Area =================-->
<?php if(isset($sorbroix_redux_demo['port_template'])){?>
    <?php echo do_shortcode($sorbroix_redux_demo['port_template']);?>
    <?php } ?>
<?php endwhile; ?>
   <?php
get_footer();
?>