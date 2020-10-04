<?php
/*
    Plugin Name: Follow Sport - Post Types
    Plugin URI: 
    Description: add post types for news and blog
    Version: 1.0.0
    Author: validol
    Author URI: 
    Text Domain: followsport
*/

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function followsport_news_post_type() {

	$labels = array(
		'name'                  => _x( 'News', 'Post Type General Name', 'followsport' ),
		'singular_name'         => _x( 'New', 'Post Type Singular Name', 'followsport' ),
		'menu_name'             => __( 'News', 'followsport' ),
		'name_admin_bar'        => __( 'New', 'followsport' ),
		'archives'              => __( 'archives', 'followsport' ),
		'attributes'            => __( 'attributes', 'followsport' ),
		'parent_item_colon'     => __( 'New Parent', 'followsport' ),
		'all_items'             => __( 'All news', 'followsport' ),
		'add_new_item'          => __( 'Add news', 'followsport' ),
		'add_new'               => __( 'Add news', 'followsport' ),
		'new_item'              => __( 'New news', 'followsport' ),
		'edit_item'             => __( 'Edit News', 'followsport' ),
		'update_item'           => __( 'Update News', 'followsport' ),
		'view_item'             => __( 'view New', 'followsport' ),
		'view_items'            => __( 'view News', 'followsport' ),
		'search_items'          => __( 'Find a news', 'followsport' ),
		'not_found'             => __( 'No news', 'followsport' ),
		'not_found_in_trash'    => __( 'Not found in the cart', 'followsport' ),
		'featured_image'        => __( 'News image', 'followsport' ),
		'set_featured_image'    => __( 'Setup news image', 'followsport' ),
		'remove_featured_image' => __( 'delete the image', 'followsport' ),
		'use_featured_image'    => __( 'Use the selected image', 'followsport' ),
		'insert_into_item'      => __( 'Insert into News', 'followsport' ),
		'uploaded_to_this_item' => __( 'Added to nТews', 'followsport' ),
		'items_list'            => __( 'List of the News', 'followsport' ),
		'items_list_navigation' => __( 'News navigation', 'followsport' ),
		'filter_items_list'     => __( 'News filter', 'followsport' ),
	);
	$args = array(
		'label'                 => __( 'New', 'followsport' ),
		'description'           => __( 'News for slider', 'followsport' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'followsport_news', $args );

}
add_action( 'init', 'followsport_news_post_type', 0 );


function followsport_Testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'followsport' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'followsport' ),
		'menu_name'             => __( 'Testimonials', 'followsport' ),
		'name_admin_bar'        => __( 'Testimonial', 'followsport' ),
		'archives'              => __( 'archives', 'followsport' ),
		'attributes'            => __( 'attributes', 'followsport' ),
		'parent_item_colon'     => __( 'Testimonial parent', 'followsport' ),
		'all_items'             => __( 'All Testimonials', 'followsport' ),
		'add_new_item'          => __( 'Add new Testimonial', 'followsport' ),
		'add_new'               => __( 'Add new Testimonial', 'followsport' ),
		'new_item'              => __( 'New Testimonial', 'followsport' ),
		'edit_item'             => __( 'Edit Testimonial', 'followsport' ),
		'update_item'           => __( 'Update Testimonial', 'followsport' ),
		'view_item'             => __( 'View Testimonial', 'followsport' ),
		'view_items'            => __( 'View Testimonials', 'followsport' ),
		'search_items'          => __( 'Search Testimonial', 'followsport' ),
		'not_found'             => __( 'No Testimonials', 'followsport' ),
		'not_found_in_trash'    => __( 'No Testimonials in cart', 'followsport' ),
		'featured_image'        => __( 'Testimonial image', 'followsport' ),
		'set_featured_image'    => __( 'Set Testimonial image', 'followsport' ),
		'remove_featured_image' => __( 'Delete the image', 'followsport' ),
		'use_featured_image'    => __( 'Use the image', 'followsport' ),
		'insert_into_item'      => __( 'Insert into Testimonial', 'followsport' ),
		'uploaded_to_this_item' => __( 'Uploaded into Testimonial', 'followsport' ),
		'items_list'            => __( 'List of Testimonials', 'followsport' ),
		'items_list_navigation' => __( 'navigation of Testimonials', 'followsport' ),
		'filter_items_list'     => __( 'Filter Testimonials', 'followsport' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'followsport' ),
		'description'           => __( 'Testimonials for website', 'followsport' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Testimonials', $args );

}
add_action( 'init', 'followsport_Testimonials', 0 );

