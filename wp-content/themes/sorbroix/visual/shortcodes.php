<?php 
$textdoimain = 'sorbroix';
$sorbroix_redux_demo = get_option('redux_demo');
global $pre_text;

$pre_text = 'VG ';
//add
add_shortcode('welcome', 'welcome_func');
function welcome_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'icon' => '',
        'link' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <?php if($type=='type2'){ ?>
    <div class="col-md-4 col-xs-6 welcome_item">
        <div class="media">
            <div class="media-left">
                <i class="<?php echo esc_attr($icon); ?>"></i>
            </div>
            <div class="media-body">
                <a href="<?php echo esc_url($link); ?>"><h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2></a>
                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
            </div>
        </div>
    </div>
<?php }else{ ?>
    <div class="welcome_f_item">
      <i class="<?php echo esc_attr($icon); ?>"></i>
      <h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
      <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
  </div>
  <?php } ?>
<?php  return ob_get_clean();
} 

add_shortcode('since_count_item', 'since_count_item_func');
function since_count_item_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="since_count_item">
      <h4><span class="counter"><?php echo htmlspecialchars_decode(esc_attr($title));?></span></h4>
      <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
  </div>
<?php  return ob_get_clean();
}  

add_shortcode('video', 'video_func');
function video_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'link1' => '',
        'link' => '',
        'textbutton' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <section class="video_text_area <?php if($type=='type2'){echo esc_html__('video_bg_c','sorbroix');} ?> pad_100">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-6">
                  <div class="video_left_text">
                      <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
                      <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                      <a class="learn_btn" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
                  </div>
              </div>
              <div class="col-md-6 col-sm-6">
                  <div class="video_box">
                      <img src="<?php echo esc_url($images[0]);?>" alt="">
                      <a class="popup-youtube" href="<?php echo esc_url($link1); ?>"><i class="flaticon-play-button"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </section>

<?php  return ob_get_clean();
}  



add_shortcode('testimonial', 'testimonial_func');
function testimonial_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'testimonial' => '',
        'image' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
        <?php if($type =='type2'){ ?>
    <div class="item">
        <img class="img-circle" src="<?php echo esc_url($images[0]);?>" alt="">
        <p><?php echo htmlspecialchars_decode(esc_attr($testimonial));?></p>
        <div class="author">
            <h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
            <img src="<?php echo get_template_directory_uri();?>/img/testimonials/quoto-2.png" alt="">
        </div>
    </div>

<?php }else{ ?>
    <div class="item testimonial_item">
        <p><img src="<?php echo get_template_directory_uri();?>/img/testimonials/quoto-1.png" alt=""><?php echo htmlspecialchars_decode(esc_attr($testimonial));?></p>
        <div class="media">
            <div class="media-left">
                <img src="<?php echo esc_url($images[0]);?>" alt="">
            </div>
            <div class="media-body">
                <h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
                <h5><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h5>
            </div>
        </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
}

add_shortcode('testimonial2', 'testimonial2_func');
function testimonial2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'testimonial' => '',
        'image' => '',
        'title2' => '',
        'subtitle2' => '',
        'testimonial2' => '',
        'image2' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?> 
     <div class="testimonial_slider">
        <div class="col-xs-6 testimonial_item">
        <p><img src="<?php echo get_template_directory_uri();?>/img/testimonials/quoto-1.png" alt=""><?php echo htmlspecialchars_decode(esc_attr($testimonial));?></p>
        <div class="media">
            <div class="media-left">
                <img src="<?php echo esc_url($images[0]);?>" alt="">
            </div>
            <div class="media-body">
                <h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
                <h5><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h5>
            </div>
        </div>
    </div>
    <div class="col-xs-6 testimonial_item testimonial_right">
        <p><img src="<?php echo get_template_directory_uri();?>/img/testimonials/quoto-1.png" alt=""><?php echo htmlspecialchars_decode(esc_attr($testimonial2));?></p>
        <div class="media">
            <div class="media-left">
                <img src="<?php echo esc_url($images2[0]);?>" alt="">
            </div>
            <div class="media-body">
                <h4><?php echo htmlspecialchars_decode(esc_attr($title2));?></h4>
                <h5><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></h5>
            </div>
        </div>
    </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('clients', 'clients_func');
