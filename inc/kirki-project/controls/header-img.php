<?php

Kirki::add_field( 'my_config', array(
	'type'        => 'image',
	'settings'    => 'img_blog',
	'label'       => __( 'Add Blog Image', 'xtra-link' ),
	'description' => __( 'Change Blog Image', 'xtra-link' ),
	'help'        => __( 'Simple Click :).', 'xtra-link' ),
	'section'     => 'header_image',
	'default'     => '',
	'priority'    => 30,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'img_blog_txt',
	'label'    => __( 'Add Blog Heading', 'xtra-link' ),
	'section'  => 'header_image',
	'default'  => esc_attr__( 'This is a defualt value', 'xtra-link' ),
	'priority' => 40,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'textarea',
	'settings' => 'img_blog_txtarea',
	'label'    => __( 'Add Blog Descriptions', 'xtra-link' ),
	'section'  => 'header_image',
	'default'  => esc_attr__( 'This is a defualt value', 'xtra-link' ),
	'priority' => 40,
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'image',
	'settings'    => 'img_archive',
	'label'       => __( 'Add Archive Image', 'xtra-link' ),
	'description' => __( 'Change Archive Image', 'xtra-link' ),
	'help'        => __( 'Simple Click :).', 'xtra-link' ),
	'section'     => 'header_image',
	'default'     => '',
	'priority'    => 50,
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'image',
	'settings'    => 'img_tag',
	'label'       => __( 'Add Tag Image', 'xtra-link' ),
	'description' => __( 'Change Tag Image', 'xtra-link' ),
	'help'        => __( 'Simple Click :).', 'xtra-link' ),
	'section'     => 'header_image',
	'default'     => '',
	'priority'    => 60,
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'image',
	'settings'    => 'img_search',
	'label'       => __( 'Add Search Image', 'xtra-link' ),
	'description' => __( 'Change Search Image', 'xtra-link' ),
	'help'        => __( 'Simple Click :).', 'xtra-link' ),
	'section'     => 'header_image',
	'default'     => '',
	'priority'    => 70,
) );