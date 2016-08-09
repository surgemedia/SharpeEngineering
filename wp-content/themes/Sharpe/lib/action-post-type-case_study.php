<?php 
// Register Custom Post Type
function Post_Type_case_study() {

	$labels = array(
		'name'                => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Case Studies', 'text_domain' ),
		'name_admin_bar'      => __( 'Case Studies', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent case_study:', 'text_domain' ),
		'all_items'           => __( 'All case studies', 'text_domain' ),
		'add_new_item'        => __( 'Add New case_study', 'text_domain' ),
		'add_new'             => __( 'Add New case_study', 'text_domain' ),
		'new_item'            => __( 'New case study', 'text_domain' ),
		'edit_item'           => __( 'Edit case study', 'text_domain' ),
		'update_item'         => __( 'Update case study', 'text_domain' ),
		'view_item'           => __( 'View case study', 'text_domain' ),
		'search_items'        => __( 'Search case study', 'text_domain' ),
		'not_found'           => __( 'case study Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'case study Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Case_Study', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail'),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-category',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'Case_Study', $args );

}

// Hook into the 'init' action
add_action( 'init', 'Post_Type_case_study', 0 );