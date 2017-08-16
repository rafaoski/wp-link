<?php
Kirki::add_field( 'my_config', array(
	'type'        => 'switch',
	'settings'    => 'on_of_3',
	'label'       => __( 'On Off Call To Action', 'xtra-link' ),
	'section'     => 'stay_connected',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'Enable', 'xtra-link' ),
		'off' => esc_attr__( 'Disable', 'xtra-link' ),
	),
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'stay_1',
	'label'    => __( 'Heading Connected Text', 'xtra-link' ),
	'section'  => 'stay_connected',
	'default'  => esc_attr__( 'Stay Connected', 'xtra-link' ),
	'priority' => 20,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'editor',
	'settings' => 'stay_2',
	'label'    => __( 'Add Some Connected Content', 'xtra-link' ),
	'section'  => 'stay_connected',
	'default'  => __( '<p>Join us on our social networks for all the latest updates, product/service announcements and more.</p>', 'xtra-link' ),
	'priority' => 30,
) );
