<?php
	function custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'custom_header_args', array(
		'default-image'      => get_parent_theme_file_uri( '/assets/images/header.jpeg' ),
		'flex-height'        => true,
		'video'              => true,
		'uploads'       => true,
		'wp-head-callback'   => 'custom_header_setup',
	)));

	register_default_headers( array(
		'default-image' => array(
			'url'           => '%s/assets/images/header.jpeg',
			'thumbnail_url' => '%s/assets/images/header.jpeg',
			'description'   => __( 'Default Header Image', 'chershoee' ),
		),
	) );
}
add_action( 'after_setup_theme', 'custom_header_setup' );

?>