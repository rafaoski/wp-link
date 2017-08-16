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
	'label'    => __( 'Add First Heading', 'xtra-link' ),
	'section'  => 'header_image',
	'default'  => esc_attr__( 'This is a defualt value', 'xtra-link' ),
	'priority' => 40,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'textarea',
	'settings' => 'img_blog_txtarea',
	'label'    => __( 'Add Some Descriptions', 'xtra-link' ),
	'section'  => 'header_image',
	'default'  => esc_attr__( 'This is a defualt value', 'xtra-link' ),
	'priority' => 40,
) );