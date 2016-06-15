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
			'heading'         => __( 'What kind of link do you want to show video on page?', 'sharehouse' ),
			'param_name'      => 'block_link1',
			'description'     => __( 'This is link video display in block.', 'sharehouse' ) 
		),  

		array( 
			'type'            => 'textfield',
			'heading'         => __( 'What kind of link do you want to show video after click?', 'sharehouse' ),
			'param_name'      => 'block_link2', 
			'description'     => __( 'This is link video display in block  after click.', 'sharehouse' ) 
		),    
		  
		array( 
			'type'            => 'textfield',
			'heading'         => __( 'Would you like to add extra class?', 'sharehouse' ),
			'param_name'      => 'extra_class', 
			'description'     => __( 'The class add in cover of block.', 'sharehouse' ),
			'default'					=> ''
		),  
		 
		array( 
			'type'            => 'textarea',
			'heading'         => __( 'What is the description to display in block?', 'sharehouse' ),
			'param_name'      => 'block_description',
			'value'           => '10',
			'description'     => __( 'This is the description to display in block', 'sharehouse' ),
			'default'					=> '10'
		),
	); 
	vc_map(array( 
		'name'				=> __("Slider Video", 'sharehouse'), 
		'base'				=> 'bs_sharehouse_slider_video',  
		'icon'				=> 'bs_sharehouse_slider_video_icon',
		'category'		=> __('Sharehouse','sharehouse'), 
		'params'			=> $params ,  
	)); 
	?>