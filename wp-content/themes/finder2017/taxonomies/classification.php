<?php

function classification_init() {
	register_taxonomy( 'classification', array( 'bike' ), array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts'
		),
		'labels'            => array(
			'name'                       => __( 'Classifications', 'finder2017' ),
			'singular_name'              => _x( 'Classification', 'taxonomy general name', 'finder2017' ),
			'search_items'               => __( 'Search classifications', 'finder2017' ),
			'popular_items'              => __( 'Popular classifications', 'finder2017' ),
			'all_items'                  => __( 'All classifications', 'finder2017' ),
			'parent_item'                => __( 'Parent classification', 'finder2017' ),
			'parent_item_colon'          => __( 'Parent classification:', 'finder2017' ),
			'edit_item'                  => __( 'Edit classification', 'finder2017' ),
			'update_item'                => __( 'Update classification', 'finder2017' ),
			'add_new_item'               => __( 'New classification', 'finder2017' ),
			'new_item_name'              => __( 'New classification', 'finder2017' ),
			'separate_items_with_commas' => __( 'Separate classifications with commas', 'finder2017' ),
			'add_or_remove_items'        => __( 'Add or remove classifications', 'finder2017' ),
			'choose_from_most_used'      => __( 'Choose from the most used classifications', 'finder2017' ),
			'not_found'                  => __( 'No classifications found.', 'finder2017' ),
			'menu_name'                  => __( 'Classifications', 'finder2017' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'classification',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'classification_init' );
