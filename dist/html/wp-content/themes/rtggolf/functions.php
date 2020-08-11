<?php
/**
 * RTG Golf functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage RTG_Golf
 * @since RTG Golf 1.0
 */

/*----------------------------------------*\
   Defaults
\*----------------------------------------*/

// Sets up theme defaults and registers support for various WordPress features.

// Note that this function is hooked into the after_setup_theme hook, which runs before the init hook. The init hook is too late for some features, such as indicating support for post thumbnails.

function rtggolf_theme_support() {

	/* Let WordPress manage <title>
	------------------------------------------*/
	
	// By adding theme support, we declare that this theme does not use a hard-coded <title> tag in the document head, and expect WordPress to provide it for us.

	add_theme_support( 'title-tag' );

	/* Image Sizes
	------------------------------------------*/

	// Note...

	// add_image_size( 'rtggolf-featured-image', 2000, 1200, true );

	// add_image_size( 'rtggolf-thumbnail-avatar', 100, 100, true );

	/* HTML5
	------------------------------------------*/

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.

	add_theme_support(

		'html5',

		array(

			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',

		)

	);

	/* Translation
	------------------------------------------*/
	
	// Make theme available for translation.
	
	// Translations can be filed in the /languages/ directory.
	
	// If you're building a theme based on RTG Golf, use a find and replace to change 'rtggolf' to the name of your theme in all the template files.

	// load_theme_textdomain( 'rtggolf' );

	/* Miscellaneous
	------------------------------------------*/

	// Add support for full and wide align images.

	// add_theme_support( 'align-wide' );

	// Add support for responsive embeds.

	// add_theme_support( 'responsive-embeds' );

}

add_action( 'after_setup_theme', 'rtggolf_theme_support' );

/*----------------------------------------*\
   Register and Enqueue Styles
\*----------------------------------------*/

function rtggolf_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'rtggolf-screen-style', get_template_directory_uri() . '/assets/css/screen.css', null, $theme_version, 'screen' );

	wp_style_add_data( 'rtggolf-style', 'rtl', 'replace' );

	// Add print CSS.

	wp_enqueue_style( 'rtggolf-print-style', get_template_directory_uri() . '/assets/css/print.css', null, $theme_version, 'print' );

}

add_action( 'wp_enqueue_scripts', 'rtggolf_register_styles' );

/*----------------------------------------*\
   Register and Enqueue Scripts
\*----------------------------------------*/

function rtggolf_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'rtggolf-js', get_template_directory_uri() . '/assets/js/global.js', array(), $theme_version, false );
	wp_script_add_data( 'rtggolf-js', 'async', true );

}

add_action( 'wp_enqueue_scripts', 'rtggolf_register_scripts' );

/*----------------------------------------*\
   Menus
\*----------------------------------------*/

// Register navigation menus uses wp_nav_menu in two places.

function rtggolf_menus() {

	$locations = array(

		'primary'  => __( 'Primary Navigation', 'rtggolf' ),
		'social'   => __( 'Social Navigation', 'rtggolf' ),

	);

	register_nav_menus( $locations );

}

add_action( 'init', 'rtggolf_menus' );

/*----------------------------------------*\
   Widgets
\*----------------------------------------*/

// Register widget areas.

// Source: https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar

function rtggolf_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.

	$shared_args = array(

		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',

	);

	// Footer #1.

	register_sidebar(

		array_merge(

			$shared_args,

			array(

				'name'        => __( 'Footer #1', 'rtggolf' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'rtggolf' ),

			)

		)

	);

	// Footer #2.

	register_sidebar(

		array_merge(

			$shared_args,

			array(

				'name'        => __( 'Footer #2', 'rtggolf' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'rtggolf' ),

			)

		)

	);

}

add_action( 'widgets_init', 'rtggolf_sidebar_registration' );

/*----------------------------------------*\
   Title
\*----------------------------------------*/

// Notes...

/*----------------------------------------*\
   Support for SVG
\*----------------------------------------*/

// Notes...

function cc_mime_types( $mimes ) {

	$mimes['svg'] = 'image/svg+xml';

	return $mimes;

}

/*----------------------------------------*\
   Remove Block Library CSS
\*----------------------------------------*/

// Notes...

function rtggolf_remove_wp_block_library_css() {

	wp_dequeue_style( 'wp-block-library' );

	wp_dequeue_style( 'wp-block-library-theme' );

	wp_dequeue_style( 'wc-block-style' ); // for WooCommerce

}

add_action( 'wp_enqueue_scripts', 'rtggolf_remove_wp_block_library_css', 100);

/*----------------------------------------*\
   Deregister Features
\*----------------------------------------*/

// Notes...

function deregister_features() {

	/* Title
	------------------------------------------*/

	// Notes...

	wp_deregister_script( 'wp-embed' );

	/* Title
	------------------------------------------*/

	// Notes...

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	/* Title
	------------------------------------------*/

	// Notes...

	global $wp_widget_factory;

	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );

	/* Title
	------------------------------------------*/

	// Notes...

	remove_action( 'wp_head', 'wp_generator' );

	/* Title
	------------------------------------------*/

	// Notes...

	remove_action( 'wp_head', 'wlwmanifest_link' );

	/* Title
	------------------------------------------*/

	// Notes...

	remove_action( 'wp_head', 'rsd_link' );

	/* Title
	------------------------------------------*/

	// Notes...

	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

	/* Title
	------------------------------------------*/

	// Notes...

	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );

	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

	/* Title
	------------------------------------------*/

	// Notes...

	remove_action( 'wp_head', 'rel_canonical' );

	/* Title
	------------------------------------------*/

	// Notes...

	remove_action( 'wp_head', 'wp_resource_hints', 2 );

}

add_action( 'init', 'deregister_features' );

/*----------------------------------------*\
   Contact Form 7
\*----------------------------------------*/

// Disable initial loading of stylesheet and script.

add_filter( 'wpcf7_load_css', '__return_false' );

add_filter( 'wpcf7_load_js', '__return_false' );

/*----------------------------------------*\
   Advanced Custom Fields
\*----------------------------------------*/

// Notes...

// if ( functions_exists( 'acf_add_options_page' ) ) {

	// acf_add_options_page( array(

		// 'page_title'	=> 'Theme General Settings',
		// 'menu_title'	=> 'Globals',
		// 'menu_slug'	=> 'globals',
		// 'capability'	=> 'edit_posts',
		// 'redirect'	=> false

	// ) );

	// acf_add_options_sub_page( array(

		// 'page_title'		=> 'Banner',
		// 'menu_title'		=> 'Banner',
		// 'parent_slug'	=> 'globals'

	// ) );

// }
