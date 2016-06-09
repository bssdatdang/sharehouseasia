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
			'block_title'			=> __( 'Client Brand', 'sharehouse' ), 
			'color_title'			=> '',  
			'block_number' 		=> '10',  
			'block_full'			=> '',  
			'category_list'		=> ''
		); 

		$atts = wp_parse_args( $atts, $default );  
		$atts['id'] = $this->make_id();
		$atts['extra_class'] = 'client_'.$this->make_id();
		return $this->render('client_brand',array('atts'=>$atts, 'content' => $content), true);
	} 

	public function testimonials( $atts, $content = null ) 
	{  
		$default = array( 
			'block_title'			=> __( 'Testimonials', 'sharehouse' ), 
			'color_title'			=> '',  
			'block_number' 		=> '10',  
			'block_full'			=> '',  
		); 

		$atts = wp_parse_args( $atts, $default );  
		$atts['id'] = $this->make_id();
		$atts['extra_class'] = 'testimonials_'.$this->make_id();
		return $this->render('testimonials',array('atts'=>$atts, 'content' => $content), true);
	} 

	public function event( $atts, $content = null ) 
	{  
		$default = array( 
			'block_title'			=> __( 'Events', 'sharehouse' ), 
			'color_title'			=> '',  
			'block_number' 		=> '10',  
			'block_full'			=> '',  
		); 

		$atts = wp_parse_args( $atts, $default );  
		$atts['id'] = $this->make_id();
		$atts['extra_class'] = 'event_'.$this->make_id();
		return $this->render('event',array('atts'=>$atts, 'content' => $content), true);
	} 
	
	public function service( $atts, $content = null ) 
	{  
		$default = array( 
			'block_title'			=> __( 'Events', 'sharehouse' ), 
			'color_title'			=> '',  
			'block_number' 		=> '10',  
			'block_full'			=> '',   
			'extra_class'			=> '',  
		); 

		$atts = wp_parse_args( $atts, $default );  
		$atts['id'] = $this->make_id();
		$atts['extra_class'] .= ' service_'.$this->make_id();
		return $this->render('service',array('atts'=>$atts, 'content' => $content), true);
	} 
	
	public function location( $atts, $content = null ) 
	{  
		$default = array( 
			'block_title'			=> __( 'Location', 'sharehouse' ), 
			'color_title'			=> '',  
			'block_number' 		=> '10',  
			'block_full'			=> '',   
			'extra_class'			=> '',  
		); 

		$atts = wp_parse_args( $atts, $default );  
		$atts['id'] = $this->make_id();
		$atts['extra_class'] .= ' location_'.$this->make_id();
		return $this->render('location',array('atts'=>$atts, 'content' => $content), true);
	} 
	
	public function custom_css($atts = false){
		if (is_array($atts)) {
			extract($atts); 
		} 
		$color_title = !isset($atts['color_title'])? '': esc_attr($atts['color_title']);
		$extra_class = !isset($atts['extra_class'])? '': esc_attr($atts['extra_class']);
		if (!empty($color_title) && !empty($extra_class)) { 
			$css .= sprintf('  .%s .panel-title { color: %s;}', $extra_class , $color_title);
		}
		return $css;
	}
}