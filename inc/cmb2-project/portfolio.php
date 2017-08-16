<?php
add_action( 'cmb2_admin_init', 'myPortfolio' );

function myPortfolio() {

	$prefix = '_cmb_port_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'opcje_portfolio',
		'title'        => __( 'Edit Options', 'xtra-link' ),
		'object_types' => array( 'link_port'),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$cmb->add_field( array(
		'name' => __( 'Add Subtittle', 'xtra-link' ),
		'id' => $prefix . 'subtittle',
		'type' => 'text',
	) );


	$cmb->add_field( array(
		'name' => __( 'Add Img', 'xtra-link' ),
		'id' => $prefix . 'f_img_port',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Text Left', 'xtra-link' ),
		'id' => $prefix . 'txt_area_1',
		'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 5, )
	) );


	$cmb->add_field( array(
		'name' => __( 'Text Right', 'xtra-link' ),
		'id' => $prefix . 'txt_area_2',
		'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 5, )
	) );


	$cmb->add_field( array(
		'name' => __( 'Add Next Img', 'xtra-link' ),
		'id' => $prefix . 'img_port_n',
		'type' => 'file',
	) );

$cmb->add_field( array(
	'name' => __( 'Add Heading', 'xtra-link' ),
	'id'   => $prefix . 'heading_txt_1',
	'type' => 'text',
	// 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
) );

$cmb->add_field( array(
	'name' => __( 'Add Gallery Images', 'xtra-link' ),
	'desc' => '',
	'id'   => 'img_port_3',
	'type' => 'file_list',
	// 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment
	// Optional, override default text strings
	'text' => array(
		'add_upload_files_text' => __('Add Images','xtra-link'), // default: "Add or Upload Files"
		// 'remove_image_text' => 'Remove IMG', // default: "Remove Image"
		// 'file_text' => 'file', // default: "File:"
		// 'file_download_text' => 'Download', // default: "Download"
		// 'remove_text' => 'Remove', // default: "Remove"
	),

) );


}

add_action( 'cmb2_admin_init', 'portfolioPage' );

function portfolioPage() {

	$prefix = '_port_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'opcje_portfolio',
		'title'        => __( 'Edit Options Page', 'xtra-link' ),
		'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-portfolio.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$cmb->add_field( array(
		'name' => __( 'Add Subtittle', 'xtra-link' ),
		'id' => $prefix . 'subtittle_port',
		'type' => 'text',
	) );


	$cmb->add_field( array(
		'name' => __( 'Text Top', 'xtra-link' ),
		'id' => $prefix . 'txt_ar_1',
		'type' => 'text',
	) );


	$cmb->add_field( array(
		'name' => __( 'Text Bottom', 'xtra-link' ),
		'id' => $prefix . 'txt_ar_2',
		'type' => 'textarea_small',
      
		
	) );

		$cmb->add_field( array(
		'name' => __( 'Add Url Button', 'xtra-link' ),
		'id' => $prefix . 'href_1',
		'type' => 'text',

	) );
	
		$cmb->add_field( array(
		'name' => __( 'Add Text Button', 'xtra-link' ),
		'id' => $prefix . 'href_2',
		'type' => 'text',
   
		
	) );

}