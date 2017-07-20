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
    //For testimonial post
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
    
    //For team post url
    $team_post = new_cmb2_box( array(
		'id'            => 'team_post',
		'title'         => __( 'Team Metabox', 'andia' ),
		'object_types'  => array( 'adnia_team', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
    // Regular text field
	$team_post->add_field( array(
		'name'       => __( 'Fb url link', 'andia' ),
        'desc'       => __('Write here your facebook link here','andia'),
		'id'         => $prefix . 'fb_team_url_link',
		'type'       => 'text',
	) );
	$team_post->add_field( array(
		'name'       => __( 'Tw url link', 'andia' ),
        'desc'       => __('Write here your twitter link here','andia'),
		'id'         => $prefix . 'tw_team_url_link',
		'type'       => 'text',
	) );
	$team_post->add_field( array(
		'name'       => __( 'Ln url link', 'andia' ),
        'desc'       => __('Write here your linkedIn link here','andia'),
		'id'         => $prefix . 'ln_team_url_link',
		'type'       => 'text',
	) );
	$team_post->add_field( array(
		'name'       => __( 'Message url link', 'andia' ),
        'desc'       => __('Write here your Message link here','andia'),
		'id'         => $prefix . 'msg_team_url_link',
		'type'       => 'text',
	) );
}
add_action( 'cmb2_admin_init', 'cmb2_custom_metaboxes' );










