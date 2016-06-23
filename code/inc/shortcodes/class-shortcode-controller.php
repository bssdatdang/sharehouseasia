<?php  
/** 
* Shortcode function 
*/

class Shortcode_Controller extends Helper_Controller
{  
	function __construct(){
		$this->class_name = 'shortcodes';
	} 

	public function client_brand( $atts, $content = null ) 
	{  
		$default = array( 
			'block_title'				=> __( 'Client Brand', 'sharehouse' ), 
			'color_title'				=> '',
			'color_bg'					=> '',  
			'color_text'				=> '',  
			'bg_image'					=> '', 
			'block_number' 			=> '10',  
			'block_full'				=> '',  
			'category_list'			=> '' , 
			'extra_class'				=> '', 
			'sort_by'						=> ''
		); 

		$atts 								= wp_parse_args( $atts, $default );  
		$atts['id'] 					= $this->make_id();
		$atts['random_class'] = 'client_'.$this->make_id();
		$atts['extra_class']  .= ' '.$atts['random_class'];
		return $this->render('client_brand',array('atts'=>$atts, 'content' => $content), true);
	} 

	public function testimonials( $atts, $content = null ) 
	{  
		$default = array( 
			'block_title'				=> __( 'Testimonials', 'sharehouse' ),  
			'color_title'				=> '',
			'color_bg'					=> '',  
			'color_text'				=> '',  
			'bg_image'					=> '',   
			'block_number' 			=> '10',  
			'block_full'				=> '',    
			'extra_class'				=> '', 
			'sort_by'						=> ''
		); 

		$atts 								= wp_parse_args( $atts, $default );  
		$atts['id'] 					= $this->make_id();
		$atts['random_class'] = 'testimonials_'.$this->make_id();
		$atts['extra_class']  .= ' '.$atts['random_class'];
		return $this->render('testimonials',array('atts'=>$atts, 'content' => $content), true);
	} 

	public function event( $atts, $content = null ) 
	{  
		$default = array( 
			'block_title'				=> __( 'Events', 'sharehouse' ),  
			'color_title'				=> '',
			'color_bg'					=> '',  
			'color_text'				=> '',  
			'bg_image'					=> '', 
			'block_number' 			=> '10',  
			'block_full'				=> '',    
			'extra_class'				=> '',
			'sort_by'						=> ''
		); 

		$atts 								= wp_parse_args( $atts, $default );  
		$atts['id'] 					= $this->make_id();
		$atts['random_class'] = 'event_'.$this->make_id();
		$atts['extra_class']  .= ' '.$atts['random_class'];
		return $this->render('event',array('atts'=>$atts, 'content' => $content), true);
	} 
	
	public function service( $atts, $content = null ) 
	{   
		$default = array( 
			'block_title'				=> __( 'Services', 'sharehouse' ),  
			'color_title'				=> '',
			'color_bg'					=> '',  
			'color_text'				=> '',  
			'bg_image'					=> '',  
			'block_number' 			=> '3',  
			'block_full'				=> '',   
			'extra_class'				=> '',
			'sort_by'						=> ''  
		);   
		$atts 								= wp_parse_args( $atts, $default );  
		$atts['id'] 					= $this->make_id();
		$atts['random_class'] = 'service_'.$this->make_id();
		$atts['extra_class']  .= ' '.$atts['random_class'];
		return $this->render('service',array('atts'=>$atts, 'content' => $content), true);
	} 

	public function slider_video( $atts, $content = null ) 
	{  
		$default = array( 
			'block_title'				=> __( 'Slider Video', 'sharehouse' ), 
			'color_title'				=> '',
			'color_bg'					=> '',  
			'color_text'				=> '',  
			'bg_image'					=> '',      
			'block_link1'				=> '', 
			'block_link2'				=> '', 
			'extra_class'				=> '', 
			'sort_by'						=> ''  
		); 

		$atts 								= wp_parse_args( $atts, $default );  
		$atts['id'] 					= $this->make_id();
		$atts['random_class'] = 'slider-video_'.$this->make_id();
		$atts['extra_class']  .= ' '.$atts['random_class'];
		return $this->render('slider-video',array('atts'=>$atts, 'content' => $content), true);
	} 
	
	public function location( $atts, $content = null ) 
	{  
		$default = array( 
			'block_title'				=> __( 'Location', 'sharehouse' ),
			'color_title'				=> '',
			'color_bg'					=> '',  
			'color_text'				=> '',  
			'bg_image'					=> '', 
			'block_number' 			=> '10',  
			'block_full'				=> '',   
			'extra_class'				=> '', 
			'sort_by'						=> '' 
		); 

		$atts 								= wp_parse_args( $atts, $default );  
		$atts['id'] 					= $this->make_id();
		$atts['random_class'] = 'location_'.$this->make_id();
		$atts['extra_class']  .= ' '.$atts['random_class'];
		return $this->render('location',array('atts'=>$atts, 'content' => $content), true);
	} 

	public function register( $atts, $content = null ) 
	{  
		$default = array( 
			'block_title'				=> __( 'Register', 'sharehouse' ),
			'color_text'				=> '', 
			'color_bg'					=> '',  
			'block_small'				=> '',   
			'block_full'				=> '',   
			'extra_class'				=> ''
		); 

		$atts 								= wp_parse_args( $atts, $default );  
		$atts['id'] 					= $this->make_id();
		$atts['random_class'] = 'register_'.$this->make_id();
		$atts['extra_class']  .= ' '.$atts['random_class'];
		return $this->render('register',array('atts'=>$atts, 'content' => $content), true);
	} 
	
	public function custom_css($atts = false){
		if (is_array($atts)) {
			extract($atts); 
		} 

		$color_title 					= !isset($atts['color_title'])? 	'': esc_attr($atts['color_title']);
		$color_bg 						= !isset($atts['color_bg'])? 			'': esc_attr($atts['color_bg']);
		$color_text 					= !isset($atts['color_text'])? 		'': esc_attr($atts['color_text']);
		$bg_image		 					= !isset($atts['bg_image'])? 			'': esc_attr($atts['bg_image']);
		$extra_class 					= !isset($atts['random_class'])? 	'': esc_attr($atts['random_class']);
		
		if (!empty($color_title) && !empty($extra_class)) { 
			$css .= sprintf(' .%s .panel-title { color: %s;}', $extra_class , $color_title);
		}
		if (!empty($color_bg) && !empty($extra_class)) { 
			$css .= sprintf(' .%s { background: %s;}', $extra_class , $color_bg);
		}
		if (!empty($bg_image) && !empty($extra_class)) { 
			$bg_image = wp_get_attachment_image_src($bg_image,'')[0];
			$css .= sprintf(' .%s { background: url("%s") no-repeat center center fixed;   background-size: cover;} ', $extra_class , $bg_image);
		}
		if (!empty($color_text) && !empty($extra_class)) { 
			$css .= sprintf(' .%s .box-inner{ color: %s;}', $extra_class , $color_text);
		}
		return $css;
	}
}