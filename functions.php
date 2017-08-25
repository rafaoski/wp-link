<?php
/**
 * Xtra-Link functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Xtra-Link
 */

if ( ! function_exists( 'xtra_link_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function xtra_link_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Xtra-Link, use a find and replace
	 * to change 'xtra-link' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'xtra-link', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'xtra-link' ),
	) );

	// Xtra Navigation
	function xtra_nav()
	{

		return

	    wp_nav_menu(
	    array(
	        'theme_location'  => 'menu-1',
	        'echo'            => false,
	        'items_wrap'      => '%3$s',
	        'depth'           => 0,
	        )
	    );

	}

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'xtra_link_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 120,
		'width'       => 120,
		'flex-width'  => true,
		'flex-height' => true,
	) );
        
/**
 * Set up the WordPress core custom header feature.
 *
 * @uses xtra_link_header_style()
 */
      	add_theme_support( 'custom-header', apply_filters( 'xtra_link_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1400,
		'height'                 => 948,
		'flex-height'            => true,
		'flex-width'            => true,
                'video' => true,
	) ) );  
        
        
}
endif;
add_action( 'after_setup_theme', 'xtra_link_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function xtra_link_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'xtra_link_content_width', 640 );
}
add_action( 'after_setup_theme', 'xtra_link_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function xtra_link_widgets_init() {


	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'xtra-link' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'xtra-link' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'xtra_link_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function xtra_link_scripts() {

// wp_enqueue_style( 'xtra-link-style', get_stylesheet_uri() );

wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.2', 'all');
wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.3', 'all');
wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.4', 'all');

wp_enqueue_style( 'fonts-family-Lato', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic', array(), '1.5', 'all');
wp_enqueue_style( 'fonts-family-Raleway','http://fonts.googleapis.com/css?family=Raleway:400,300,700', array(), '1.6', 'all');


wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/assets/js/modernizr.custom.js', array(), '2.0.0', true );

wp_deregister_script( 'jquery' );

wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0.0', true );

wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), '1.1.0', true );
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.2.0', true );
wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.3.0', true );
wp_enqueue_script( 'masonry-js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), '1.4.0', true );
wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/assets/js/imagesloaded.js', array('jquery'), '1.5.0', true );
wp_enqueue_script( 'classie-js', get_template_directory_uri() . '/assets/js/classie.js', array('jquery'), '1.6.0', true );
wp_enqueue_script( 'AnimOnScroll-js', get_template_directory_uri() . '/assets/js/AnimOnScroll.js', array('jquery'), '1.7.0', true );
wp_enqueue_script( 'Jquery-Lazy-Load-js', get_template_directory_uri() . '/assets/js/jquery.lazyloadxt.min.js', array('jquery'), '1.8.0', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'xtra_link_scripts' );




/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
 require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custon Functions.
 */
require get_template_directory() . '/inc/cust-func.php';

/**
 * CPT.
 */
require get_template_directory() . '/inc/cpt.php';

/**
 * CMB2 Get the bootstrap!
 */
if ( file_exists( __DIR__ . '/inc/cmb2/init.php' ) ) {
  require_once __DIR__ . '/inc/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/inc/CMB2/init.php';
}

require get_template_directory() . '/inc/cmb2-project/front.php';
require get_template_directory() . '/inc/cmb2-project/portfolio.php';
require get_template_directory() . '/inc/cmb2-project/about.php';
require get_template_directory() . '/inc/cmb2-project/services.php';

/**
 * KIRKI CUSTOMIZER!
 */
include_once( dirname( __FILE__ ) . '/inc/kirki/kirki.php' );
include_once( dirname( __FILE__ ) . '/inc/kirki-project/kirki-master.php' );

/**
 * POLYLANG TRANSLATIONS!
 */
 require get_template_directory() . '/inc/polylang-translations.php';