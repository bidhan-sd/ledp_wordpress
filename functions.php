<?php
require_once get_template_directory() . "/assets/codestar/cs-framework.php";
require_once get_template_directory() . "/assets/Metabox/cmb2-custom-field.php";

function andia_setup() {    
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
    add_image_size( 'slide-img', 958, 460, true );
    add_image_size( 'portfolio-images', 255, 122, true );
    add_image_size( 'out-team-image', 263, 126, true );
    add_image_size( 'testimonial-images', 64, 64, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'mainmenu'    => __( 'Primary Menu',      'andia' ),
		'footermenu'  => __( 'Social Links Menu', 'andia' ),
	) );

}
add_action( 'after_setup_theme', 'andia_setup' );


function andia_theme_custom_post() {
	register_post_type( 'slider',
		array(
		  'labels' => array(
			'name' => __( 'AndiaSlider' ),
			'singular_name' => __( 'Slider' ),
			'add_new' => __( 'add slider' ),
			'add_new_item' => __( 'add new slider' ),
		  ),
		'public' => true,
		'supports' => array('title','thumbnail','editor','custom-fields'),
		'menu_icon'   => 'dashicons-screenoptions',
		)
    ); 
	register_post_type( 'portfolio',
		array(
		  'labels' => array(
			'name' => __( 'Andiaportfolios' ),
			'singular_name' => __( 'Portfolio' ),
			'add_new' => __( 'add portfolio' ),
			'add_new_item' => __( 'add new portfolio' )
		  ),
		  'public' => true,
		  'supports' => array('title','thumbnail','editor','custom-fields')
		)
	);
	register_post_type( 'Services',
		array(
		  'labels' => array(
			'name' => __( 'Andiaservices' ),
			'singular_name' => __( 'Services' ),
			'add_new' => __( 'add Services' ),
			'add_new_item' => __( 'add new Services' )
		  ),
		  'public' => true,
		  'supports' => array('title','thumbnail','editor','custom-fields')
		)
	);
    register_post_type( 'adnia_team',
        array(
          'labels' => array(
            'name' => __( 'Our Team' ),
            'singular_name' => __( 'Our team' ),
            'add_new' => __( 'add tean' ),
            'add_new_item' => __( 'add new team' )
          ),
          'public' => true,
          'supports' => array('title','thumbnail','editor','custom-fields')
        )
    );
    //For testimonial
    register_post_type( 'adnia_testimonial',
        array(
          'labels' => array(
            'name' => __( 'Our testimonial' ),
            'singular_name' => __( 'Our testimonial'),
            'add_new' => __( 'add testimonial' ),
            'add_new_item' => __( 'add new testimonial' )
          ),
          'public' => true,
          'supports' => array('title','thumbnail','editor','custom-fields')
        )
    );
    
}

add_action( 'init', 'andia_theme_custom_post');

// create two taxonomies, genres and writers for the post type "book"
function andia_taxonomy() {
	// Add new taxonomy, make it hierarchical (like categories)
	register_taxonomy( 'portflio_cats', array( 'portfolio' ), array(
		'hierarchical'      => true,
		'labels'            => array(
            'menu_name'         => __( 'Portfolios Categories', '' ),
        ),
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio_cat' ),
        ));
        
	register_taxonomy( 'portfolios_tags', 'portfolio', array(
        'hierarchical'          => false,
		'labels'                => array(
                    'menu_name'                  => __( 'Portfolios Tags', '' ),
                ),
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'portfolio_tag' ),
            
        ) );
}
add_action( 'init', 'andia_taxonomy');