<?php  
/** 
* Page function 
*/

class Page_Controller   extends Helper_Controller
{  
	function __construct(){
		$this->class_name = 'pages';
		add_action('add_meta_boxes', array($this , 'add_page_metabox' ));
		add_action('save_post', array($this,'save_postdata'));
		add_action('save_post_product', array($this, 'save_product_data'));


	}

	public function add_page_metabox() {
		add_meta_box( 'sharehouse_page_setting', __('Page Settings','sharehouse'), array( $this, 'sharehouse_page_setting_field'),'page');
		add_meta_box( 'sharehouse_client', __('Client Settings','sharehouse'), array( $this, 'sharehouse_client_field'),'house_client');
		add_meta_box( 'sharehouse_testimonial', __('Testimonial Settings','sharehouse'), array( $this, 'sharehouse_testimonial_field'),'house_testimonial');
		add_meta_box( 'sharehouse_service', __('Service Settings','sharehouse'), array( $this, 'sharehouse_service_field'),'house_service');
		add_meta_box( 'sharehouse_condition', __('House Conditions','sharehouse'), array( $this, 'sharehouse_condition_field'),'product');
		add_meta_box( 'sharehouse_event', __('Event Settings','sharehouse'), array( $this, 'sharehouse_event_field'),'house_event');
	}

	public function sharehouse_page_setting_field($post){
		return $this->render('page_field',array('post' =>  $post)); 
	}

	function sharehouse_testimonial_field($post){
		return $this->render('testimonial_field',array('post' =>  $post)); 
	}	

	function sharehouse_client_field($post){
		return $this->render('client_field',array('post' =>  $post)); 
	}
	function sharehouse_service_field($post){
		return $this->render('service_field',array('post' =>  $post)); 
	}
	function sharehouse_condition_field($post){
		return $this->render('condition_field',array('post' =>  $post)); 
	}
	function sharehouse_event_field($post){
		return $this->render('event_field',array('post' =>  $post)); 
	}


	public function save_product_data($post_id){
		$nonce_code = $_POST['nonce_code']; 
		if (!isset($nonce_code)) {
			return;
		}
		if( wp_verify_nonce( $nonce_code, 'save_condition_field' ) ) {
			$condition_field = $_POST['condition_field'];
			$condition_field  = json_encode($condition_field);  
			update_post_meta( $post_id, '_condition_data', $condition_field ); 
		}
	}
	public function save_postdata($post_id){

		$nonce_code = $_POST['nonce_code']; 
		if (!isset($nonce_code)) {
			return;
		}
		if( wp_verify_nonce( $nonce_code, 'save_client_field' ) ) {
			$link_client = sanitize_text_field( $_POST['link_client'] );
			update_post_meta( $post_id, '_link_client', $link_client );
		}

		if( wp_verify_nonce( $nonce_code, 'save_testimonial_field' ) ) {
			$link_client = sanitize_text_field( $_POST['link_client'] );
			update_post_meta( $post_id, '_link_client', $link_client );
		}

		if( wp_verify_nonce( $nonce_code, 'save_service_field' ) ) {
			$service_field = $_POST['service_field'];
			$service_data  = json_encode($service_field);  
			update_post_meta( $post_id, '_service_data', $service_data );
		}
		if( wp_verify_nonce( $nonce_code, 'save_event_field' ) ) {
			$save_event_field = $_POST['event_field'];
			$save_event_field  = json_encode($save_event_field);  
			update_post_meta( $post_id, '_event_data', $save_event_field );
		}
 
	}
}
new Page_Controller();