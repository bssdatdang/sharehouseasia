<?php  
  $orderby = Helper_Controller::get_sort_by(); 
  $params = array( 
    array( 
      'type'            => 'textfield',
      'heading'         => __( 'What is the title?', 'sharehouse' ),
      'param_name'      => 'block_title',
      'value'           => 'posts' ,
      'description'     => __( 'Title show in box heading.', 'sharehouse' ),
      'default'         => 'post'
    ),
    array(
      'type'        => 'colorpicker',
      'heading'     => __( 'What is the title color?', 'sharehouse' ),
      'param_name'  => 'color_title',
      'value'       => '',
      'description' => __( 'Choose block title color.', 'sharehouse' ),
      'default'     => '#000000'
    ),  
    array(
      'type'        => 'colorpicker',
      'heading'     => __( 'What is the background color?', 'sharehouse' ),
      'param_name'  => 'color_bg',
      'value'       => '',
      'description' => __( 'Choose block background color.', 'sharehouse' ),
      'default'     => '#000000'
    ),  
    array(
      'type'        => 'colorpicker',
      'heading'     => __( 'What is the text color?', 'sharehouse' ),
      'param_name'  => 'color_text',
      'value'       => '',
      'description' => __( 'Choose block text color.', 'sharehouse' ),
      'default'     => '#000000'
    ),   
    array( 
      'type'            => 'dropdown',
      'heading'         => __( 'What is the post type to display?', 'sharehouse' ),
      'param_name'      => 'post_type',
      'value'           => array(
                          'Posts'          => 'post', 
                          'Events'         => 'house_event',
                          'Houses'         => 'product',
                          'Testimonials'   => 'house_testimonial',
                          'Services'       => 'house_service',
                          'Clients'        => 'house_client',
                            ),
      'description'     => __( 'This is post type to display post in block.', 'sharehouse' ),
      'default'         => 'post'
    ),  
    array( 
      'type'            => 'dropdown',
      'heading'         => __( 'What is the style to display?', 'sharehouse' ),
      'param_name'      => 'show_type',
      'value'           => array(
                          'Grid'    => 'grid',
                          'List 1'  => 'list_1',
                          'List 2'  => 'list_2',
                          'List 3'  => 'list_3'
                            ),
      'description'     => __( 'This is style to display post in block.', 'sharehouse' ),
      'default'         => 'grid'
    ),     
    array( 
      'type'            => 'textfield',
      'heading'         => __( 'How many column to show?', 'sharehouse' ),
      'param_name'      => 'column_offset',
      'value'           => '0',
      'description'     => __( 'This is number column post to display in block.', 'sharehouse' ),
      'default'         => '0'
    ), 
    array( 
      'type'            => 'textfield',
      'heading'         => __( 'How many number to display?', 'sharehouse' ),
      'param_name'      => 'block_number',
      'value'           => '9',
      'description'     => __( 'This is number post to display in block.', 'sharehouse' ),
      'default'         => '9'
    ),   
    array( 
      'type'            => 'textfield',
      'heading'         => __( 'How many number to start?', 'sharehouse' ),
      'param_name'      => 'block_offset',
      'value'           => '0',
      'description'     => __( 'This is number post to start in block.', 'sharehouse' ),
      'default'         => '0'
    ),  
      
    array( 
      'type'            => 'checkbox',
      'heading'         => __( 'Box display?', 'sharehouse' ),
      'param_name'      => 'block_full', 
      'description'     => __( 'Enable/Disable full display in block.', 'sharehouse' ),  
    ),      
    array( 
      'type'            => 'textfield',
      'heading'         => __( 'Would you like to add extra class?', 'sharehouse' ),
      'param_name'      => 'extra_class', 
      'description'     => __( 'The class add in cover of block.', 'sharehouse' ),
      'default'         => ''
    ),  
    array(
      'type'            => 'dropdown',
      'heading'         => __( 'Sort By', 'sharehouse' ),
      'param_name'      => 'sort_by',
      'value'           => $orderby,
      'description'     => __( 'Choose criteria to display.', 'sharehouse' )
    )
  ); 
  vc_map(array( 
    'name'        => __("Posts List", 'sharehouse'), 
    'base'        => 'bs_sharehouse_sh_posts',  
    'icon'        => 'bs_sharehouse_post_list_icon',
    'category'    => __('Sharehouse','sharehouse'), 
    'params'      => $params ,  
  )); 
  ?>