<?php

Kirki::add_field( 'my_config', array(
	'type'        => 'switch',
	'settings'    => 'on_of_menu',
	'label'       => __( 'On Off Social Info', 'xtra-link' ),
	'section'     => 'my_menu',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'Enable', 'xtra-link' ),
		'off' => esc_attr__( 'Disable', 'xtra-link' ),
	),
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Add Social Media', 'xtra-link' ),
	'section'     => 'my_menu',
	'priority'    => 10,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Change Social Adress', 'xtra-link' ),
	),
	'settings'    => 'rep_social',
	'default'     => array(
		array(
			'icon' => esc_attr__( 'fa-facebook', 'xtra-link' ),
			'link_url'  => 'https://pl-pl.facebook.com/',
		),
		array(
			'icon' => esc_attr__( 'fa-twitter', 'xtra-link' ),
			'link_url'  => 'https://twitter.com/?lang=pl',
		),
        array(
			'icon' => esc_attr__( 'fa-dribbble', 'xtra-link' ),
			'link_url'  => 'https://dribbble.com/',
		),
		array(
			'icon' => esc_attr__( 'fa-envelope', 'xtra-link' ),
			'link_url'  => 'yourmail@gmail.com',
		),
	),
	'fields' => array(
		'icon' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Add Icon', 'xtra-link' ),
			'description' => esc_attr__( 'Add Font Awesome Icon', 'xtra-link' ),
			'default'     => '',
		),
		'link_url' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Link URL', 'xtra-link' ),
			'description' => esc_attr__( 'This will be the link URL', 'xtra-link' ),
			'default'     => '',
		),

	)
) );