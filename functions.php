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
 * CLEAR HEADER!
 */
 require get_template_directory() . '/inc/remove.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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