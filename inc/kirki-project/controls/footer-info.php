<?php

Kirki::add_field( 'my_config', array(
	'type'        => 'switch',
	'settings'    => 'on_of_6',
	'label'       => __( 'On Off Footer Info', 'xtra-link' ),
	'section'     => 'footer_info',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'Enable', 'xtra-link' ),
		'off' => esc_attr__( 'Disable', 'xtra-link' ),
	),
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'info_1',
	'label'    => __( 'Add Adress Name', 'xtra-link' ),
	'section'  => 'footer_info',
	'default'  => esc_attr__( 'Minsk - Head Office', 'xtra-link' ),
	'priority' => 20,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'editor',
	'settings' => 'info_2',
	'label'    => __( 'Adress C.d', 'xtra-link' ),
	'section'  => 'footer_info',
	'default'  => __( '<p>Business Center, SomeAve 987,<br/>Minsk, Belarus.</p>', 'xtra-link' ),
	'priority' => 30,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'info_3',
	'label'    => __( 'Phone number_format_i18n', 'xtra-link' ),
	'section'  => 'footer_info',
	'default'  => esc_attr__( '+55 4839-4390', 'xtra-link' ),
	'priority' => 40,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'info_4',
	'label'    => __( 'Special Number', 'xtra-link' ),
	'section'  => 'footer_info',
	'default'  => esc_attr__( '+55 4333-4345', 'xtra-link' ),
	'priority' => 50,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'info_5',
	'label'    => __( 'Add E-Mail', 'xtra-link' ),
	'section'  => 'footer_info',
	'default'  => esc_attr__( 'hello@linkagency.com', 'xtra-link' ),
	'priority' => 60,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'editor',
	'settings' => 'info_6',
	'label'    => __( 'Add More Info', 'xtra-link' ),
	'section'  => 'footer_info',
	'default'  => __( '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p>', 'xtra-link' ),
	'priority' => 70,
) );
