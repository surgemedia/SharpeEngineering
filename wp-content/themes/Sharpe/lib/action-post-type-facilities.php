<?php 
// Register Custom Post Type
function facilities_post_type() {

	$labels = array(
		'name'                => _x( 'Facilities', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Facility', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Facilities', 'text_domain' ),
		'name_admin_bar'      => __( 'Post Type', 'text_domain' ),
		'parent_item_colon'   => __( 'Facility', 'text_domain' ),
		'all_items'           => __( 'Facilities', 'text_domain' ),
		'add_new_item'        => __( 'Add New Facility', 'text_domain' ),
		'add_new'             => __( 'Add New Facility', 'text_domain' ),
		'new_item'            => __( 'New Facility', 'text_domain' ),
		'edit_item'           => __( 'Edit Facility', 'text_domain' ),
		'update_item'         => __( 'Update Facility', 'text_domain' ),
		'view_item'           => __( 'View Facility', 'text_domain' ),
		'search_items'        => __( 'Search Facility', 'text_domain' ),
		'not_found'           => __( 'Facility Not found ', 'text_domain' ),
		'not_found_in_trash'  => __( 'Facility Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'facility', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-clipboard',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'facility', $args );

}

// Hook into the 'init' action
add_action( 'init', 'facilities_post_type', 0 );