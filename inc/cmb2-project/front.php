<?php
add_action( 'cmb2_admin_init', 'myFront' );

function myFront() {

	$prefix = '_cmb_front_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'opcje_portfolio',
		'title'        => __( 'Edit Options', 'xtra-link' ),
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'template-front.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );


	$cmb->add_field( array(
		'name' => __( 'Add Link Text', 'xtra-link' ),
		'id' => $prefix . 'link_text',
		'type' => 'text',
	) );

  $cmb->add_field( array(
		'name' => __( 'Add Link URL', 'xtra-link' ),
		'id' => $prefix . 'link_url',
		'type' => 'text_url',
	) );



  $group_field_id = $cmb->add_field( array(
  	'id'          => $prefix . 'add_panel',
  	'type'        => 'group',
  	'description' => __( 'Add Some Panels', 'xtra-link' ),
  	// 'repeatable'  => false, // use false if you want non-repeatable group
  	'options'     => array(
  		'group_title'   => __( 'Entry {#}', 'xtra-link' ), // since version 1.1.4, {#} gets replaced by row number
  		'add_button'    => __( 'Add Another Entry', 'xtra-link' ),
  		'remove_button' => __( 'Remove Entry', 'xtra-link' ),
  		'sortable'      => true, // beta
  		'closed'     => true, // true to have the groups closed by default
  	),
  ) );

  // Id's for group's fields only need to be unique for the group. Prefix is not needed.
  $cmb->add_group_field( $group_field_id, array(
  	'name' => 'Add icon',
  	'id'   => $prefix . 'icon',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $group_field_id, array(
  	'name' => 'Add Heading',
  	'id'   => $prefix . 'heading',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $group_field_id, array(
  	'name' => 'Description',
  	'description' => 'Write a short description for this entry',
  	'id'   => $prefix . 'description',
  	'type' => 'textarea_small',
  ) );

}
