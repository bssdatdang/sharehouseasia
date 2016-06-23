<?php
  $params = array( 
    array( 
      'type'            => 'textfield',
      'heading'         => __( 'What is the title?', 'sharehouse' ),
      'param_name'      => 'block_title',
      'value'           => 'Register',
      'description'     => __( 'Title show in box heading.', 'sharehouse' ),
      'default'         => 'Register'
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
      'type'            => 'textfield',
      'heading'         => __( 'What is the description?', 'sharehouse' ),
      'param_name'      => 'block_small',
      'value'           => '',
      'description'     => __( 'Description show in box heading.', 'sharehouse' ),
      'default'         => ''
    ),
    array( 
      'type'            => 'textfield',
      'heading'         => __( 'Would you like to add extra class?', 'sharehouse' ),
      'param_name'      => 'extra_class', 
      'description'     => __( 'The class add in cover of block.', 'sharehouse' ),
      'default'         => ''
    ),  
    
    array( 
      'type'            => 'checkbox',
      'heading'         => __( 'Box display?', 'sharehouse' ),
      'param_name'      => 'block_full', 
      'description'     => __( 'Enable/Disable full display in block.', 'sharehouse' ),  
    ), 
  ); 
  vc_map(array( 
    'name'        => __("Register", 'sharehouse'), 
    'base'        => 'bs_sharehouse_register',  
    'icon'        => 'bs_sharehouse_register_icon',
    'category'    => __('Sharehouse','sharehouse'), 
    'params'      => $params ,  
  )); 
  ?>