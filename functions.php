<?php
/**
 * @package SI
 */
 
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'SI' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'SI_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

add_action("pre_get_posts", "custom_front_page");
function custom_front_page($wp_query){
    //Ensure this filter isn't applied to the admin area
    if(is_admin()) {
        return;
    }

    if($wp_query->get('page_id') == get_option('page_on_front')):

        $wp_query->set('post_type', 'case-studies');
        $wp_query->set('page_id', ''); //Empty

        //Set properties that describe the page to reflect that
        //we aren't really displaying a static page
        $wp_query->is_page = 0;
        $wp_query->is_singular = 0;
        $wp_query->is_post_type_archive = 1;
        $wp_query->is_archive = 1;

    endif;

}  
  
function case_studies() {
  $labels = array(
    'name'               => _x( 'case-studies', 'post type general name' ),
    'singular_name'      => _x( 'case_study', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Case Study' ),
    'edit_item'          => __( 'Edit Case Study' ),
    'new_item'           => __( 'New Case Study' ),
    'all_items'          => __( 'All Case Studies' ),
    'menu_name'          => 'Case Studies'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Shows Case Studies',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'has_archive'   => true,
    'capability_type'    => 'page',
    'singular_name' => 'case-studies',
    'archive_name'  => 'case-studies'
  );
  register_post_type( 'case-studies', $args ); 
}
add_action( 'init', 'case_studies' );
add_theme_support('post-thumbnails', array( 'post', 'page', 'case-studies' ) );
