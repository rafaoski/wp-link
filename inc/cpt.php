<?php
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Portfolios', 'Post Type General Name', 'xtra-link' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'xtra-link' ),
		'menu_name'             => __( 'Portfolio', 'xtra-link' ),
		'name_admin_bar'        => __( 'Portfolio', 'xtra-link' ),
		'archives'              => __( 'Portfolio Archives', 'xtra-link' ),
		'attributes'            => __( 'Portfolio Attributes', 'xtra-link' ),
		'parent_item_colon'     => __( 'Parent Portfolio:', 'xtra-link' ),
		'all_items'             => __( 'All Portfolio', 'xtra-link' ),
		'add_new_item'          => __( 'Add New Portfolio', 'xtra-link' ),
		'add_new'               => __( 'Add New Portfolio', 'xtra-link' ),
		'new_item'              => __( 'New Portfolio', 'xtra-link' ),
		'edit_item'             => __( 'Edit Portfolio', 'xtra-link' ),
		'update_item'           => __( 'Update Portfolio', 'xtra-link' ),
		'view_item'             => __( 'View Portfolio', 'xtra-link' ),
		'view_items'            => __( 'View Portfolios', 'xtra-link' ),
		'search_items'          => __( 'Search Portfolios', 'xtra-link' ),
		'not_found'             => __( 'Not found', 'xtra-link' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'xtra-link' ),
		'featured_image'        => __( 'Featured Image', 'xtra-link' ),
		'set_featured_image'    => __( 'Set featured image', 'xtra-link' ),
		'remove_featured_image' => __( 'Remove featured image', 'xtra-link' ),
		'use_featured_image'    => __( 'Use as featured image', 'xtra-link' ),
		'insert_into_item'      => __( 'Insert into Portfolio', 'xtra-link' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'xtra-link' ),
		'items_list'            => __( 'Portfolios list', 'xtra-link' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'xtra-link' ),
		'filter_items_list'     => __( 'Filter Portfolios list', 'xtra-link' ),
	);

	$args = array(
		'label'                 => __( 'Portfolio', 'xtra-link' ),
		'description'           => __( 'Post Type Description', 'xtra-link' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
    // 'taxonomies'            => array( 'category', 'post_tag' ),
		'taxonomies'            => array( 'category'),
		'hierarchical'          => true, // Must
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'           => 'dashicons-schedule',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true, // Must
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		// 'capability_type'       => 'page',
		// 'rewrite' => array("slug" => "my-portfolio") // Must
	);

	register_post_type( 'link_port', $args );

}

add_action( 'init', 'custom_post_type', 0 );
