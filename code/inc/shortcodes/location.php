<?php  
	$orderby = Helper_Controller::get_sort_by();
	$categories = Helper_Controller::get_category('location_cat');
	$params = array( 
		array( 
			'type'            => 'textfield',
			'heading'         => __( 'What is the title?', 'sharehouse' ),
			'param_name'      => 'block_title',
			'value'           => 'Location',
			'description'     => __( 'Title show in box heading.', 'sharehouse' ),
			'default'					=> 'Location'
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => __( 'What is the title color?', 'sharehouse' ),
			'param_name'  => 'color_title',
			'value'       => '',
			'description' => __( 'Choose block title color.', 'sharehouse' )
		),  
		array( 
			'type'            => 'textfield',
			'heading'         => __( 'How many number to display?', 'sharehouse' ),
			'param_name'      => 'block_number',
			'value'           => '10',
			'description'     => __( 'This is number client to display in block.', 'sharehouse' ),
			'default'					=> '10'
		),   
		array( 
			'type'            => 'textfield',
			'heading'         => __( 'How many number to start?', 'sharehouse' ),
			'param_name'      => 'block_offset',
			'value'           => '0',
			'description'     => __( 'This is number client to start in block.', 'sharehouse' ),
			'default'					=> '0'
		),  
		  
		array( 
			'type'            => 'textfield',
			'heading'         => __( 'Would you like to add extra class?', 'sharehouse' ),
			'param_name'      => 'extra_class', 
			'description'     => __( 'The class add in cover of block.', 'sharehouse' ),
			'default'					=> ''
		),  
		
		array( 
			'type'            => 'checkbox',
			'heading'         => __( 'Box display?', 'sharehouse' ),
			'param_name'      => 'block_full', 
			'description'     => __( 'Enable/Disable full display in block.', 'sharehouse' ),  
		),  
	); 
	vc_map(array( 
		'name'				=> __("Location", 'sharehouse'), 
		'base'				=> 'bs_sharehouse_location',  
		'icon'				=> 'bs_sharehouse_location_icon',
		'category'		=> __('Sharehouse','sharehouse'), 
		'params'			=> $params ,  
	)); 
	?>