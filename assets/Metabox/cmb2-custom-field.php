<?php
/**
 * Get the bootstrap!
 */
if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}


function cmb2_custom_metaboxes() {
	$prefix = '_andia_';
	$testimonial_post = new_cmb2_box( array(
		'id'            => 'testimonial_post',
		'title'         => __( 'testimonial Metabox', 'andia' ),
		'object_types'  => array( 'adnia_testimonial', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
    // Regular text field
	$testimonial_post->add_field( array(
		'name'       => __( 'Testimonial Name', 'andia' ),
		'id'         => $prefix . 'testimonial_name',
		'type'       => 'text',
	) );
}
add_action( 'cmb2_admin_init', 'cmb2_custom_metaboxes' );










