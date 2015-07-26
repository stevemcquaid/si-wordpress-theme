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


function text() {
  $labels = array(
    'name'               => _x( 'texts', 'post type general name' ),
    'singular_name'      => _x( 'text', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Text' ),
    'edit_item'          => __( 'Edit Text' ),
    'new_item'           => __( 'New Text' ),
    'all_items'          => __( 'All Text' ),
    'menu_name'          => 'Text'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Shows Text',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
    'capability_type'    => 'page',
    'singular_name' => 'text',
    'archive_name'  => 'text'
  );
  register_post_type( 'text', $args ); 
}
add_action( 'init', 'text' );

function dividers() {
  $labels = array(
    'name'               => _x( 'dividers', 'post type general name' ),
    'singular_name'      => _x( 'divider', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Divider' ),
    'edit_item'          => __( 'Edit Divider' ),
    'new_item'           => __( 'New Divider' ),
    'all_items'          => __( 'All Divider' ),
    'menu_name'          => 'Dividers'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Shows Divider',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
    'capability_type'    => 'page',
    'singular_name' => 'divider',
    'archive_name'  => 'divider'
  );
  register_post_type( 'divider', $args ); 
}
add_action( 'init', 'dividers' );

function teams() {
  $labels = array(
    'name'               => _x( 'teams', 'post type general name' ),
    'singular_name'      => _x( 'team', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Team' ),
    'edit_item'          => __( 'Edit Team' ),
    'new_item'           => __( 'New Team' ),
    'all_items'          => __( 'All Team' ),
    'menu_name'          => 'Teams'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Shows Team',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
    'has_archive'   => true,
    'capability_type'    => 'page',
    'singular_name' => 'team',
    'archive_name'  => 'team'
  );
  register_post_type( 'team', $args ); 
}
add_action( 'init', 'teams' );
add_theme_support('post-thumbnails', array( 'post', 'page', 'divider', 'team', 'text') );