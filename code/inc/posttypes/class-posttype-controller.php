<?php

/**
* Class Posttype_Controller
*/
class Posttype_Controller extends Helper_Controller
{   
	public function Register_Testimonial(){
		$params = array(
				'public'								=> true,
				'show_ui'								=> true,
				'rewrite'								=> array(
					'slug'									=>'testimonial',
					),
				'menu_position'					=> 30,   
				'show_in_nav_menus'			=> true,
				'exclude_from_search'		=> true, 
				'menu_icon'							=> 'dashicons-businessman',
				'supports'							=> array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
				'labels'								=> array(
					'name'									=> __( 'All Testimonials',                    'sharehouse' ),
					'singular_name'					=> __( 'Testimonial',                    'sharehouse' ),
					'menu_name'             => __( 'Testimonial',                         'sharehouse' ),
					'add_new'               => __( 'Add New',															'sharehouse' ),
					'add_new_item'          => __( 'Add New Testimonial',                 'sharehouse' ),
					'edit_item'             => __( 'Edit Testimonial',                    'sharehouse' ),
					'new_item'              => __( 'New Testimonial',                     'sharehouse' ),
					'all_items'             => __( 'All Testimonials',                    'sharehouse' ),
					'view_item'             => __( 'View Testimonial',                    'sharehouse' ),
					'search_items'          => __( 'Search Testimonial',                  'sharehouse' ),
					'not_found'             => __( 'No testimonial items found',          'sharehouse' ),
					'not_found_in_trash'    => __( 'No testimonial items found in Trash', 'sharehouse' ),
					'parent_item_colon'     => '',
				), 
			); 
		register_post_type( 'house_testimonial',$params );
	}
	public function Register_Service(){
		$params = array(
				'public'								=> true,
				'show_ui'								=> true,
				'rewrite'								=> array( 'slug'	=>'service', ),
				'menu_position'					=> 30,   
				'show_in_nav_menus'			=> true,
				'exclude_from_search'		=> true, 
				'menu_icon'							=> 'dashicons-clipboard',
				'supports'							=> array( 'title', 'thumbnail', 'editor' ),
				'labels'								=> array(
					'name'									=> __( 'All ServiceS',										'sharehouse' ),
					'singular_name'					=> __( 'Service',													'sharehouse' ),
					'menu_name'             => __( 'Service',													'sharehouse' ),
					'add_new'               => __( 'Add New',													'sharehouse' ),
					'add_new_item'          => __( 'Add New Service',									'sharehouse' ),
					'edit_item'             => __( 'Edit Service',										'sharehouse' ),
					'new_item'              => __( 'New Service',											'sharehouse' ),
					'all_items'             => __( 'All Services',										'sharehouse' ),
					'view_item'             => __( 'View Service',										'sharehouse' ),
					'search_items'          => __( 'Search Service',									'sharehouse' ),
					'not_found'             => __( 'No service items found',					'sharehouse' ),
					'not_found_in_trash'    => __( 'No service items found in Trash',	'sharehouse' ),
					'parent_item_colon'     => '',
				), 
			); 
		register_post_type( 'house_service',$params );
		register_taxonomy('service_cat', 'house_service' , array(
			'hierarchical'       => true,
			'rewrite'            => true,
			'query_var'          => true,
			'show_ui'						 => true,
			'label'          => __( 'Categories', 'sharehouse' ),
			'singular_label' => __( 'Category',   'sharehouse' ),
			)
		); 
	}

