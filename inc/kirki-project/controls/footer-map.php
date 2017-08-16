<?php

Kirki::add_field( 'my_config', array(
	'type'        => 'switch',
	'settings'    => 'on_of_5',
	'label'       => __( 'On Off Google Map', 'xtra-link' ),
	'section'     => 'footer_map',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'Enable', 'xtra-link' ),
		'off' => esc_attr__( 'Disable', 'xtra-link' ),
	),
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'code',
	'settings' => 'my_fooot_map',
	'label'    => __( 'Add Iframe Coordinate Map', 'my_textdomain' ),
	'section'  => 'footer_map',
	'default'  => '',
	'priority' => 20,
  'choices'     => array(
		'language' => 'html',
		'theme'    => 'monokai',
		'height'   => 250,
	),
) );
