<?php
add_action( 'cmb2_admin_init', 'myServices' );

function myServices() {

	$prefix = '_services_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'opcje_portfolio',
		'title'        => __( 'Edit Options', 'xtra-link' ),
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'template-services.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );


	$cmb->add_field( array(
		'name' => __( 'Add Subtitule 1 Text', 'xtra-link' ),
		'id' => $prefix . '1_txt',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Add Subtitule 2 Text', 'xtra-link' ),
		'id' => $prefix . '2_txt',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Add Process Text', 'xtra-link' ),
		'id' => $prefix . '3_txt',
		'type' => 'text',
	) );


// $cmb->add_field( array(
// 	'name' => __( 'Upload Process Image', 'xtra-link' ),
// 	'id' => $prefix . '4_img',
// 	'type' => 'file_list',
// 	// 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
//         'query_args' => array( 'type' => 'image' ), // Only images attachment
// 	// Optional, override default text strings
// 	'text' => array(
// 		'add_upload_files_text' => __('Add Images','xtra-link'), // default: "Add or Upload Files"
// 		// 'remove_image_text' => 'Remove IMG', // default: "Remove Image"
// 		// 'file_text' => 'file', // default: "File:"
// 		// 'file_download_text' => 'Download', // default: "Download"
// 		// 'remove_text' => 'Remove', // default: "Remove"
// 	),

// ) );


$group_process_id = $cmb->add_field( array(
  	'id'          => $prefix . '5_add_process',
  	'type'        => 'group',
  	'description' => __( 'Add Some Process', 'xtra-link' ),
  	// 'repeatable'  => false, // use false if you want non-repeatable group
  	'options'     => array(
  		'group_title'   => __( 'Entry {#}', 'xtra-link' ), // since version 1.1.4, {#} gets replaced by row number
  		'add_button'    => __( 'Add Another Entry', 'xtra-link' ),
  		'remove_button' => __( 'Remove Entry', 'xtra-link' ),
  		'sortable'      => true, // beta
  		'closed'     => true, // true to have the groups closed by default
  	),
  ) );

  $cmb->add_group_field( $group_process_id, array(
  	'name' => 'Add Heading Text',
  	'id'   => $prefix . 'heading',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $group_process_id, array(
  	'name' => 'Add Content Text',
  	'id'   => $prefix . 'content',
  	'type' => 'textarea_small',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

 $cmb->add_group_field( $group_process_id, array(
	'name'    => __('Upload File', 'xtra-link' ),
	'desc'    => __( 'Upload an image or enter an URL.', 'xtra-link' ),
	'id'      => $prefix . 'img',
	'type'    => 'file',
) );


  $group_panel_id = $cmb->add_field( array(
  	'id'          => $prefix . '6_add_panel',
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
  $cmb->add_group_field( $group_panel_id, array(
  	'name' => 'Add icon',
  	'id'   => $prefix . 'icon',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $group_panel_id, array(
  	'name' => 'Add Heading',
  	'id'   => $prefix . 'heading',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $group_panel_id, array(
  	'name' => 'Description',
  	'description' => 'Write a short description for this entry',
  	'id'   => $prefix . 'description',
  	'type' => 'textarea_small',
  ) );


}
