<?php

Kirki::add_field( 'my_config', array(
	'type'        => 'switch',
	'settings'    => 'on_of_2',
	'label'       => __( 'On Off Call To Action', 'xtra-link' ),
	'section'     => 'call_to_action',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'Enable', 'xtra-link' ),
		'off' => esc_attr__( 'Disable', 'xtra-link' ),
	),
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'call_1',
	'label'    => __( 'Heading Action Text', 'xtra-link' ),
	'section'  => 'call_to_action',
	'default'  => esc_attr__( 'THIS IS A CALL TO ACTION AREA', 'xtra-link' ),
	'priority' => 20,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'editor',
	'settings' => 'call_2',
	'label'    => __( 'Add Some Action Content', 'xtra-link' ),
	'section'  => 'call_to_action',
	'default'  => __( '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>', 'xtra-link' ),
	'priority' => 30,
) );


Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'call_3',
	'label'    => __( 'Button Text', 'xtra-link' ),
	'section'  => 'call_to_action',
	'default'  => esc_attr__( 'Call To Action', 'xtra-link' ),
	'priority' => 40,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'call_4',
	'label'    => __( 'Button Url', 'xtra-link' ),
	'section'  => 'call_to_action',
	'default'  => esc_url( 'https://xtra-strona.pl/' ),
	'priority' => 50,
) );
