<?php  
	$orderby = Helper_Controller::get_sort_by();
	$categories = Helper_Controller::get_category('service_cat');
	$params = array( 
		array( 
			'type'            => 'textfield',
			'heading'         => __( 'What is the title?', 'sharehouse' ),
			'param_name'      => 'block_title',
			'value'           => 'Services',
			'description'     => __( 'Title show in box heading.', 'sharehouse' ),
			'default'					=> 'Services'
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
		array(
			'type'						=> 'dropdown',
			'heading'					=> __( 'Sort By', 'sharehouse' ),
			'param_name'			=> 'sort_by',
			'value'						=> $orderby,
			'description'			=> __( 'Choose criteria to display.', 'sharehouse' )
		),

		array(
			'type' => 'param_group',
			'heading' => __( 'Category', 'sharehouse' ),
			'param_name' => 'category_list',
			'params' => array(
				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'heading' => __( 'Add Category', 'sharehouse' ),
					'param_name' => 'id',
					'value'       => $categories,
					'description' => __( 'Choose special category to filter', 'sharehouse'  )
				),
			),
			'value'       => '',
			'callbacks'   => array(
				'after_add' => 'vcChartParamAfterAddCallback'
			),
			'description' => __( 'Default no filter by category.', 'sharehouse' ),
			'group' => 'Filter'
		), 
		array( 
			'type'            => 'textarea_raw_html',
			'heading'         => __( 'What is the description to display in block?', 'sharehouse' ),
			'param_name'      => 'block_description',
			'value'           => '10',
			'description'     => __( 'This is the description to display in block', 'sharehouse' ),
			'default'					=> '10'
		),
	); 
	vc_map(array( 
		'name'				=> __("Services", 'sharehouse'), 
		'base'				=> 'bs_sharehouse_service',  
		'icon'				=> 'bs_sharehouse_service_icon',
		'category'		=> __('Sharehouse','sharehouse'), 
		'params'			=> $params ,  
	)); 
	?>