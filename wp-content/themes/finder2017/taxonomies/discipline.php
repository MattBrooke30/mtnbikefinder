<?php

function discipline_init() {
	register_taxonomy( 'discipline', array( 'bike' ), array(
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
			'name'                       => __( 'Disciplines', 'finder2017' ),
			'singular_name'              => _x( 'Discipline', 'taxonomy general name', 'finder2017' ),
			'search_items'               => __( 'Search disciplines', 'finder2017' ),
			'popular_items'              => __( 'Popular disciplines', 'finder2017' ),
			'all_items'                  => __( 'All disciplines', 'finder2017' ),
			'parent_item'                => __( 'Parent discipline', 'finder2017' ),
			'parent_item_colon'          => __( 'Parent discipline:', 'finder2017' ),
			'edit_item'                  => __( 'Edit discipline', 'finder2017' ),
			'update_item'                => __( 'Update discipline', 'finder2017' ),
			'add_new_item'               => __( 'New discipline', 'finder2017' ),
			'new_item_name'              => __( 'New discipline', 'finder2017' ),
			'separate_items_with_commas' => __( 'Separate disciplines with commas', 'finder2017' ),
			'add_or_remove_items'        => __( 'Add or remove disciplines', 'finder2017' ),
			'choose_from_most_used'      => __( 'Choose from the most used disciplines', 'finder2017' ),
			'not_found'                  => __( 'No disciplines found.', 'finder2017' ),
			'menu_name'                  => __( 'Disciplines', 'finder2017' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'discipline',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'discipline_init' );
