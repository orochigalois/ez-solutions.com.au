<?php
// register post type Portfolio
add_action( 'init', 'register_sorbroix_Portfolio' );
function register_sorbroix_Portfolio() {
    
    $labels = array( 
        'name' => __( 'Portfolio', 'sorbroix' ),
        'singular_name' => __( 'Portfolio', 'sorbroix' ),
        'add_new' => __( 'Add New Portfolio', 'sorbroix' ),
        'add_new_item' => __( 'Add New Portfolio', 'sorbroix' ),
        'edit_item' => __( 'Edit Portfolio', 'sorbroix' ),
        'new_item' => __( 'New Portfolio', 'sorbroix' ),
        'view_item' => __( 'View Portfolio', 'sorbroix' ),
        'search_items' => __( 'Search Portfolio', 'sorbroix' ),
        'not_found' => __( 'No Portfolio found', 'sorbroix' ),
        'not_found_in_trash' => __( 'No Portfolio found in Trash', 'sorbroix' ),
        'parent_item_colon' => __( 'Parent Portfolio:', 'sorbroix' ),
        'menu_name' => __( 'Portfolio', 'sorbroix' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List Portfolio',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'Portfolio', 'type' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'Portfolio', $args );
}
add_action( 'init', 'create_Type_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it Skillss for your posts

function create_Type_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like Skills
//first do the translations part for GUI

  $labels = array(
    'name' => __( 'Type', 'sorbroix' ),
    'singular_name' => __( 'Type', 'sorbroix' ),
    'search_items' =>  __( 'Search Type','sorbroix' ),
    'all_items' => __( 'All Type','sorbroix' ),
    'parent_item' => __( 'Parent Type','sorbroix' ),
    'parent_item_colon' => __( 'Parent Type:','sorbroix' ),
    'edit_item' => __( 'Edit Type','sorbroix' ), 
    'update_item' => __( 'Update Type','sorbroix' ),
    'add_new_item' => __( 'Add New Type','sorbroix' ),
    'new_item_name' => __( 'New Type Name','sorbroix' ),
    'menu_name' => __( 'Type','sorbroix' ),
  );     

// Now register the taxonomy

  register_taxonomy('type',array('Portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));

}


add_action( 'init', 'register_sorbroix_Service' );
function register_sorbroix_Service() {
    
    $labels = array( 
        'name' => __( 'Service', 'sorbroix' ),
        'singular_name' => __( 'Service', 'sorbroix' ),
        'add_new' => __( 'Add New Service', 'sorbroix' ),
        'add_new_item' => __( 'Add New Service', 'sorbroix' ),
        'edit_item' => __( 'Edit Service', 'sorbroix' ),
        'new_item' => __( 'New Service', 'sorbroix' ),
        'view_item' => __( 'View Service', 'sorbroix' ),
        'search_items' => __( 'Search Service', 'sorbroix' ),
        'not_found' => __( 'No Service found', 'sorbroix' ),
        'not_found_in_trash' => __( 'No Service found in Trash', 'sorbroix' ),
        'parent_item_colon' => __( 'Parent Service:', 'sorbroix' ),
        'menu_name' => __( 'Service', 'sorbroix' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List Service',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'Service', '' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'Service', $args );
}

?>