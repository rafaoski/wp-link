<?php
function xtra_link_scripts() {

// wp_enqueue_style( 'xtra-link-style', get_stylesheet_uri() );

//wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
//wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.2', 'all');
//wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.3', 'all');
//wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.4', 'all');
//
//wp_enqueue_style( 'fonts-family-Lato', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic', array(), '1.5', 'all');
//wp_enqueue_style( 'fonts-family-Raleway','http://fonts.googleapis.com/css?family=Raleway:400,300,700', array(), '1.6', 'all');
//
//wp_enqueue_style( 'compressed-css',get_template_directory_uri() . '/assets/css/styles.min.css', array(), '1.8', 'all');

//wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/assets/js/modernizr.custom.js', array(), '2.0.0', true );

wp_deregister_script( 'jquery' );

//wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0.0', true );
//
//wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), '1.1.0', true );
//wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.2.0', true );
//wp_enqueue_script( 'masonry-js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), '1.4.0', true );
//wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/assets/js/imagesloaded.js', array('jquery'), '1.5.0', true );
//wp_enqueue_script( 'classie-js', get_template_directory_uri() . '/assets/js/classie.js', array('jquery'), '1.6.0', true );
//wp_enqueue_script( 'AnimOnScroll-js', get_template_directory_uri() . '/assets/js/AnimOnScroll.js', array('jquery'), '1.7.0', true );
//wp_enqueue_script( 'Jquery-Lazy-Load-js', get_template_directory_uri() . '/assets/js/jquery.lazyloadxt.min.js', array('jquery'), '1.8.0', true );
//wp_enqueue_script( 'jarallax-js', get_template_directory_uri() . '/assets/js/jarallax.min.js', array('jquery'), '1.8.0', true );
//wp_enqueue_script( 'jarallax-video-js', get_template_directory_uri() . '/assets/js/jarallax-video.min.js', array('jquery'), '1.8.0', true );
//wp_enqueue_script( 'preloader', get_template_directory_uri() . '/assets/js/preloader.js', array('jquery'), '1.9.0', true );


// COMPRESSED JS
wp_enqueue_script( 'compressed', get_template_directory_uri() . '/assets/js/compressed.js', array(), '2.1.0', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'xtra_link_scripts' );