function clients_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'post_gallery' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <?php $gallery = shortcode_atts( 
                    array(
                        'post_gallery'      =>  'post_gallery',
                    ), $atts );
        if($gallery !=''){ ?>
        <?php if($type =='type2'){ ?>
        <section class="our_advisor_area pad_100 padtop_0">
        <?php }elseif($type =='type3'){ ?>
        <section class="clients_slider_area">
        <?php }else{ ?>
    <section class="latest_news_area pad_100 padtop_0">
    <?php } ?>
            <div class="container">
                <div class="row m0">
                    <div class="client_slider owl-carousel">
                    <?php 
        $image_ids=explode(',',$gallery['post_gallery']);
        $sigle_img = wp_get_attachment_image_src($image_ids[0], ""); ?>
                        <div class="item">
                            <img src="<?php echo esc_url($sigle_img[0]);?>" alt="">
                        </div>
                        <?php
        for($i=1;$i<=99;$i++)
        {
         if($image_ids[$i]!="")
          {
          $imgs = wp_get_attachment_image_src($image_ids[$i], ""); ?>
                        <div class="item">
                            <img src="<?php echo esc_url($imgs[0]);?>" alt="">
                        </div>
                        <?php
          }
        } ?>
                    </div>
                </div>
            </div>
        </section>
      <?php } ?>
<?php  return ob_get_clean();
}

add_shortcode('expert_area', 'expert_area_func');
function expert_area_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'image1' => '',
        'title1' => '',
        'subtitle1' => '',
        'link' => '',
        'textbutton' => '',
        'image2' => '',
        'title2' => '',
        'subtitle2' => '',
        'detail1' => '',
        'detail2' => '',
        'detail3' => '',
        'detail4' => '',
    ), $atts));
    ob_start(); 
    $images1 = wp_get_attachment_image_src($image1,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?> 
    <section class="expert_area">
        <div class="container">
            <div class="row m0 expert_item">
                <div class="col-md-6 p0 expert_img">
                    <img src="<?php echo esc_url($images1[0]);?>" alt="">
                </div>
                <div class="col-md-6 p0 expert_content">
                    <div class="content">
                        <h2><?php echo htmlspecialchars_decode(esc_attr($title1));?></h2>
                        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?> </p>
                        <a href="<?php echo esc_url($link); ?>" class="submit_btn_b"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
                    </div>
                </div>
            </div>
            <div class="row m0 expert_item">
                <div class="col-md-6 p0 expert_img pull-right">
                    <img src="<?php echo esc_url($images2[0]);?>" alt="">
                </div>
                <div class="col-md-6 p0 expert_content expert-content-two pull-left">
                    <div class="content">
                        <h2><?php echo htmlspecialchars_decode(esc_attr($title2));?></h2>
                        <h4><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></h4>
                        <ul class="ex_list">
                        <?php if($detail1){ ?>
                            <li><i class="fa fa-arrow-circle-o-right"></i><?php echo htmlspecialchars_decode(esc_attr($detail1));?></li>
                            <?php } ?>
                        <?php if($detail2){ ?>
                            <li><i class="fa fa-arrow-circle-o-right"></i><?php echo htmlspecialchars_decode(esc_attr($detail2));?></li>
                            <?php } ?>
                        <?php if($detail3){ ?>
                            <li><i class="fa fa-arrow-circle-o-right"></i><?php echo htmlspecialchars_decode(esc_attr($detail3));?></li>
                            <?php } ?>
                        <?php if($detail4){ ?>
                            <li><i class="fa fa-arrow-circle-o-right"></i><?php echo htmlspecialchars_decode(esc_attr($detail4));?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php  return ob_get_clean();
} 

add_shortcode('promo', 'promo_func');
function promo_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'icon' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <img src="<?php echo esc_url($images[0]);?>" alt="">
        <div class="media promo-content">
            <div class="media-left">
                <i class="<?php echo esc_attr($icon); ?>"></i>
            </div>
            <div class="media-body">
                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
            </div>
        </div>
<?php  return ob_get_clean();
} 

add_shortcode('business', 'business_func');
function business_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'link' => '',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <section class="business_area" style="background: url(<?php echo esc_url($images[0]);?>) no-repeat scroll center center;
    background-size: cover;
    position: relative;
    z-index: 3;
    padding: 85px 0px 80px 0px;">
        <div class="container">
            <div class="row business_inner">
                <div class="col-md-6 col-sm-3"></div>
                <div class="col-md-6 col-sm-9">
                    <div class="business_text">
                        <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
                        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                        <a class="learn_btn" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php  return ob_get_clean();
} 

