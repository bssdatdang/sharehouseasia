<?php
/**
 * sharehouse_category_post class.
 * 
 * @since 1.1
 */
class sharehouse_recent_post extends WP_Widget {
	public function __construct() {
		$widget_ops = array( 'classname' => 'box-recent-posts', 'description' => esc_html__( "Show posts of category.", 'sharehouse') );
		parent::__construct( 'recent_post_of_category', esc_html_x( 'Posts Of Category', 'Posts Of Category', 'sharehouse' ), $widget_ops );
	}

	function form( $instance ) {
		$default = array(
			'title'      	=> '',
			'thumbnail' 	=> '', 
			'date'			 	=> '', 
			'limit' 			=> '5',
			'type' 				=> 'post',
		); 

		$instance      = wp_parse_args( (array) $instance, $default );
		$terms = array(
				'post' 					=> 'Post',
				'house_event' 	=> 'Event',
				'house_client' 	=> 'Client',
				'product' 			=> 'House',
				'house_service' => 'Service'
			);  
		extract($instance); 
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id ( 'title' ) ); ?>"><?php esc_html_e( 'Title: ', 'sharehouse' ) ?></label>
			<input type="text" name="<?php echo esc_attr( $this->get_field_name ( 'title' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id ( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id ( 'limit' ) ); ?>"><?php esc_html_e( 'Limit: ', 'sharehouse' ) ?></label>
			<input type="text" name="<?php echo esc_attr( $this->get_field_name ( 'limit' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id ( 'limit' ) ); ?>" value="<?php echo esc_attr( $limit ); ?>" class="widefat" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id ( 'thumbnail' ) ); ?>"><?php esc_html_e( 'Show Thumbnail: ', 'sharehouse' ) ?>
			<input type="checkbox" <?php echo empty($thumbnail)? '':'checked = "checked" '?> name="<?php echo esc_attr( $this->get_field_name ( 'thumbnail' ) ); ?>" value="1">
			</label> 
		</p> 
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id ( 'date' ) ); ?>"><?php esc_html_e( 'Show Date: ', 'sharehouse' ) ?>
			<input type="checkbox" <?php echo empty($date)? '':'checked = "checked" '?> name="<?php echo esc_attr( $this->get_field_name ( 'date' ) ); ?>" value="1">
			</label> 
		</p> 
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id ( 'type' ) ); ?>"><?php esc_html_e( 'Type: ', 'sharehouse' ) ?></label>
			<select name="<?php echo esc_attr( $this->get_field_name ( 'type' ) ); ?>" class="widefat"> 
				<?php  foreach ($terms as $key => $cate): ?>
				 	<option value="<?php echo esc_attr($key) ?>" <?php echo ($type== $key)? 'selected': '' ?> ><?php echo esc_html($cate) ?></option>
				<?php endforeach ?>
			</select>
		</p>
 
<?php
	}

	function update( $new_instance, $old_instance ) {
		$instance 								= $old_instance; 
		$instance['title'] 				= esc_sql( $new_instance['title']); 
		$instance['limit'] 				= esc_sql( $new_instance['limit']);
		$instance['thumbnail'] 		= esc_sql( $new_instance['thumbnail']); 
		$instance['date']			 		= esc_sql( $new_instance['date']); 
		$instance['type'] 				= esc_sql( $new_instance['type'] ); 
		return $instance;
	}

	function widget( $args, $instance ) {
		extract( $args );
		$default = array(
			'title'      	=> '',
			'thumbnail' 	=> '', 
			'date' 				=> '', 
			'limit' 			=> '5', 
			'type' 				=> 'post',
		); 

		$instance = wp_parse_args( (array) $instance, $default );

		extract($instance);
  
 		$limit = empty($limit)? '5' : intval($limit);
 	 
 		$args = array( 'posts_per_page' => $limit, 'post_type' => $type, 'order'=> 'DESC' );
 		$posts = new WP_Query( $args );
		echo wp_kses_post( $before_widget ); 
		if (!empty($title)) {
			echo wp_kses_post( $before_title ); 
			echo esc_html($title); 
			echo wp_kses_post( $after_title ); 
		}  
		echo '<div class="box-content"><div class="box-category"><ul>'; 
			if ($posts->have_posts()) { 
				while ($posts->have_posts()) {
					$posts->the_post();
					$img = '<div class="left">';
					$img .= '<a href="%1$s" title="%2$s" >';
						if ( has_post_thumbnail() )
							$img .= get_the_post_thumbnail (); 
						else
							$img .='<img src="'.SHAREHOUSE_THEME_ASSETS_URI.'/images/default.png">';
					$img .= '</a>';
					
					$img .= '</div>';
					$html = '<li>';
					if (!empty($thumbnail))
						$html .= $img;
					$html .= '<div class="right">';
					$html .= '<a href="%1$s" title="%2$s" > %2$s </a>';
					
					if (!empty($date))
						$html .= '<span class="post-date">'.get_the_date().'</span>';
					
					$html .= '</div>';
					$html .= '</li>';

					echo sprintf($html, get_permalink(), get_the_title());
				} 
			} 
			wp_reset_postdata();
		echo '</ul></div></div>';
		echo wp_kses_post( $after_widget ); 
	}
}