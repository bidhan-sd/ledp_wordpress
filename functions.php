<?php
function andia_setup() {

	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'mainmenu' => __( 'Primary Menu',      'andia' ),
		'footermenu'  => __( 'Social Links Menu', 'andia' ),
	) );

}
add_action( 'after_setup_theme', 'andia_setup' );