<?php
/**
* 
*/
class Helper_Controller 
{  
	protected $class_name = 'shortcodes';


	public function custom_css($atts = false){
		return '';
	}
	public function render($name, $atts = false, $rt = false){ 

		if (is_array($atts)) {
			extract($atts); 
		} 

		do_action('sharehouse_add_custom_css', $this->custom_css($atts));

		if ($rt) {
			ob_start();  
			ob_implicit_flush( false ); 
			if (file_exists(SHAREHOUSE_THEME_INC.'/'.$this->class_name.'/views/'.$name.'.php')) { 
				require(SHAREHOUSE_THEME_INC.'/'.$this->class_name.'/views/'.$name.'.php'); 
			}  
			return ob_get_clean();
		}
		if (file_exists(SHAREHOUSE_THEME_INC.'/'.$this->class_name.'/views/'.$name.'.php')) { 
			require(SHAREHOUSE_THEME_INC.'/'.$this->class_name.'/views/'.$name.'.php'); 
		} 
	}

	public function make_id() {
		return uniqid(rand());
	}

	public  static  function get_category($type = ''){
		$type = empty($type)? 'category' : $type;
		$params = array(
			'taxonomy' => $type,
			'hide_empty' => false,
			) ;

		$arr = array();
		$arr[__('---All--','sharehouse')] = '0';
		$categories  = get_categories($params); 
		if (empty($categories)) {
			return $arr;
		}
		foreach ($categories as $c) {
			$arr[$c->name] = $c->term_id;
		}
		return $arr;
	}

	public  static  function get_category_s($arr = array(), $r = false){
		if (is_array($arr ) && count($arr ) > 0) {
			if (in_array('0',$arr)) {
				if ($r) {
					return array(0);
				}
				return '';
			}
			$s = [];
			foreach ($arr as $a) {
				$s[] = $a->id;
			}
			if ($r) {
				return $s;
			}
			return implode(',', $s);
		}
		if ($r) {
			return array(0);
		}
		return '';
	}

	public static function get_sort_by($sort = ''){ 
		if (empty($sort)) {
			return array(
				'- Latest -'               => '0',
				'A -> Z'                   => 'az_order',
				'Z -> A'                   => 'za_order',
				'Random posts today'       => 'random_today',
				'Random posts a week ago'  => 'random_7_day',
				'Random posts a month ago' => 'random_month',
				'Random Posts'             => 'random_posts',
				'Most Commented'           => 'comment_count',
				'Popular'                  => 'popular',
			);
		}
		switch ($sort) {
			case '0':
				return array(
					'orderby' => 'ID',
					'order '	=> 'DESC'
					);
				break;
			case 'az_order':
				return array(
					'orderby' => 'title',
					'order '	=> 'ASC'
					);
				break;
			case 'za_order':
				return array(
					'orderby' => 'title',
					'order '	=> 'DESC'
					);
				break;
			case 'random_posts':
				return array(
					'orderby' => 'rand', 
					);
				break;
			case 'random_today':
				$today = getdate();
				return array(
					'date_query' => array(
							'year' => $today['year'],
							'month' => $today['mon'],
							'day' => $today['mday'],
						) 
					);
				break;
			case 'random_7_day': 
				return array(
					'date_query' => array(
							'year' =>  date( 'Y' ),
							'week' => date( 'W' ), 
						) 
					);
				break;
			case 'random_month': 
				return array(
					'date_query' => array(
							'year' =>  date( 'Y' ),
							'month' => date( 'M' ), 
						) 
					);
				break;
			case 'comment_count':
				return array(
					'orderby' => 'comment_count',
					'order '	=> 'DESC'
					);
				break;
			case 'popular':
				return array(
					'orderby' => 'comment_count',
					'order '	=> 'DESC'
					);
				break;
			
			default: 
				return array(
					'orderby' => 'ID',
					'order '	=> 'DESC'
					);
				break;
		}
		
	}


	public static function get_posts($args = array()){
		return get_posts( $args );
	}

	public static function get_shortcodes(){
		return array(
			'bs_sharehouse_slider_video' 	=> 'slider_video',
			'bs_sharehouse_client_brand' 	=> 'client_brand',
			'bs_sharehouse_testimonials' 	=> 'testimonials',
			'bs_sharehouse_location'			=> 'location',
			'bs_sharehouse_service'				=> 'service',
			'bs_sharehouse_event'					=> 'event'
			);
	}

}