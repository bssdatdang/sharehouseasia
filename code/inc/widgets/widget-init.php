<?php
if (class_exists('WC_API')) { 
}
	
require_once (SHAREHOUSE_THEME_DIR.'/inc/widgets/recent-post.php');
  register_widget( 'sharehouse_recent_post' );

require_once (SHAREHOUSE_THEME_DIR.'/inc/widgets/social_icon.php');
  register_widget( 'sharehouse_social_icon' );
