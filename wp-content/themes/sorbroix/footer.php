<?php $sorbroix_redux_demo = get_option('redux_demo');?> 
<footer class="footer_weidget_area">
            <div class="container">
                <div class="row f_widget_inner">
                    <div class="col-sm-3 col-xs-6">
                        <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-1' ); ?>
                        <?php endif; ?> 
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-2' ); ?>
                        <?php endif; ?> 
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-3' ); ?>
                        <?php endif; ?> 
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-4' ); ?>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3><?php echo esc_html__( 'Search', 'sorbroix' );?></h3>
                <form action="<?php echo esc_url(home_url('/')) ?>">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="<?php echo esc_attr__( 'Search', 'sorbroix' );?>" value="<?php echo get_search_query() ?>" name="s" id="s">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                </form>
            </div>
        </div>
        <!--================End Search Box Area =================-->
        <?php wp_footer(); ?>
    </body>
</html>
