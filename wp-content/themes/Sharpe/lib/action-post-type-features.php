<?php 
// Register Custom Post Type
function video_post_type() {

	$labels = array(
		'name'                => _x( 'Videos', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Videos', 'text_domain' ),
		'name_admin_bar'      => __( 'Videos', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent video: ', 'text_domain' ),
		'all_items'           => __( 'All videos', 'text_domain' ),
		'add_new_item'        => __( 'Add New video', 'text_domain' ),
		'add_new'             => __( 'Add New video', 'text_domain' ),
		'new_item'            => __( 'New video', 'text_domain' ),
		'edit_item'           => __( 'Edit video', 'text_domain' ),
		'update_item'         => __( 'Update video', 'text_domain' ),
		'view_item'           => __( 'View video', 'text_domain' ),
		'search_items'        => __( 'Search video', 'text_domain' ),
		'not_found'           => __( 'video Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'video Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'video', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', 'excerpt','page-attributes'),
		'taxonomies'          => array(  ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-video',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'video', $args );

}

// Hook into the 'init' action
add_action( 'init', 'video_post_type', 0 );