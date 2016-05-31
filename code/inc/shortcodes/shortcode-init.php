<?php  
include_once(ABSPATH.'wp-admin/includes/plugin.php');
if (!function_exists('is_plugin_active') || !is_plugin_active('js_composer/js_composer.php')) { 
   return;
}
if (file_exists(SHAREHOUSE_THEME_SHORTCODE.'/class-shortcode-controller.php')) {
	require_once(SHAREHOUSE_THEME_SHORTCODE.'/class-shortcode-controller.php');
	
	if (!function_exists('sharehouse_add_shortcodes')) {
		function sharehouse_add_shortcodes(){
			$shortcodes = Helper_Controller::get_shortcodes();
			foreach ($shortcodes as $key => $short) {
				add_shortcode($key,array(new Shortcode_Controller(), $short));
			}	
		}
	}
	add_action('init','sharehouse_add_shortcodes');
	if ( is_plugin_active( 'js_composer/js_composer.php' )) {
		if (!function_exists('sharehouse_add_vc_shortcodes')) {
			function sharehouse_add_vc_shortcodes()
			{
				$shortcodes = Helper_Controller::get_shortcodes();
				foreach ($shortcodes as $key => $short) {
					if (file_exists(SHAREHOUSE_THEME_SHORTCODE.'/'.$short.'.php')) {
						require_once(SHAREHOUSE_THEME_SHORTCODE.'/'.$short.'.php'); 
					} 
				}
			}
		}
		add_action( 'init', 'sharehouse_add_vc_shortcodes');
	}
}