add_shortcode('offer', 'offer_func');
function offer_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'icon' => '',
        'link' => '',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="media offer-item">
        <div class="media-left">
            <i class="<?php echo esc_attr($icon); ?>"></i>
        </div>
        <div class="media-body">
            <h2 class="s_title"><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
            <a href="<?php echo esc_url($link); ?>" class="red-more"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
        </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('progressive', 'progressive_func');
function progressive_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'list' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <section class="business-progressive-area">
        <div class="business-img">
            <img src="<?php echo esc_url($images[0]);?>" alt="">
        </div>
        <div class="business-progress-right">
            <div class="business-progress-info">
                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                <h4><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h4>
                <ul class="progress-list">
                    <?php echo htmlspecialchars_decode(esc_attr($list));?>
                </ul>
            </div>
        </div>
    </section>
<?php  return ob_get_clean();
} 

add_shortcode('advisor', 'advisor_func');
function advisor_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'image' => '',
        'link' => '',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
     <div class="practice_item">
        <div class="p_img_inner">
            <a class="p_img" href="<?php echo esc_url($link); ?>"><img src="<?php echo esc_url($images[0]);?>" alt=""></a>
            <a class="p_hover" href="<?php echo esc_url($link); ?>">
                <h5><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></h5>
            </a>
        </div>
        <a href="<?php echo esc_url($link); ?>"><h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4></a>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('advisor2', 'advisor2_func');
function advisor2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'image' => '',
        'twitter' => '',
        'linkedin' => '',
        'facebook' => '',
        'skype' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
     <div class="practice_item">
        <div class="p_img_inner">
            <a class="p_img" href="<?php echo esc_url($facebook); ?>"><img src="<?php echo esc_url($images[0]);?>" alt=""></a>
            <ul class="p_hover">
                <li><a href="<?php echo esc_url($twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo esc_url($linkedin); ?>"><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="<?php echo esc_url($facebook); ?>"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="<?php echo esc_url($skype); ?>"><i class="fa fa-skype"></i></a></li>
            </ul>
        </div>
        <a href="<?php echo esc_url($facebook); ?>"><h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4></a>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('mission', 'mission_func');
function mission_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
        'image2' => '',
        'link' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?> 
     <div class="mission-content">
        <div class="left_title left-title2">
            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
        </div>
        <h3><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h3>
        <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        <div class="media">
            <div class="media-left">
                <img class="img-circle" src="<?php echo esc_url($images[0]);?>" alt="">
            </div>
            <div class="media-body">
                <a href="<?php echo esc_url($link); ?>"><img src="<?php echo esc_url($images2[0]);?>" alt=""></a>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('accordion', 'accordion_func');
function accordion_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'id' => '',
        'active' => 'in',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading<?php echo esc_attr($id); ?>">
            <h4 class="panel-title">
                <a class="<?php if($active=='noactive'){echo esc_html__('collapsed','sorbroix');} ?> " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo esc_attr($id); ?>" aria-expanded="true" aria-controls="collapse<?php echo esc_attr($id); ?>">
                    <i>+</i>
                    <i>-</i>
                   <?php echo htmlspecialchars_decode(esc_attr($title));?>
                </a>
            </h4>
        </div>
        <div id="collapse<?php echo esc_attr($id); ?>" class="panel-collapse collapse <?php echo esc_attr($active); ?>" role="tabpanel" aria-labelledby="heading<?php echo esc_attr($id); ?>">
            <div class="panel-body">
            <?php echo htmlspecialchars_decode(esc_attr($subtitle));?>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('about', 'about_func');
function about_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'image2' => '',
        'link' => '',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?> 
    <section class="about_firm_area pad_100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 about_firm_image">
                    <div class="item">
                        <img src="<?php echo esc_url($images[0]);?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo esc_url($images2[0]);?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video_left_text">
                        <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
                        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                        <a class="learn_btn" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php  return ob_get_clean();
} 

add_shortcode('manager', 'manager_func');
function manager_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
        'image2' => '',
        'link' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?> 
    <section class="executive_Manager_profile_area">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6 pull-right">
                    <div class="manager_description">
                        <div class="left_title">
                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                        </div>
                        <h5><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h5>
                        <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
                        <a href="<?php echo esc_url($link); ?>" class="sign"><img src="<?php echo esc_url($images2[0]);?>" alt=""></a>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 pull-left">
                    <div class="manager_img">
                        <img src="<?php echo esc_url($images[0]);?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php  return ob_get_clean();
} 

