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
	}

	public function add_page_metabox() {
		add_meta_box( 'sharehouse_page_setting', __('Page Settings','sharehouse'), array( $this, 'sharehouse_page_setting_field'),'page');
		add_meta_box( 'sharehouse_client', __('Client Settings','sharehouse'), array( $this, 'sharehouse_client_field'),'house_client');
		add_meta_box( 'sharehouse_testimonial', __('Testimonial Settings','sharehouse'), array( $this, 'sharehouse_testimonial_field'),'house_testimonial');
		add_meta_box( 'sharehouse_service', __('Service Settings','sharehouse'), array( $this, 'sharehouse_service_field'),'house_service');
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
		
	}
}
new Page_Controller();