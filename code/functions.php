<?php
/**
 * Sharehouse functions and definitions
 *
 * @author NFS Team
 * @package sharehouse
 * @since 1.0
 */



// load constants 
require_once (get_template_directory().'/inc/contants.php'); 
// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');
// load textdomain
load_theme_textdomain( 'sharehouse', SHAREHOUSE_THEME_DIR . '/languages' );

// Load redux framework
require_once (SHAREHOUSE_THEME_DIR.'/options/redux-framework/framework.php');
require_once (SHAREHOUSE_THEME_DIR.'/options/redux-extensions/extensions-init.php'); 
require_once (SHAREHOUSE_THEME_DIR.'/options/redux-config.php'); 
require_once (SHAREHOUSE_THEME_DIR.'/inc/init.php');
//add_action('init', 'setup_framework_init');
if ( ! function_exists( 'SHAREHOUSE_setup' ) ) :

/** 
 * 
 * Create your own sharehouse_setup() function to override in a child theme. 
 * Define function use in th theme 
 * @since sharehouse 1.1 
 */ 
	function sharehouse_setup(){

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'sharehouse' ),
			'footer'  => __( 'Footer Menu', 'sharehouse' ),
		)); 

		/*

	 * Enable support for Post Formats.

	 *

	 * See: https://codex.wordpress.org/Post_Formats

	 */

		add_theme_support( 'post-formats', array(

			'aside', 

			'video', 

			'gallery',

			'status',

			'audio',  

		) ); 
	}

endif; 
add_action( 'after_setup_theme', 'sharehouse_setup' ); 
/** 
 * Registers a widget area. 
 * 
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/ 
 * 
 * @since sharehouse 1.1

 */

function sharehouse_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar Left', 'sharehouse' ),
		'id'            => 'sidebar-left',
		'description'   => __( 'Add widgets here to appear in your sidebar left.', 'sharehouse' ),
		'before_widget' => '<div id="%1$s" class="box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="box-heading">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar Right', 'sharehouse' ),
		'id'            => 'sidebar-right',
		'description'   => __( 'Add widgets here to appear in your sidebar right.', 'sharehouse' ),
		'before_widget' => '<div id="%1$s" class="box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="box-heading">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar Product', 'sharehouse' ),
		'id'            => 'sidebar-product',
		'description'   => __( 'Add widgets here to appear in your sidebar product.', 'sharehouse' ),
		'before_widget' => '<div id="%1$s" class="box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="box-heading">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar Event', 'sharehouse' ),
		'id'            => 'sidebar-event',
		'description'   => __( 'Add widgets here to appear in your sidebar event.', 'sharehouse' ),
		'before_widget' => '<div id="%1$s" class="box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="box-heading">',
		'after_title'   => '</div>',
	) );

	for ($i=1; $i < 4; $i++) { 
			register_sidebar( array( 
				'name'          => sprintf(__( 'Footer %s', 'sharehouse' ), $i), 
				'id'            => 'footer-'.$i, 
				'description'   => __( 'Add widgets here to appear in three column of footer', 'sharehouse' ),
				'before_widget' => '<div id="%1$s" class="%2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );
	}

	register_sidebar( array( 
				'name'          => sprintf(__( 'Footer Bottom', 'sharehouse' )), 
				'id'            => 'footer-bottom', 
				'description'   => __( 'Add widgets here to appear in your footer bottom', 'sharehouse' ),
				'before_widget' => '<div id="%1$s" class="footer-bottom %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<p><strong>',
				'after_title'   => '</p></strong>',
			) );
} 

add_action( 'widgets_init', 'sharehouse_widgets_init' );

/** 
 * Enqueues scripts and styles. 
 * 
 * @since sharehouse 1.1 
 */

function sharehouse_scripts() { 
	// Theme stylesheet.
	wp_enqueue_style( 'sharehouse-style', get_stylesheet_uri() );
	wp_enqueue_style( 'sharehouse-bootstrap', SHAREHOUSE_THEME_ASSETS_URI.'/css/bootstrap.min.css' );
	wp_enqueue_style( 'sharehouse-font-awesome', SHAREHOUSE_THEME_ASSETS_URI.'/css/font-awesome.min.css' );
	wp_enqueue_style( 'sharehouse-animate', SHAREHOUSE_THEME_ASSETS_URI.'/css/animate.min.css' );
	wp_enqueue_style( 'sharehouse-datepicker', SHAREHOUSE_THEME_ASSETS_URI.'/css/daterangepicker.css' ); 
	wp_enqueue_style( 'sharehouse-jquery-countdown-css', SHAREHOUSE_THEME_ASSETS_URI.'/css/jquery.countdown.css' );
	wp_enqueue_style( 'sharehouse-homepage', SHAREHOUSE_THEME_ASSETS_URI.'/css/homepage.css' ); 
	wp_enqueue_style( 'sharehouse-event', SHAREHOUSE_THEME_ASSETS_URI.'/css/event.css' );
	wp_enqueue_style( 'sharehouse-responsive', SHAREHOUSE_THEME_ASSETS_URI.'/css/responsive.css' );

	// Theme javascript. 
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'jquery-ui-moment-js',SHAREHOUSE_THEME_ASSETS_URI.'/js/moment.min.js' ,array('jquery') ,'', true );
	wp_enqueue_script( 'jquery-ui-dateprangeicker',SHAREHOUSE_THEME_ASSETS_URI.'/js/daterangepicker.js' ,array('jquery') ,'', true );
	wp_enqueue_script( 'sharehouse-bootstrap-min-js', SHAREHOUSE_THEME_ASSETS_URI . '/js/bootstrap.min.js',array('jquery') ,'', true );
 	wp_enqueue_script( 'sharehouse-moment-min', SHAREHOUSE_THEME_ASSETS_URI . '/js/moment.min.js', array('jquery'), '', true );
 	wp_enqueue_script( 'sharehouse-slick-min', SHAREHOUSE_THEME_ASSETS_URI . '/js/slick.min.js', array('jquery'), '', true ); 
 	wp_enqueue_script( 'sharehouse-wow-min', SHAREHOUSE_THEME_ASSETS_URI . '/js/wow.js', array('jquery'), '', true );
 	wp_enqueue_script( 'sharehouse-jquery-plugin-min', SHAREHOUSE_THEME_ASSETS_URI . '/js/jquery.plugin.min.js', array('jquery'), '', true );
 	wp_enqueue_script( 'sharehouse-countdown', SHAREHOUSE_THEME_ASSETS_URI . '/js/countdown.min.js', array('jquery'), '', true );
 	wp_enqueue_script( 'sharehouse-homepage', SHAREHOUSE_THEME_ASSETS_URI . '/js/homepage.js', array('jquery'), '', true );
 
}

