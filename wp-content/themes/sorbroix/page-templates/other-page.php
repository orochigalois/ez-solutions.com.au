<?php
/*
 * Template Name: Other Page
 * Description: A Page Template with a Page Builder design.
 */
$sorbroix_redux_demo = get_option('redux_demo');
get_header();
$page_img = get_post_meta(get_the_ID(),'_cmb_page_img', true); ?>
<?php if($page_img !=''){ ?>
<section class="banner_area" style="background: url(<?php echo esc_url($page_img);?>) no-repeat scroll center center;
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
                  <li class="active"><a href="#"><?php the_title(); ?></a></li>
              </ul>
          </div>
      </div>
  </section>
<?php if (have_posts()){ ?>
  
    <?php while (have_posts()) : the_post()?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  
  <?php }else {
    echo esc_html__( 'Page Canvas For Page Builder', 'sorbroix' );
  }?>
    <?php
get_footer();
?>