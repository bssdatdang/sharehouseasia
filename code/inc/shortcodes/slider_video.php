<?php  
	$orderby = Helper_Controller::get_sort_by();
	$categories = Helper_Controller::get_category('service_cat');
	$params = array( 
		array( 
			'type'            => 'textfield',
			'heading'         => __( 'What is the title?', 'sharehouse' ),
			'param_name'      => 'block_title',
			'value'           => __( 'Live there', 'sharehouse' ),
			'description'     => __( 'Title show in box heading.', 'sharehouse' ),
			'default'					=> __( 'Live there', 'sharehouse' )
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => __( 'What is the title color?', 'sharehouse' ),
			'param_name'  => 'color_title',
			'value'       => '',
			'description' => __( 'Choose block title color.', 'sharehouse' ),
			'default'			=> '#000000'
		),  
		array(
			'type'        => 'colorpicker',
			'heading'     => __( 'What is the background color?', 'sharehouse' ),
			'param_name'  => 'color_bg',
			'value'       => '',
			'description' => __( 'Choose block background color.', 'sharehouse' ),
			'default'			=> '#000000'
		),  
		array(
			'type'        => 'colorpicker',
			'heading'     => __( 'What is the text color?', 'sharehouse' ),
			'param_name'  => 'color_text',
			'value'       => '',
			'description' => __( 'Choose block text color.', 'sharehouse' ),
			'default'			=> '#000000'
		),     
		array( 
			'type'            => 'attach_image',
			'heading'         => __( 'What is the image for block background?', 'sharehouse' ),
			'param_name'      => 'bg_image',
			'value'           => '',
			'description'     => __( 'This is the image for block background.', 'sharehouse' ),
			'default'					=> ''
		),
		array( 
			'type'            => 'textfield',
			'heading'         => __( 'What kind of link do you want to show video on page?', 'sharehouse' ),
			'param_name'      => 'block_link1',
			'description'     => __( 'This is link video display in block.', 'sharehouse' ),
			'default'					=> 'https://a0.muscache.com/airbnb/static/P1-background-vid-compressed-2.mp4'
		),  

		array( 
			'type'            => 'textfield',
			'heading'         => __( 'What kind of link do you want to show video after click?', 'sharehouse' ),
			'param_name'      => 'block_link2', 
			'description'     => __( 'This is link video display in block  after click.', 'sharehouse' ) ,
			'default'					=> 'https://a0.muscache.com/airbnb/static/US_60_ANTHEM.mp4'
		),    
		  
		array( 
			'type'            => 'textfield',
			'heading'         => __( 'Would you like to add extra class?', 'sharehouse' ),
			'param_name'      => 'extra_class', 
			'description'     => __( 'The class add in cover of block.', 'sharehouse' ),
			'default'					=> ''
		),  
		
		array( 
			'type'            => 'textarea_html', 
			'heading'         => __( 'What is the description to display in block?', 'sharehouse' ),
			'param_name'      => 'content', 
			'value'						=> '',
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