<?php
/**
 * thanhcong_category_product class.
 * 
 * @since 1.1
 */
class thanhcong_recent_post extends WP_Widget {
	public function __construct() {
		$widget_ops = array( 'classname' => 'box-recent-posts', 'description' => esc_html__( "Show posts of category.", 'thanhcong') );
		parent::__construct( 'recent_post_of_category', esc_html_x( 'Posts Of Category', 'Posts Of Category', 'thanhcong' ), $widget_ops );
	}

	function form( $instance ) {
		$default = array(
			'title'      => '',
			'thumbnail' => '', 
			'limit' => '5',
			'categories' => '',
		); 

		$instance      = wp_parse_args( (array) $instance, $default );
		$terms = get_terms('category');  
		extract($instance);
		$categories = (array)$categories;
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id ( 'title' ) ); ?>"><?php esc_html_e( 'Title: ', 'thanhcong' ) ?></label>
			<input type="text" name="<?php echo esc_attr( $this->get_field_name ( 'title' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id ( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id ( 'limit' ) ); ?>"><?php esc_html_e( 'Limit: ', 'thanhcong' ) ?></label>
			<input type="text" name="<?php echo esc_attr( $this->get_field_name ( 'limit' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id ( 'limit' ) ); ?>" value="<?php echo esc_attr( $limit ); ?>" class="widefat" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id ( 'thumbnail' ) ); ?>"><?php esc_html_e( 'Show Thumbnail: ', 'thanhcong' ) ?>
			<input type="checkbox" <?php echo empty($thumbnail)? '':'checked = "checked" '?> name="<?php echo esc_attr( $this->get_field_name ( 'thumbnail' ) ); ?>" value="1">
			</label> 
		</p> 
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id ( 'categories' ) ); ?>"><?php esc_html_e( 'Categories: ', 'thanhcong' ) ?></label>
			<select name="<?php echo esc_attr( $this->get_field_name ( 'categories' ) ); ?>[]" multiple class="widefat">
				<option value="0"><?php echo __(' --All--','thanhcong')?></option>
				<?php  foreach ($terms as $cate): ?>

				 	<option value="<?php echo esc_attr($cate->term_id) ?>" <?php echo in_array($cate->term_id, $categories)? 'selected': '' ?> ><?php echo esc_html($cate->name) ?></option>
				<?php endforeach ?>
			</select>
		</p>
 
<?php
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance; 
		$instance['title'] = esc_sql( $new_instance['title']); 
		$instance['limit'] = esc_sql( $new_instance['limit']);
		$instance['thumbnail'] = esc_sql( $new_instance['thumbnail']); 
		$instance['categories'] = esc_sql( $new_instance['categories'] ); 
		return $instance;
	}

	function widget( $args, $instance ) {
		extract( $args );
		$default = array(
			'title'      => '',
			'thumbnail' => '', 
			'limit' => '5', 
			'categories' => array(),
		); 
		$instance = wp_parse_args( (array) $instance, $default );

		extract($instance);
 
 		$categories = (array)$categories;

 		$strCate = implode(',', $categories);
 		$limit = empty($limit)? '5' : intval($limit);
 	 
 		$args = array( 'posts_per_page' => $limit,  'category' =>$strCate,'order'=> 'DESC' );
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
					echo sprintf('<li><a href="%1$s" title="%2$s" > %2$s </a></li>', get_permalink(), get_the_title());
				} 
			} 
			wp_reset_postdata();
		echo '</ul></div></div>';
		echo wp_kses_post( $after_widget ); 
	}
}