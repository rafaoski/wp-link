<?php
Kirki::add_field( 'my_config', array(
	'type'        => 'switch',
	'settings'    => 'on_of_4',
	'label'       => __( 'On Off Social Profile', 'xtra-link' ),
	'section'     => 'footer_social',
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
	'section'     => 'footer_social',
	'priority'    => 20,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('your custom value', 'xtra-link' ),
	),
	'settings'    => 'footer_social',
	'default'     => array(

		array(
      'icon' => 'fa-facebook',
			'link_text' => esc_attr__( 'FACEBOOK', 'xtra-link' ),
			'link_url'  => 'https://www.facebook.com/',
      'description' => esc_attr__( 'Become A Friend', 'xtra-link' )
		),
		array(
      'icon' => 'fa-twitter',
			'link_text' => esc_attr__( 'TWITTER', 'xtra-link' ),
			'link_url'  => 'https://twitter.com',
      'description' => esc_attr__( 'Follow Us', 'xtra-link' )
		),

    array(
      'icon' => 'fa-google-plus',
      'link_text' => esc_attr__( 'GOOGLE +', 'xtra-link' ),
      'link_url'  => 'https://plus.google.com',
      'description' => esc_attr__( 'Add Us To Your Circle', 'xtra-link' )
    ),

	),

	'fields' => array(

    'icon' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Add Font Awesome Icon', 'xtra-link' ),
			'description' => esc_attr__( 'Like -- fa-google-plus', 'xtra-link' ),
			'default'     => '',
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

    'description' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Description', 'xtra-link' ),
      'description' => esc_attr__( 'Add Some Description', 'xtra-link' ),
    ),
	)
) );
