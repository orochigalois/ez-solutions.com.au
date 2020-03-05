<?php
$sorbroix_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/visual/shortcodes.php';
require_once get_template_directory() . '/visual/vc_shortcode.php';
//Theme Set up:
function sorbroix_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
  load_theme_textdomain('sorbroix', $lang);

    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu: Chosen menu in single, blog, pages ...', 'sorbroix' ),
    'service' =>  esc_html__( 'Service Navigation Menu: Chosen menu in sidebar on single service', 'sorbroix' ),
	) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'sorbroix_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;
 
function sorbroix_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'sorbroix' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Lato:300,400,400i,700,900|Montserrat:300,400,500,600,700|Open+Sans:300,400,600,700|Poppins:300,400,500,600,700&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function sorbroix_theme_scripts_styles() {
	$sorbroix_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style( 'flat-icon', get_template_directory_uri().'/vendors/flat-icon/flaticon.css');
    wp_enqueue_style( 'stroke-icon', get_template_directory_uri().'/vendors/stroke-icon/style.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-select', get_template_directory_uri().'/vendors/bootstrap-selector/bootstrap-select.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.css');
    wp_enqueue_style( 'magnify-popup', get_template_directory_uri().'/vendors/magnify-popup/magnific-popup.css');
    wp_enqueue_style( 'sorbroix-fonts', sorbroix_fonts_url(), array(), '1.0.0' );
    wp_enqueue_style( 'sorbroix-css', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css');
    wp_enqueue_style( 'sorbroix-style', get_stylesheet_uri(), array(), '2018-03-23' );


if(isset($sorbroix_redux_demo['rtl']) && $sorbroix_redux_demo['rtl']==1){
  wp_enqueue_style( 'rtl', get_template_directory_uri().'/rtl.css');  }

  if(isset($sorbroix_redux_demo['chosen-color']) && $sorbroix_redux_demo['chosen-color']==1){
    wp_enqueue_style( 'color', get_template_directory_uri().'/framework/color.php');
    } 
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

  //Javascript
    wp_enqueue_script("jquery", get_template_directory_uri()."/js/jquery-2.2.4.js",array(),false,true);
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("bootstrap-selector", get_template_directory_uri()."/vendors/bootstrap-selector/bootstrap-select.js",array(),false,true);
    wp_enqueue_script("owl-carousel", get_template_directory_uri()."/vendors/owl-carousel/owl.carousel.min.js",array(),false,true);
    wp_enqueue_script("waypoints", get_template_directory_uri()."/vendors/counterup/waypoints.min.js",array(),false,true);
    wp_enqueue_script("counterup", get_template_directory_uri()."/vendors/counterup/jquery.counterup.min.js",array(),false,true);
    wp_enqueue_script("magnify-popup", get_template_directory_uri()."/vendors/magnify-popup/jquery.magnific-popup.min.js",array(),false,true);
    wp_enqueue_script("imagesloaded", get_template_directory_uri()."/vendors/isotope/imagesloaded.pkgd.min.js",array(),false,true);
    wp_enqueue_script("isotope-pkgd", get_template_directory_uri()."/vendors/isotope/isotope.pkgd.min.js",array(),false,true);
    wp_enqueue_script("skrollr", get_template_directory_uri()."/vendors/skroller/skrollr.min.js",array(),false,true);
    wp_enqueue_script("scroll", get_template_directory_uri()."/vendors/scroll/jquery.nicescroll.min.js",array(),false,true);
    wp_enqueue_script("maps","https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE",array(),false,true);
    wp_enqueue_script("gmaps-min", get_template_directory_uri()."/js/gmaps.min.js",array(),false,true);
    wp_enqueue_script("sorbroix-theme", get_template_directory_uri()."/js/theme.js",array('jquery'),false,true);
   }
add_action( 'wp_enqueue_scripts', 'sorbroix_theme_scripts_styles' );

//Custom Excerpt Function
function sorbroix_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}
// Widget Sidebar
function sorbroix_widgets_init() {
	register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'sorbroix' ),
        'id'            => 'sidebar-1',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'sorbroix' ),        
		'before_widget' => '<aside id="%1$s" class="r_widget categories_widget search_widget recent_widget %2$s">',        
		'after_widget'  => '</aside>',        
		'before_title'  => '<div class="r_widget_title"><h3>',        
		'after_title'   => '</h3></div>'
    ) );
  register_sidebar( array(
        'name'          => esc_html__( 'Service Sidebar', 'sorbroix' ),
        'id'            => 'sidebar-2',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'sorbroix' ),        
    'before_widget' => '<div class="tt-widget">',        
    'after_widget'  => '</div>',        
    'before_title'  => '<h3 class="tt_widget_title">',        
    'after_title'   => '</h3>'
    ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget Area', 'sorbroix' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'sorbroix' ),
    'before_widget' => '<div class="footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget Area', 'sorbroix' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'sorbroix' ),
    'before_widget' => '<div class="footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Three Widget Area', 'sorbroix' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'sorbroix' ),
    'before_widget' => '<div class="footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Four Widget Area', 'sorbroix' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'sorbroix' ),
    'before_widget' => '<div class="footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'sorbroix_widgets_init' );

