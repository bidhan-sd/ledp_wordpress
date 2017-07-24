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

//Dynamic css and js.
function andia_theme_css_js(){
    //css dynamic
    wp_enqueue_style('google-font-1','//fonts.googleapis.com/css?family=Open+Sans:400italic,400',null,'v1.0','all');
    wp_enqueue_style('google-font-2','//fonts.googleapis.com/css?family=Droid+Sans',null,'v1.0','all');
    wp_enqueue_style('google-font-3','//fonts.googleapis.com/css?family=Lobster',null,'v1.0','all');    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css',null,'v1.0','all');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/font-awesome/css/font-awesome.min.css',null,'v1.0','all');  wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.css',null,'v1.0','all');
    wp_enqueue_style('magnific',get_template_directory_uri().'/assets/css/magnific-popup.css',null,'v1.0','all');  wp_enqueue_style('flexslider',get_template_directory_uri().'/assets/flexslider/flexslider.css',null,'v1.0','all');
    wp_enqueue_style('elements',get_template_directory_uri().'/assets/css/form-elements.css',null,'v1.0','all'); 
    wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css',null,'v1.0','all');
    wp_enqueue_style('media-queries',get_template_directory_uri().'/assets/css/media-queries.css',null,'v1.0','all');     
    wp_enqueue_style('common-style',get_stylesheet_uri());
    
    //js dynamic
    wp_enqueue_script('jquery');    wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js','jquery',null,true);
    wp_enqueue_script('bootstrap-hover-dropdown',get_template_directory_uri().'/assets/js/bootstrap-hover-dropdown.min.js','jquery',null,true);    wp_enqueue_script('backstretch',get_template_directory_uri().'/assets/js/jquery.backstretch.min.js','jquery',null,true);
    wp_enqueue_script('wow',get_template_directory_uri().'/assets/js/wow.min.js','jquery',null,true);
    wp_enqueue_script('retina',get_template_directory_uri().'/assets/js/retina-1.1.0.min.js','jquery',null,true);    
    wp_enqueue_script('magnific-popup',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js','jquery',null,true);
    wp_enqueue_script('flexslider',get_template_directory_uri().'/assets/flexslider/jquery.flexslider-min.js','jquery',null,true);    wp_enqueue_script('jflickrfeed',get_template_directory_uri().'/assets/js/jflickrfeed.min.js','jquery',null,true);
    wp_enqueue_script('masonry',get_template_directory_uri().'/assets/js/masonry.pkgd.min.js','jquery',null,true);
    wp_enqueue_script('maps','//maps.google.com/maps/api/js?sensor=true','jquery',null,true);
    wp_enqueue_script('jquery.ui',get_template_directory_uri().'/assets/js/jquery.ui.map.min.js','jquery',null,true);
   wp_enqueue_script('scripts',get_template_directory_uri().'/assets/js/scripts.js','jquery',null,true);
}
add_action('wp_enqueue_scripts','andia_theme_css_js');

//widget register here.