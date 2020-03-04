<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
 $sorbroix_redux_demo = get_option('redux_demo');
get_header(); ?> 
<section class="error_area">
    <div class="container">
        <div class="error_inner_content">
            <h1><?php echo esc_html__( '404 Page', 'sorbroix' ); ?></h1>
            <h2><?php echo esc_html__( 'Oops! That page can not be found', 'sorbroix' ); ?></h2>
            <a class="learn_btn button-404" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Go to home page', 'sorbroix' ); ?></a>
        </div>
    </div>
</section>
  <?php get_footer(); ?>