	public function Register_Client(){ 
		$params = array(
				'public'								=> true, 
				'rewrite'								=> array( 'slug'=>'client', ),
				'menu_position'					=> 30,   
				'show_in_nav_menus'			=> true,
				'exclude_from_search'		=> true, 
				'hierarchical'					=> true, 
				'menu_icon'							=> 'dashicons-groups',
				'supports'							=> array( 'title', 'page-attributes', 'thumbnail', 'editor'),
				'labels'								=> array(
					'name'									=> __( 'All Clients',                    'sharehouse' ),
					'singular_name'					=> __( 'Client',                    'sharehouse' ),
					'menu_name'             => __( 'Client',                         'sharehouse' ),
					'add_new'               => __( 'Add New',													'sharehouse' ),
					'add_new_item'          => __( 'Add New Client',                 'sharehouse' ),
					'edit_item'             => __( 'Edit Client',                    'sharehouse' ),
					'new_item'              => __( 'New Client',                     'sharehouse' ),
					'all_items'             => __( 'All Client',                    'sharehouse' ),
					'view_item'             => __( 'View Client',                    'sharehouse' ),
					'search_items'          => __( 'Search Client',                  'sharehouse' ),
					'not_found'             => __( 'No client items found',          'sharehouse' ),
					'not_found_in_trash'    => __( 'No client items found in Trash', 'sharehouse' ),
					'parent_item_colon'     => '',
				), 
			); 
		register_post_type( 'house_client',$params );
		//Client  post type - taxonomy 
		register_taxonomy('client_cat', 'house_client' , array(
			'hierarchical'       => true,
			'rewrite'            => true,
			'query_var'          => true,
			'show_ui'						 => true,
			'label'          => __( 'Categories', 'sharehouse' ),
			'singular_label' => __( 'Category',   'sharehouse' ),
			)
		); 
	}
	public function Register_Event()
	{ 
		$params = array(
				'public'								=> true,
				'show_ui'								=> true,
				'rewrite'								=> array(
					'slug'									=>'event',
					),
				'menu_position'					=> 30,  
        'hierarchical' => false,
				'taxonomies'						=> array( 'post_tag','themes_categories'),
				'query_var'							=> true,
				'show_in_nav_menus'			=> true,
				'exclude_from_search'		=> true, 
				'menu_icon'							=> 'dashicons-list-view',
				'supports'							=> array( 'title', 'page-attributes', 'thumbnail','excerpt','comments','editor' ),
				'labels'								=> array(
					'name'									=> __( 'All Events',                    'sharehouse' ),
					'singular_name'					=> __( 'Event',													'sharehouse' ),
					'menu_name'             => __( 'Event',                         'sharehouse' ),
					'add_new'               => __( 'Add New',                       'sharehouse' ),
					'add_new_item'          => __( 'Add New Event',                 'sharehouse' ),
					'edit_item'             => __( 'Edit Event',                    'sharehouse' ),
					'new_item'              => __( 'New Event',                     'sharehouse' ),
					'all_items'             => __( 'All Events',                    'sharehouse' ),
					'view_item'             => __( 'View Event',                    'sharehouse' ),
					'search_items'          => __( 'Search Event',                  'sharehouse' ),
					'not_found'             => __( 'No event items found',          'sharehouse' ),
					'not_found_in_trash'    => __( 'No event items found in Trash', 'sharehouse' ),
					'parent_item_colon'     => '',
				), 
			);
		register_post_type( 'house_event',$params );


		//Event  post type - taxonomy
		register_taxonomy('event_cat', 'house_event' , array(
			'hierarchical'       => true,
			'rewrite'            => true,
			'query_var'          => true,
			'show_ui'						 => true,
			'label'          => __( 'Categories', 'sharehouse' ),
			'singular_label' => __( 'Category',   'sharehouse' ),
			)
		); 
	} 

	function Register_Product(){
		//Product  post type - taxonomy
		register_taxonomy('location_cat', 'product' , array(
			'hierarchical'			=> true,
			'query_var'					=> true,
			'rewrite'						=> array( 'slug' => 'location' ), 
			'label'							=> __( 'Locations', 'sharehouse' ),
			'singular_name'			=> __( 'Location', 'sharehouse' ),
			'menu_name'					=> __( 'Locations', 'sharehouse' ),  
		)); 
	}

}
add_action('init',array('Posttype_Controller','Register_Testimonial'));
add_action('init',array('Posttype_Controller','Register_Product'));
add_action('init',array('Posttype_Controller','Register_Event'));
add_action('init',array('Posttype_Controller','Register_Client'));
add_action('init',array('Posttype_Controller','Register_Service'));