add_shortcode('services', 'services_func');
function services_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '', 
        'subtitle' => '', 
        'number'        =>      '',
        'orderpost' => '',
        'orderby' => '', 
    ), $atts));
    ob_start(); 
    global $redux_demo;
    ?> 
    <section class="practice_area pad_100">
            <div class="container">
                <div class="left_title">
                    <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                    <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                </div>
                <div class="practice_slider owl-carousel">
                <?php 
                        $args = array(   
                                    'post_type' => 'service',   
                                    'paged' => $paged,
                                    'posts_per_page' => $number,
                                    'order' => $orderpost,
                                    'orderby' => $orderby, 
                                );  
                                $wp_query = new WP_Query($args);
                                $i = 1;
                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                ?> 
                    <div class="item">
                        <div class="practice_item">
                            <div class="p_img_inner">
                                <?php if ( has_post_thumbnail() ) { ?>
                        <a class="p_img" href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt=""></a>
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

<?php  return ob_get_clean();
} 

add_shortcode('services2', 'services2_func');
function services2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '', 
        'subtitle' => '', 
        'desc' => '', 
        'number'        =>      '',
        'orderpost' => '',
        'orderby' => '', 
    ), $atts));
    ob_start(); 
    global $redux_demo;
    ?> 
    <section class="experience_details_area pad_100">
            <div class="container">
                <div class="row experience_inner">
                    <div class="col-sm-4">
                        <div class="ex_left_title">
                            <h3 class="single_bar_title"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="experience_right_text">
                            <h4><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h4>
                            <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
                        </div>
                    </div>
                </div>
                <?php if($number){ ?>
                <div class="practice_slider owl-carousel">
                <?php 
                        $args = array(   
                                    'post_type' => 'service',   
                                    'paged' => $paged,
                                    'posts_per_page' => $number,
                                    'order' => $orderpost,
                                    'orderby' => $orderby, 
                                );  
                                $wp_query = new WP_Query($args);
                                $i = 1;
                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                ?> 
                    <div class="item">
                        <div class="practice_item">
                            <div class="p_img_inner">
                                <?php if ( has_post_thumbnail() ) { ?>
                        <a class="p_img" href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt=""></a>
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
                <?php } ?>
            </div>
        </section>

<?php  return ob_get_clean();
} 

add_shortcode('portfolio', 'portfolio_func');
function portfolio_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '', 
        'subtitle' => '', 
        'number'        =>      '',
        'orderpost' => '',
        'orderby' => '', 
    ), $atts));
    ob_start(); 
    global $redux_demo;
    ?> 
    <section class="our_cases_area pad_100">
        <div class="container">
            <div class="left_title">
                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
            </div>
            <ul class="project_fillter">
                <li class="active" data-filter="*"><a href="#"><?php echo esc_html__( 'All', 'sorbroix' );?></a></li>
                    <?php 
                                    $categories = get_terms('type');   
                                     foreach( (array)$categories as $categorie){
                                        $cat_name = $categorie->name;
                                        $cat_slug = $categorie->slug;
                                ?>
                    <li data-filter=".<?php echo esc_attr($cat_slug);?>"><a href="#"><?php echo esc_attr($cat_name);?></a></li>
                    <?php } ?>
            </ul>
            <div class="row our_case_inner">
            <?php 
                        $args = array(   
                                    'post_type' => 'portfolio',   
                                    'paged' => $paged,
                                    'posts_per_page' => $number,
                                    'order' => $orderpost,
                                    'orderby' => $orderby, 
                                );  
                                $wp_query = new WP_Query($args);
                                $i = 1;
                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                                $cates = get_the_terms(get_the_ID(),'type');
                                $cate_name ='';
                                $cate_slug = '';
                                      foreach((array)$cates as $cate){
                            if(count($cates)>0){
                                $cate_name .= $cate->name.' / ' ;
                                $cate_slug .= $cate->slug .' ';     
                                } 
                                } 
                ?> 
                <div class="col-md-3 col-xs-6 <?php echo esc_attr($cate_slug);?>">
                    <div class="cases_item">
                        <div class="cases_image">
                                <?php if ( has_post_thumbnail() ) { ?>
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt=""><?php }?>
                                <a class="cases_link" href="<?php the_permalink();?>"><i class="icon icon-Linked"></i></a> 
                            </div>
                            <a href="<?php the_permalink();?>"><h5><?php the_title(); ?></h5></a>
                            <p><?php echo esc_attr($cate_name);?></p>
                    </div>
                </div>
                <?php 
                    endwhile;?>
            </div>
        </div>
    </section>