function sharehouse_admin_scripts() {  
	wp_enqueue_style( 'sharehouse-admin', SHAREHOUSE_THEME_ASSETS_URI.'/css/admin.css' ); 
	wp_enqueue_style( 'sharehouse-font-awesome', SHAREHOUSE_THEME_ASSETS_URI.'/css/font-awesome.min.css' ); 
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-ui-core' );

	wp_enqueue_style( 'sharehouse-datepicker', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/base/jquery-ui.css' );	 

	wp_enqueue_script( 'jquery-ui-datepicker');
	wp_enqueue_script( 'sharehouse-admin', SHAREHOUSE_THEME_ASSETS_URI . '/js/admin.js',array('jquery') ,'', true );  
}
add_action( 'wp_enqueue_scripts', 'sharehouse_scripts' );

if (is_admin()) {
	add_action( 'admin_enqueue_scripts', 'sharehouse_admin_scripts' );
}
function sharehouse_custom_css($css){
	wp_enqueue_style('sharehouse-custom-css', SHAREHOUSE_THEME_ASSETS_URI . '/css/custom.css');
	wp_add_inline_style( 'sharehouse-custom-css', $css );
}
add_action('sharehouse_add_custom_css','sharehouse_custom_css');

function get_url_posttype($id){
	return get_post_meta( $id, '_link_download', true );
}

function get_main_menu(){ 
	wp_nav_menu( array(
    'menu' 						=> 'primary',
    'container' 			=> 'nav', 
    'menu_class' 			=> 'sh-menu nav navbar-nav navbar-right ' ,
    'container_id' 		=> 'sh-main-navbar', 
    'container_class' => 'collapse navbar-collapse sh-main-navbar', 
    'walker'					=> new wp_bootstrap_navwalker()
	) );

} 
function get_footer_descripton(){

	global $theme_option; 
	echo $theme_option['opt-editor-footer'];
}

function get_header_logo(){

	global $theme_option;

	$logo = $theme_option['opt-media-logo'];
	$html = '<img src="%3$s"  title="%2$s"  alt="%2$s" /> ' ;
	$url  = '';

	if (!empty($logo) && is_array($logo)) {
		if (isset($logo['url'])) {
			$url = $logo['url'];
		}
	}
	echo sprintf($html,get_bloginfo('url'),'', esc_url($url));
} 

//add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 16;' ), 20 );
function wptp_add_categories_to_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );