<?php

function bike_init() {
	register_post_type( 'bike', array(
		'labels'            => array(
			'name'                => __( 'Bikes', 'finder2017' ),
			'singular_name'       => __( 'Bike', 'finder2017' ),
			'all_items'           => __( 'All Bikes', 'finder2017' ),
			'new_item'            => __( 'New Bike', 'finder2017' ),
			'add_new'             => __( 'Add New', 'finder2017' ),
			'add_new_item'        => __( 'Add New Bike', 'finder2017' ),
			'edit_item'           => __( 'Edit Bike', 'finder2017' ),
			'view_item'           => __( 'View Bike', 'finder2017' ),
			'search_items'        => __( 'Search Bikes', 'finder2017' ),
			'not_found'           => __( 'No Bikes found', 'finder2017' ),
			'not_found_in_trash'  => __( 'No Bikes found in trash', 'finder2017' ),
			'parent_item_colon'   => __( 'Parent Bike', 'finder2017' ),
			'menu_name'           => __( 'Bikes', 'finder2017' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-admin-post',
		'show_in_rest'      => true,
		'rest_base'         => 'bike',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'bike_init' );

function bike_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['bike'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Bike updated. <a target="_blank" href="%s">View Bike</a>', 'finder2017'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'finder2017'),
		3 => __('Custom field deleted.', 'finder2017'),
		4 => __('Bike updated.', 'finder2017'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Bike restored to revision from %s', 'finder2017'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Bike published. <a href="%s">View Bike</a>', 'finder2017'), esc_url( $permalink ) ),
		7 => __('Bike saved.', 'finder2017'),
		8 => sprintf( __('Bike submitted. <a target="_blank" href="%s">Preview Bike</a>', 'finder2017'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Bike scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Bike</a>', 'finder2017'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Bike draft updated. <a target="_blank" href="%s">Preview Bike</a>', 'finder2017'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'bike_updated_messages' );