<?php  return ob_get_clean();
} 


add_shortcode('blog', 'blog_func');
function blog_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'link' => '',
        'textbutton' => '',
        'number'        =>      '3',
        'orderpost' => '',
        'orderby' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    $sorbroix_redux_demo = get_option('redux_demo');
    ?>
    <section class="latest_news_area <?php if($type=='type2'){echo esc_html__('latest_news_two','sorbroix');} ?> pad_100">
            <div class="container">
                <div class="row m0">
                    <div class="pull-left">
                        <div class="left_title">
                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="read_all" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
                    </div>
                </div>
                <div class="row latest_blog_inner">
        <?php 
                        $args = array(    
                            'paged' => $paged,
                            'posts_per_page' => $number,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'post',
                            );
                        $wp_query = new WP_Query($args);
                        $i=1;
                        while ($wp_query -> have_posts()): $wp_query -> the_post();
                    ?>
            <?php if ( has_post_thumbnail() ) { ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="blog_item">
                      <a href="<?php the_permalink();?>" class="blog_img">
                          <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                      </a>
                            <div class="text_blog">
                            <h5><?php the_time(get_option( 'date_format' ));?></h5>
                            <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                            <p> <?php if(isset($sorbroix_redux_demo['blog_excerpt'])){?>
                                <?php echo esc_attr(sorbroix_excerpt($sorbroix_redux_demo['blog_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(sorbroix_excerpt(50)); 
                                }
                                ?></p>
                            <div class="blog_user">
                                <h4><?php if(isset($sorbroix_redux_demo['blog_by'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['blog_by']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'By :', 'sorbroix' );
                                    }
                                    ?><?php the_author_posts_link(); ?></h4>
                            </div>
                        </div>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="text_blog">
                            <h5><?php the_time(get_option( 'date_format' ));?></h5>
                            <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                            <p> <?php if(isset($sorbroix_redux_demo['blog_excerpt'])){?>
                                <?php echo esc_attr(sorbroix_excerpt($sorbroix_redux_demo['blog_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(sorbroix_excerpt(50)); 
                                }
                                ?></p>
                            <div class="blog_user">
                                <h4><?php if(isset($sorbroix_redux_demo['blog_by'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['blog_by']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'By :', 'sorbroix' );
                                    }
                                    ?><?php the_author_posts_link(); ?></h4>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                     <?php $i++; ?>
        <?php endwhile; ?>
                </div>
            </div>
        </section>
<?php  return ob_get_clean();
}

add_shortcode('map', 'map_func');
function map_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'lat' => '',
        'long' => '',
        'image' => '',
        'zoom' => '',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    $images = wp_get_attachment_image_src($image,'');
    ?>  
    <div id="mapBox" class="req_map row m0" 
        data-lat="<?php echo esc_attr($lat);?>" 
        data-lon="<?php echo esc_attr($long);?>" 
        data-zoom="<?php echo esc_attr($zoom);?>" 
        data-marker="<?php echo esc_url($images[0]);?>" 
        data-info="<?php echo esc_attr($title);?>"
        data-mlat="<?php echo esc_attr($lat);?>"
        data-mlon="<?php echo esc_attr($long);?>">
    </div>

<?php  return ob_get_clean();
} 

add_shortcode('map2', 'map2_func');
function map2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'lat' => '',
        'long' => '',
        'image' => '',
        'zoom' => '',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    $images = wp_get_attachment_image_src($image,'');
    ?>  
    <section class="contact_map_area">
            <div id="mapBox1" class="mapBox1 row m0" 
                data-lat="<?php echo esc_attr($lat);?>" 
        data-lon="<?php echo esc_attr($long);?>" 
        data-zoom="<?php echo esc_attr($zoom);?>" 
        data-marker="<?php echo esc_url($images[0]);?>" 
        data-info="<?php echo esc_attr($title);?>"
        data-mlat="<?php echo esc_attr($lat);?>"
        data-mlon="<?php echo esc_attr($long);?>">
            </div>
        </section>

<?php  return ob_get_clean();
} 