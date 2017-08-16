<?php

Kirki::add_section( 'logos_bar', array(
    'title'          => __( 'Logos Bar Section', 'xtra-link' ),
    'description'    => __( 'Add Img Logos', 'xtra-link' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'call_to_action', array(
    'title'          => __( 'Call To Action', 'xtra-link' ),
    // 'description'    => __( 'Add Img Logos', 'xtra-link' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 170,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'stay_connected', array(
    'title'          => __( 'Stay Connected', 'xtra-link' ),
    // 'description'    => __( 'Add Img Logos', 'xtra-link' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 180,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// FOOTER
Kirki::add_section( 'footer_social', array(
    'title'          => __( 'Add Social Profile', 'xtra-link' ),
    // 'description'    => __( 'Add Img Logos', 'xtra-link' ),
    'panel'          => 'panel_footer', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'footer_map', array(
    'title'          => __( 'Add Google Map', 'xtra-link' ),
    // 'description'    => __( 'Add Img Logos', 'xtra-link' ),
    'panel'          => 'panel_footer', // Not typically needed.
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'footer_info', array(
    'title'          => __( 'Add Info Adress', 'xtra-link' ),
    // 'description'    => __( 'Add Img Logos', 'xtra-link' ),
    'panel'          => 'panel_footer', // Not typically needed.
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'my_menu', array(
    'title'          => __( 'Menu Panel Options', 'xtra-link' ),
    // 'description'    => __( 'Add Img Logos', 'xtra-link' ),
    'panel'          => 'nav_menus', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );