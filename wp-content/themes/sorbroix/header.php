<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php $sorbroix_redux_demo = get_option('redux_demo'); ?>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        ?>
    <link rel="shortcut icon" href="<?php if(isset($sorbroix_redux_demo['favicon']['url'])){?><?php echo esc_url($sorbroix_redux_demo['favicon']['url']); ?><?php }?>">
    <?php }?>
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php if(isset($sorbroix_redux_demo['header_select']) && $sorbroix_redux_demo['header_select']== '2'){?>
    <div class="right_sidebar_menu">
            <div class="right_menu_inner">
            <div class="close_menu bar_menu">
                <span></span>
                <span></span>
            </div>
            <div class="right_widget_inner">
                <?php if(isset($sorbroix_redux_demo['header_form'])){?>
                <?php echo do_shortcode($sorbroix_redux_demo['header_form']);?>
                <?php } ?>
            </div>
            </div>
        </div>
        <!--================Side Menu Area =================-->
        
        <!--================Header Area =================-->
        <header class="main_menu_area main_menu_area_two">
            <div class="header_top">
                <div class="container">
                    <div class="pull-left">
                        <?php if(isset($sorbroix_redux_demo['header_text1']) && $sorbroix_redux_demo['header_text1']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_text1']));?>
            <?php } ?>
                        <?php if(isset($sorbroix_redux_demo['header_text2']) && $sorbroix_redux_demo['header_text2']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_text2']));?>
            <?php } ?>
                    </div>
                    <div class="pull-right">
                        <ul class="header_social">
                        <?php if(isset($sorbroix_redux_demo['header_link1']) && $sorbroix_redux_demo['header_link1']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link1']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon1'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon1']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-facebook', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link2']) && $sorbroix_redux_demo['header_link2']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link2']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon2'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon2']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-twitter', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link3']) && $sorbroix_redux_demo['header_link3']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link3']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon3'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon3']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-google-plus', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link4']) && $sorbroix_redux_demo['header_link4']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link4']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon4'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon4']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-linkedin', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                        </ul>
                        <select class="selectpicker">
                            <?php if(isset($sorbroix_redux_demo['header_lang'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_lang']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '<option>EN</option>', 'sorbroix' );
                                    }
                                    ?>
                        </select>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_inner_area">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'sorbroix' ); ?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                <?php $sorbroix_redux_demo = get_option('redux_demo');if(isset($sorbroix_redux_demo['logo']['url'])){?>
                            <?php  if($sorbroix_redux_demo['logo']['url'] != ''){ ?>
                      <img src="<?php echo esc_url($sorbroix_redux_demo['logo']['url']); ?>" />
                      <?php }else{ ?>
                       <img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" />
                       <?php }?>
                                <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" />
                        <?php } ?>
                                <?php $sorbroix_redux_demo = get_option('redux_demo');if(isset($sorbroix_redux_demo['logo2']['url'])){?>
                            <?php  if($sorbroix_redux_demo['logo2']['url'] != ''){ ?>
                      <img src="<?php echo esc_url($sorbroix_redux_demo['logo2']['url']); ?>" />
                      <?php }else{ ?>
                       <img src="<?php echo get_template_directory_uri();?>/img/logo-3.png" />
                       <?php }?>
                                <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-3.png" />
                        <?php } ?>
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php 
                  wp_nav_menu( 
                  array( 
                        'theme_location' => 'primary',
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
                        'items_wrap'      => '<ul  class="nav navbar-nav  %2$s">%3$s</ul>',
                        'depth'           => 0,        
                    )
                 ); ?>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#test-search" class="popup-with-zoom-anim"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <?php }elseif(isset($sorbroix_redux_demo['header_select']) && $sorbroix_redux_demo['header_select']== '3'){?>
        <div class="right_sidebar_menu">
            <div class="right_menu_inner">
            <div class="close_menu bar_menu">
                <span></span>
                <span></span>
            </div>
            <div class="right_widget_inner">
                <?php if(isset($sorbroix_redux_demo['header_form'])){?>
                <?php echo do_shortcode($sorbroix_redux_demo['header_form']);?>
                <?php } ?>
            </div>
            </div>
        </div>
        <!--================Side Menu Area =================-->
        <!--================Header Area =================-->
        <header class="main_menu_area_three ab_menu_gap">
            <div class="header_top row m0">
                <div class="container">
                    <div class="pull-left">
                    <?php if(isset($sorbroix_redux_demo['header3_text']) && $sorbroix_redux_demo['header3_text']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header3_text']));?>
            <?php } ?>
                    </div>
                    <div class="pull-right">
                        <ul class="header_social">
                        <?php if(isset($sorbroix_redux_demo['header_link1']) && $sorbroix_redux_demo['header_link1']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link1']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon1'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon1']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-facebook', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link2']) && $sorbroix_redux_demo['header_link2']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link2']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon2'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon2']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-twitter', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link3']) && $sorbroix_redux_demo['header_link3']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link3']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon3'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon3']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-google-plus', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link4']) && $sorbroix_redux_demo['header_link4']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link4']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon4'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon4']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-linkedin', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                        </ul>
                        <select class="selectpicker">
                            <?php if(isset($sorbroix_redux_demo['header_lang'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_lang']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '<option>EN</option>', 'sorbroix' );
                                    }
                                    ?>
                        </select>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_logo_area row m0">
                <div class="container">
                    <div class="pull-left">
                        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><?php $sorbroix_redux_demo = get_option('redux_demo');if(isset($sorbroix_redux_demo['logo2']['url'])){?>
                            <?php  if($sorbroix_redux_demo['logo2']['url'] != ''){ ?>
                      <img src="<?php echo esc_url($sorbroix_redux_demo['logo2']['url']); ?>" />
                      <?php }else{ ?>
                       <img src="<?php echo get_template_directory_uri();?>/img/logo-3.png" />
                       <?php }?>
                                <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-3.png" />
                        <?php } ?></a>
                    </div>
                    <div class="pull-right">
                        <div class="media">
                            <div class="media-left">
                                <i class="<?php if(isset($sorbroix_redux_demo['header3_icon1'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header3_icon1']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'icon icon-Pointer', 'sorbroix' );
                                    }
                                    ?>"></i>
                            </div>
                            <div class="media-body">                                                        
                                <?php if(isset($sorbroix_redux_demo['header3_text1']) && $sorbroix_redux_demo['header3_text1']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header3_text1']));?>
            <?php } ?>                         
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="<?php if(isset($sorbroix_redux_demo['header3_icon2'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header3_icon2']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'icon icon-Phone2', 'sorbroix' );
                                    }
                                    ?>"></i>
                            </div>
                            <div class="media-body">
                                <?php if(isset($sorbroix_redux_demo['header3_text2']) && $sorbroix_redux_demo['header3_text2']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header3_text2']));?>
            <?php } ?>                   
                           </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="<?php if(isset($sorbroix_redux_demo['header3_icon3'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header3_icon3']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'icon icon-Timer', 'sorbroix' );
                                    }
                                    ?>"></i>
                            </div>
                            <div class="media-body">
                                <?php if(isset($sorbroix_redux_demo['header3_text3']) && $sorbroix_redux_demo['header3_text3']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header3_text3']));?>
            <?php } ?>                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m0 main_menu_bg">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'sorbroix' ); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php $sorbroix_redux_demo = get_option('redux_demo');if(isset($sorbroix_redux_demo['logo']['url'])){?>
                            <?php  if($sorbroix_redux_demo['logo']['url'] != ''){ ?>
                      <img src="<?php echo esc_url($sorbroix_redux_demo['logo']['url']); ?>" />
                      <?php }else{ ?>
                       <img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" />
                       <?php }?>
                                <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" />
                        <?php } ?>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php 
                  wp_nav_menu( 
                  array( 
                        'theme_location' => 'primary',
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
                        'items_wrap'      => '<ul  class="nav navbar-nav menu  %2$s">%3$s</ul>',
                        'depth'           => 0,        
                    )
                 ); ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><?php if(isset($sorbroix_redux_demo['header3_text4']) && $sorbroix_redux_demo['header3_text4']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header3_text4']));?>
            <?php } ?>   </li>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>            
        </header>
        <?php }elseif(isset($sorbroix_redux_demo['header_select']) && $sorbroix_redux_demo['header_select']== '4'){?>
        <header class="main_menu_area_four">
            <div class="header_logo_area_two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-3">
                            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><?php $sorbroix_redux_demo = get_option('redux_demo');if(isset($sorbroix_redux_demo['logo']['url'])){?>
                            <?php  if($sorbroix_redux_demo['logo']['url'] != ''){ ?>
                      <img src="<?php echo esc_url($sorbroix_redux_demo['logo']['url']); ?>" />
                      <?php }else{ ?>
                       <img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" />
                       <?php }?>
                                <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" />
                        <?php } ?></a>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="top-two-right">
                                <?php if(isset($sorbroix_redux_demo['header_button']) && $sorbroix_redux_demo['header_button']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_button']));?>
            <?php } ?>
                                <div class="top-panel">
                                    <ul class="nav top-contact-info">
                                        <li class="item item-phone">
                                            <?php if(isset($sorbroix_redux_demo['header_text1']) && $sorbroix_redux_demo['header_text1']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_text1']));?>
            <?php } ?>
                                        </li>
                                        <li class="item item-ad">
                                            <?php if(isset($sorbroix_redux_demo['header_text2']) && $sorbroix_redux_demo['header_text2']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_text2']));?>
            <?php } ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_inner_area_two">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'sorbroix' ); ?></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php $sorbroix_redux_demo = get_option('redux_demo');if(isset($sorbroix_redux_demo['logo']['url'])){?>
                            <?php  if($sorbroix_redux_demo['logo']['url'] != ''){ ?>
                      <img src="<?php echo esc_url($sorbroix_redux_demo['logo']['url']); ?>" />
                      <?php }else{ ?>
                       <img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" />
                       <?php }?>
                                <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" />
                        <?php } ?>
                        </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <?php 
                  wp_nav_menu( 
                  array( 
                        'theme_location' => 'primary',
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
                        'items_wrap'      => '<ul  class="nav navbar-nav menu  %2$s">%3$s</ul>',
                        'depth'           => 0,        
                    )
                 ); ?>
                 <ul class="nav navbar-nav menu">
                 <li></li>
                                    <li class="search"><a href="#test-search" class="popup-with-zoom-anim"><i class="icon icon-Search"></i></a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right social-nav">
                                    <?php if(isset($sorbroix_redux_demo['header_link1']) && $sorbroix_redux_demo['header_link1']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link1']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon1'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon1']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-facebook', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link2']) && $sorbroix_redux_demo['header_link2']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link2']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon2'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon2']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-twitter', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link3']) && $sorbroix_redux_demo['header_link3']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link3']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon3'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon3']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-google-plus', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link4']) && $sorbroix_redux_demo['header_link4']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link4']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon4'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon4']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-linkedin', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <?php }elseif(isset($sorbroix_redux_demo['header_select']) && $sorbroix_redux_demo['header_select']== '5'){?>
        <header class="main_menu_area_five">
            <div class="header_logo_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><?php $sorbroix_redux_demo = get_option('redux_demo');if(isset($sorbroix_redux_demo['logo2']['url'])){?>
                            <?php  if($sorbroix_redux_demo['logo2']['url'] != ''){ ?>
                      <img src="<?php echo esc_url($sorbroix_redux_demo['logo2']['url']); ?>" />
                      <?php }else{ ?>
                       <img src="<?php echo get_template_directory_uri();?>/img/logo-3.png" />
                       <?php }?>
                                <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-3.png" />
                        <?php } ?></a>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="top-two-right">
                                <?php if(isset($sorbroix_redux_demo['header_button']) && $sorbroix_redux_demo['header_button']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_button']));?>
            <?php } ?>
                                <div class="top-panel">
                                    <ul class="nav top-contact-info">
                                        <li class="item item-phone">
                                            <?php if(isset($sorbroix_redux_demo['header_text1']) && $sorbroix_redux_demo['header_text1']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_text1']));?>
            <?php } ?>
                                        </li>
                                        <li class="item item-ad">
                                            <?php if(isset($sorbroix_redux_demo['header_text2']) && $sorbroix_redux_demo['header_text2']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_text2']));?>
            <?php } ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_inner_area_two">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'sorbroix' ); ?></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php $sorbroix_redux_demo = get_option('redux_demo');if(isset($sorbroix_redux_demo['logo']['url'])){?>
                            <?php  if($sorbroix_redux_demo['logo']['url'] != ''){ ?>
                      <img src="<?php echo esc_url($sorbroix_redux_demo['logo']['url']); ?>" />
                      <?php }else{ ?>
                       <img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" />
                       <?php }?>
                                <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" />
                        <?php } ?>
                        </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <?php 
                  wp_nav_menu( 
                  array( 
                        'theme_location' => 'primary',
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
                        'items_wrap'      => '<ul  class="nav navbar-nav menu  %2$s">%3$s</ul>',
                        'depth'           => 0,        
                    )
                 ); ?>
                 <ul class="nav navbar-nav menu">
                 <li></li>
                                    <li class="search"><a href="#test-search" class="popup-with-zoom-anim"><i class="icon icon-Search"></i></a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right social-nav">
                                    <?php if(isset($sorbroix_redux_demo['header_link1']) && $sorbroix_redux_demo['header_link1']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link1']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon1'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon1']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-facebook', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link2']) && $sorbroix_redux_demo['header_link2']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link2']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon2'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon2']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-twitter', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link3']) && $sorbroix_redux_demo['header_link3']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link3']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon3'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon3']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-google-plus', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link4']) && $sorbroix_redux_demo['header_link4']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link4']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon4'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon4']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-linkedin', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <?php }else{ ?>
        <!--================Side Menu Area =================-->
        <div class="right_sidebar_menu">
            <div class="right_menu_inner">
            <div class="close_menu bar_menu">
                <span></span>
                <span></span>
            </div>
            <div class="right_widget_inner">
                <?php if(isset($sorbroix_redux_demo['header_form'])){?>
                <?php echo do_shortcode($sorbroix_redux_demo['header_form']);?>
                <?php } ?>
            </div>
            </div>
        </div>
        <!--================Side Menu Area =================-->
        <!--================Header Area =================-->
        <header class="main_menu_area">
            <div class="header_top">
                <div class="container">
                    <div class="pull-left">
                        <?php if(isset($sorbroix_redux_demo['header_text1']) && $sorbroix_redux_demo['header_text1']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_text1']));?>
            <?php } ?>
                        <?php if(isset($sorbroix_redux_demo['header_text2']) && $sorbroix_redux_demo['header_text2']!= ''){?>
             <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_text2']));?>
            <?php } ?>
                    </div>
                    <div class="pull-right">
                        <ul class="header_social">
                        <?php if(isset($sorbroix_redux_demo['header_link1']) && $sorbroix_redux_demo['header_link1']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link1']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon1'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon1']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-facebook', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link2']) && $sorbroix_redux_demo['header_link2']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link2']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon2'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon2']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-twitter', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link3']) && $sorbroix_redux_demo['header_link3']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link3']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon3'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon3']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-google-plus', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                            <?php if(isset($sorbroix_redux_demo['header_link4']) && $sorbroix_redux_demo['header_link4']!= ''){?>
                            <li><a href="<?php echo esc_url($sorbroix_redux_demo['header_link4']); ?>"><i class="<?php if(isset($sorbroix_redux_demo['header_icon4'])){?>
                                    <?php echo esc_attr($sorbroix_redux_demo['header_icon4']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-linkedin', 'sorbroix' );
                                    }
                                    ?>"></i></a></li>
                            <?php } ?>
                        </ul>
                        <?php if(isset($sorbroix_redux_demo['header_lang']) && $sorbroix_redux_demo['header_lang']!= ''){?>
                        <select class="selectpicker">
                                    <?php echo htmlspecialchars_decode(esc_attr($sorbroix_redux_demo['header_lang']));?>
                        </select>
                        <?php } ?>
                        <?php if(isset($sorbroix_redux_demo['header_form']) && $sorbroix_redux_demo['header_form']!= ''){?>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="menu_inner_area">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'sorbroix' ); ?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php $sorbroix_redux_demo = get_option('redux_demo');if(isset($sorbroix_redux_demo['logo']['url'])){?>
                            <?php  if($sorbroix_redux_demo['logo']['url'] != ''){ ?>
                      <img src="<?php echo esc_url($sorbroix_redux_demo['logo']['url']); ?>" />
                      <?php }else{ ?>
                       <img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" />
                       <?php }?>
                                <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-white.png" />
                        <?php } ?>
                        </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <?php 
                  wp_nav_menu( 
                  array( 
                        'theme_location' => 'primary',
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
                        'items_wrap'      => '<ul  class="nav navbar-nav  %2$s">%3$s</ul>',
                        'depth'           => 0,        
                    )
                 ); ?>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#test-search" class="popup-with-zoom-anim"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <?php } ?>