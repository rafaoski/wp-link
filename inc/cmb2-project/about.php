<?php
add_action( 'cmb2_admin_init', 'myAbout' );

function myAbout() {

	$prefix = '_ab_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'opcje_portfolio',
		'title'        => __( 'Edit Options Page', 'xtra-link' ),
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'template-about.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );


	$cmb->add_field( array(
		'name' => __( 'Add Heading Text 1', 'xtra-link' ),
		'id' => $prefix . 'txt_1',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Add Heading Text 2', 'xtra-link' ),
		'id' => $prefix . 'txt_2',
		'type' => 'text',
	) );

$cmb->add_field( array(
	'name'    => __('Upload File', 'xtra-link' ),
	'desc'    => __( 'Upload an image or enter an URL.', 'xtra-link' ),
	'id'      => $prefix . 'img_3',
	'type'    => 'file',
) );

	$cmb->add_field( array(
		'name' => __( 'Add Heading', 'xtra-link' ),
		'id' => $prefix . 'txt_4',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Add Content', 'xtra-link' ),
		'id' => $prefix . 'txt_5',
		'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 5, )
	) );

$group_field_id = $cmb->add_field( array(
	'id'          => $prefix . 'about_group',
	'type'        => 'group',
	'description' => __( 'Add Some Panels', 'xtra-link' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
	),
) );

// Id's for group's fields only need to be unique for the group. Prefix is not needed.
  $cmb->add_group_field( $group_field_id, array(
  	'name' => __('Add icon','xtra-link' ),
  	'id'   => $prefix . 'icon',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $group_field_id, array(
  	'name' => __('Add Heading','xtra-link' ),
  	'id'   => $prefix . 'heading',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $group_field_id, array(
  	'name' => __('Description','xtra-link' ),
  	'description' => __('Write a short description for this entry','xtra-link' ),
  	'id'   => $prefix . 'desc',
  	'type' => 'textarea_small',
  ) );


	$cmb->add_field( array(
		'name' => __( 'Add Heading', 'xtra-link' ),
		'id' => $prefix . 'txt_6',
		'type' => 'text',
	) );
	$cmb->add_field( array(
		'name' => __( 'Add Content', 'xtra-link' ),
		'id' => $prefix . 'txt_7',
		'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 5, )
	) );


	$cmb->add_field( array(
		'name' => __( 'Add Heading', 'xtra-link' ),
		'id' => $prefix . 'txt_8',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Add Content', 'xtra-link' ),
		'id' => $prefix . 'txt_9',
		'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 5, )
	) );

$cmb->add_field( array(
	'name' => __( 'Add Info Pdf', 'xtra-link' ),
	'desc'    => 'Upload PDF Doc.',
	'id' => $prefix . 'pdf',
	'type'    => 'file',
	// Optional:
	'options' => array(
		'url' => false, // Hide the text input for the url
	),
	'text'    => array(
		'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
	),
	// query_args are passed to wp.media's library query.
	'query_args' => array(
		'type' => 'application/pdf', // Make library only display PDFs.
	),
) );

$group_team = $cmb->add_field( array(
	'id'          => $prefix . 'about_team',
	'type'        => 'group',
	'description' => __( 'Your Team', 'xtra-link' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Team {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
	),
) );

// Id's for group's fields only need to be unique for the group. Prefix is not needed.
  $cmb->add_group_field( $group_team, array(
  	'name' => 'Add Image',
  	'id'   => $prefix . 'img',
  	'type' => 'file',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $group_team, array(
  	'name' => __('Name','xtra-link'),
  	'id'   => $prefix . '1_heading',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $group_team, array(
  	'name' => __('Function','xtra-link'),
  	'id'   => $prefix . '2_heading',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $group_team, array(
  	'name' => __('Description','xtra-link'),
  	'description' => __('Write a short description for this entry','xtra-link'),
  	'id'   => $prefix . 'textarea',
  	'type' => 'textarea_small',
  ) );

  $cmb->add_group_field( $group_team, array(
  	'name' => __('Facebook URL','xtra-link'),
  	'id'   => $prefix . 'facebook',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $group_team, array(
  	'name' => __('Twitter URL','xtra-link'),
  	'id'   => $prefix . 'twitter',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $group_team, array(
  	'name' => __('Adress E-Mail','xtra-link'),
  	'id'   => $prefix . 'e_mail',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

}