//function tag widgets
function sorbroix_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'sorbroix_tag_cloud_widget' );
function sorbroix_excerpt() {
  $sorbroix_redux_demo = get_option('redux_demo');
  if(isset($sorbroix_redux_demo['blog_excerpt'])){
    $limit = $sorbroix_redux_demo['blog_excerpt'];
  }else{
    $limit = 80;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//pagination
function sorbroix_pagination($pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
    'format'    => '',
    'current'     => max( 1, get_query_var('paged') ),
    'total'     => $pages,
    'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left" aria-hidden="true"></i>', 'sorbroix' ),ENT_QUOTES),
    'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right" aria-hidden="true"></i>', 'sorbroix' ),ENT_QUOTES),
    'type'      => 'list',
    'end_size'    => 3,
    'mid_size'    => 3
);
    $return =  paginate_links( $pagination );
  echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
}

function sorbroix_search_form( $form ) {
    $form = '
  <form  method="get" class="search-form" action="' . esc_url(home_url('/')) . '"> 
            <input type="search" class="form-control" placeholder="'.esc_attr__('Search', 'sorbroix').'" value="' . get_search_query() . '" name="s" id="s"> 
  </form>
	';
    return $form;
}
add_filter( 'get_search_form', 'sorbroix_search_form' );
//Custom comment List:

// Comment Form
function sorbroix_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
  <div class="media">
    <?php if(get_avatar($comment,$size='70' ) != ''){?>
    <div class="media-left">
        <?php echo get_avatar($comment,$size='70' ); ?>
    </div>
    <?php }?>
    <div class="media-body">
        <h4><?php printf( get_comment_author_link()) ?></h4>
        <div class="comment_text"><?php comment_text() ?></div>
        <div class="date_rep">
            <?php the_time('F j, Y'); ?> - <?php the_time('g:i a'); ?>
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>  
        </div>
    </div>
</div>
<?php
}


function sorbroix_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
    $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
    $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
    $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
    $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
    $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
    $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
    $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
    $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
    $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
    $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
    $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
    $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'sorbroix_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){

vc_add_param('vc_row',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Chosen type row', 'sorbroix' ),
                             'param_name' => 'type_row',
                             'value' => array(
                                esc_html__( 'None Section', 'sorbroix' ) => 'type2',
                                esc_html__( 'Slider Area', 'sorbroix' ) => 'slider_area',
                                esc_html__( 'Slider Area 2', 'sorbroix' ) => 'slider_area2',
                                esc_html__( 'Slider Area 4', 'sorbroix' ) => 'slider_area4',
                                esc_html__( 'Slider Area 5', 'sorbroix' ) => 'slider_area5',
                                esc_html__( 'Welcome', 'sorbroix' ) => 'welcome',
                                esc_html__( 'Welcome 2', 'sorbroix' ) => 'welcome2',
                                esc_html__( 'Since Area', 'sorbroix' ) => 'since_area',
                                esc_html__( 'Testimonials Area', 'sorbroix' ) => 'testimonials',
                                esc_html__( 'Testimonials Area 2', 'sorbroix' ) => 'testimonials2',
                                esc_html__( 'Testimonials Area 3', 'sorbroix' ) => 'testimonials3',
                                esc_html__( 'Contact Area', 'sorbroix' ) => 'contact_querry_area',
                                esc_html__( 'Contact Area 2', 'sorbroix' ) => 'contact_querry_area2',
                                esc_html__( 'Contact Area 3', 'sorbroix' ) => 'contact',
                                esc_html__( 'Promo Area', 'sorbroix' ) => 'promo',
                                esc_html__( 'Offer Area', 'sorbroix' ) => 'offer',
                                esc_html__( 'Advisor', 'sorbroix' ) => 'advisor',
                                esc_html__( 'Advisor 2', 'sorbroix' ) => 'advisor2',
                                esc_html__( 'Mission Area', 'sorbroix' ) => 'mission',
                                esc_html__( 'FAQ Area', 'sorbroix' ) => 'faq',
                             ),
                             'description' => esc_html__( 'Select type row', 'sorbroix' )
      )); 

vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'sorbroix'),
                              "param_name" => "ses_title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "sorbroix"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Subtitle', 'sorbroix'),
                              "param_name" => "ses_subtitle",
                              "value" => "",
                              "description" => esc_html__("Section Subtitle, Leave a blank do not show frontend.", "sorbroix"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Desc', 'sorbroix'),
                              "param_name" => "ses_desc",
                              "value" => "",
                              "description" => esc_html__("Section Desc, Leave a blank do not show frontend.", "sorbroix"),   
    ));
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'sorbroix' ),
                             'param_name' => 'ses_image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'sorbroix' )
      ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section text btn', 'sorbroix'),
                              "param_name" => "ses_btn1",
                              "value" => "",
                              "description" => esc_html__("text btn of Section, Leave a blank do not show frontend.", "sorbroix"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Link btn', 'sorbroix'),
                              "param_name" => "ses_link1",
                              "value" => "",
                              "description" => esc_html__("Link btn of Section, Leave a blank do not show frontend.", "sorbroix"),   
    ));
// Add new Param in Column  
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Title', 'sorbroix'),
                              "param_name" => "title",
                              "value" => "",
                              "description" => esc_html__("Title of column", "sorbroix"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Subtitle', 'sorbroix'),
                              "param_name" => "subtitle",
                              "value" => "",
                              "description" => esc_html__("Subtitle of column", "sorbroix"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Container Class', 'sorbroix'),
                              "param_name" => "wap_class",
                              "value" => "",
                              "description" => esc_html__("Container Class", "sorbroix"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column id', 'sorbroix'),
                              "param_name" => "column_id",
                              "value" => "",
                              "description" => esc_html__("Column ID, Only use for content slider.", "sorbroix"),      
                            ) 
    );  
vc_add_param('vc_column',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Type', 'sorbroix' ),
                             'param_name' => 'type',
                             'value' => array(
                                esc_html__( 'None', 'sorbroix' ) => 'none',
                                esc_html__( 'Column', 'sorbroix' ) => 'column',
                                esc_html__( 'Accordion', 'sorbroix' ) => 'accordion',
                                esc_html__( 'Accordion 2', 'sorbroix' ) => 'accordion2',

                             ),
                             'description' => esc_html__( 'Select type section content', 'sorbroix' )
      )); 
vc_add_param('vc_column',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'sorbroix' ),
                             'param_name' => 'image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'sorbroix' )
      )); 
}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'sorbroix_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function sorbroix_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'      => esc_html__( 'Contact Form 7', 'sorbroix' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'sorbroix' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Classic Editor', 'sorbroix' ),
            'slug'      => 'classic-editor',
            'required'  => true,
        ),
      array(
            'name'               => esc_html__( 'WPBakery Visual Composer', 'sorbroix' ), // The plugin name.
            'slug'               => 'visualcomposer',
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'               => esc_html__( 'Revolution Slider', 'sorbroix' ), // The plugin name.
            'slug'               => 'revslider',
            'source'             => get_template_directory_uri() . '/framework/plugins/revslider.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'                     => esc_html__( 'Sorbroix Common', 'sorbroix' ),
            'slug'                     => 'sorbroix-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/sorbroix-common.zip',
        )
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'sorbroix' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'sorbroix' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'sorbroix' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'sorbroix' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'sorbroix' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'sorbroix' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'sorbroix' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'sorbroix' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'sorbroix' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'sorbroix' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'sorbroix' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'sorbroix' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'sorbroix' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'sorbroix' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'sorbroix' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'sorbroix' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'sorbroix' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}



function sorbroix_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import Sorbroix',
            'import_file_url'            => 'http://shtheme.com/import/sorbroix/content.xml',
            'import_widget_file_url'     => 'http://shtheme.com/import/sorbroix/widgets.json',
            'import_preview_image_url'   => 'http://shtheme.com/import/sorbroix/Image-Preview.jpg',
            'import_notice'              => esc_html__( 'Import data example sorbroix', 'sorbroix' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'sorbroix_import_files' );




function sorbroix_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'primary' );
    

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home 1' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'sorbroix_after_import_setup' );




?>