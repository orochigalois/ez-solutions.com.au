<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
$textdomain = "sorbroix";
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	
    $meta_boxes[] = array(
        'id'         => 'page_setting',
        'title'      => 'Page Setting',
        'pages'      => array('page'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Page Image Background',
                'desc' => 'Input Image Background Banner Area on Other Page',
                'id'   => $prefix . 'page_img',
                'type'    => 'file',
                
            ),  
        )
    );

    $meta_boxes[] = array(
        'id'         => 'post_setting',
        'title'      => 'Post Setting',
        'pages'      => array('post'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
        )
    );

    $meta_boxes[] = array(
        'id'         => 'port_setting',
        'title'      => 'Portfolio Setting',
        'pages'      => array('portfolio'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Portfolio Image',
                'desc' => 'Input Image Content',
                'id'   => $prefix . 'port_img',
                'type'    => 'file',
                
            ),  
            array(
                'name' => 'Portfolio customer',
                'desc' => 'Input project customer',
                'id'   => $prefix . 'port_cus',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Portfolio category',
                'desc' => 'Input project category',
                'id'   => $prefix . 'port_cat',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Portfolio date',
                'desc' => 'Input project date',
                'id'   => $prefix . 'port_date',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Portfolio status',
                'desc' => 'Input project status',
                'id'   => $prefix . 'port_status',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Portfolio link demo',
                'desc' => 'Input project link demo',
                'id'   => $prefix . 'port_demo',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Portfolio tags',
                'desc' => 'Input project tags',
                'id'   => $prefix . 'port_tags',
                'type'    => 'text',
            ), 
        )
    );
    // Add other metaboxes as needed
    
	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

} 