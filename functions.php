<?php
function andia_setup() {

	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
  add_image_size( 'slide-img', 958, 460, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'mainmenu'    => __( 'Primary Menu',      'andia' ),
		'footermenu'  => __( 'Social Links Menu', 'andia' ),
	) );

}
add_action( 'after_setup_theme', 'andia_setup' );


function andia_slider() {
  register_post_type( 'slider',
    array(
      'labels' => array(
        'name' => __( 'AndiaSliders' ),
        'singular_name' => __( 'Slider' ),
        'add_new' => __( 'add slider' ),
        'add_new_item' => __( 'add new slider' )
      ),
      'public' => true,
      'supports' => array('title','thumbnail','editor','custom-fields')
    )
  );
}
add_action( 'init', 'andia_slider');