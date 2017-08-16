<?php

Kirki::add_field( 'my_config', array(
	'type'        => 'switch',
	'settings'    => 'on_of_l',
	'label'       => __( 'On Off Logo', 'xtra-link' ),
	'section'     => 'logos_bar',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'Enable', 'xtra-link' ),
		'off' => esc_attr__( 'Disable', 'xtra-link' ),
	),
) );


Kirki::add_field( 'my_config', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Repeater Control', 'xtra-link' ),
	'section'     => 'logos_bar',
	'priority'    => 20,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('your custom value', 'xtra-link' ),
	),
	'settings'    => 'logos_setting',
	'default'     => array(
		array(
      'logos_img' => get_template_directory_uri() . '/assets/img/clients/c01.gif',
			'link_text' => esc_attr__( 'Kirki Site', 'xtra-link' ),
			'link_url'  => 'https://aristath.github.io/kirki/',
		),
		array(
      'logos_img' => get_template_directory_uri() . '/assets/img/clients/c02.gif',
			'link_text' => esc_attr__( 'Kirki Repository', 'xtra-link' ),
			'link_url'  => 'https://xtra-strona.pl',
		),

    array(
      'logos_img' => get_template_directory_uri() . '/assets/img/clients/c03.gif',
      'link_text' => esc_attr__( 'Kirki Repository', 'xtra-link' ),
      'link_url'  => 'https://xtra-strona.pl',
    ),

    array(
      'logos_img' => get_template_directory_uri() . '/assets/img/clients/c04.gif',
      'link_text' => esc_attr__( 'Kirki Repository', 'xtra-link' ),
      'link_url'  => 'https://xtra-strona.pl',
    ),

    array(
      'logos_img' => get_template_directory_uri() . '/assets/img/clients/c05.gif',
      'link_text' => esc_attr__( 'Kirki Repository', 'xtra-link' ),
      'link_url'  => 'https://xtra-strona.pl',
    ),

	),
	'fields' => array(
    'logos_img' => array(
      'type'        => 'image',
  	'settings'    => 'image_demo',
  	'label'       => __( 'This is the label', 'xtra-link' ),
  	'description' => __( 'This is the control description', 'xtra-link' ),
    ),

		'link_text' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Link Text', 'xtra-link' ),
			'description' => esc_attr__( 'This will be the label for your link', 'xtra-link' ),
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
