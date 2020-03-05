<?php
/*
 * Template Name: Cases 3 Column
 * Description: A Page Template with a Page Builder design.
 */
$sorbroix_redux_demo = get_option('redux_demo');
get_header(); ?>
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
                    <h2><?php the_title(); ?></h2>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'sorbroix' );?></a></li>
                        <li class="active"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Start projects 3 col Area =================-->
        <section class="projects_area pad_100">
            <div class="container">
                <ul class="project_fillter fillter_two">
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
                                );  
                                $wp_query = new WP_Query($args);
                                $i = 1;
                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                                $cates = get_the_terms(get_the_ID(),'type');
                                $cate_name ='';
                                $cate_slug = '';
                                      foreach((array)$cates as $cate){
                            if(count($cates)>0){
                                $cate_name .= $cate->name.'/ ' ;
                                $cate_slug .= $cate->slug .' ';     
                                } 
                                } 
                ?>
                    <div class="col-sm-4 col-xs-6 <?php echo esc_attr($cate_slug);?>">
                        <div class="cases_item">
                            <div class="cases_image">
                                <?php if ( has_post_thumbnail() ) { ?>
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  ><?php }?>
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
        <section class="pagination_two">
            <nav   class="blog_pagination">
                <?php sorbroix_pagination();?>
            </nav>
        </section>
    <?php
get_footer();
?>