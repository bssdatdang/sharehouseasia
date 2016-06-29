<?php
/**
 * sharehouse_category_post class.
 * 
 * @since 1.1
 */
class sharehouse_social_icon extends WP_Widget {
  public function __construct() {
    $widget_ops = array( 'classname' => 'box-social-icon', 'description' => esc_html__( "Show social in the block.", 'sharehouse') );
    parent::__construct( 'box_social_icon', esc_html_x( 'Social Icon', 'Social Icon', 'sharehouse' ), $widget_ops );
  }

  function form( $instance ) {
    $default = array(
      'title'       => 'Join us',
      'size'        => 'fa-1x', 
      'facebook'    => '', 
      'plus'        => '', 
      'twitter'     => '', 
      'linkedin'    => '', 
      'pinterest'   => '', 
      'youtube'     => '', 
      'instagram'   => '',  
    ); 

    $instance      = wp_parse_args( (array) $instance, $default );
    $sizes = array( 
        'fa-1x'     => 'normal',
        'fa-2x'     => 'x2',
        'fa-3x'     => 'x3',
        'fa-4x'     => 'x4',
        'fa-5x'     => 'x5' 
      );  

    extract($instance); 
    ?>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id ( 'title' ) ); ?>"><?php esc_html_e( 'Title: ', 'sharehouse' ) ?></label>
      <input type="text" name="<?php echo esc_attr( $this->get_field_name ( 'title' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id ( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id ( 'size' ) ); ?>"><?php esc_html_e( 'Size: ', 'sharehouse' ) ?></label>
      <select name="<?php echo esc_attr( $this->get_field_name ( 'size' ) ); ?>" class="widefat"> 
        <?php  foreach ($sizes as $key => $size): ?>
          <option value="<?php echo esc_attr($key) ?>" <?php echo ($size== $key)? 'selected': '' ?> ><?php echo esc_html($size) ?></option>
        <?php endforeach ?>
      </select>
    </p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id ( 'facebook' ) ); ?>"><?php esc_html_e( 'Facebook: ', 'sharehouse' ) ?></label>
      <input type="text" name="<?php echo esc_attr( $this->get_field_name ( 'facebook' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id ( 'facebook' ) ); ?>" value="<?php echo esc_attr( $facebook ); ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id ( 'plus' ) ); ?>"><?php esc_html_e( 'Google Plus: ', 'sharehouse' ) ?></label>
      <input type="text" name="<?php echo esc_attr( $this->get_field_name ( 'plus' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id ( 'plus' ) ); ?>" value="<?php echo esc_attr( $plus ); ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id ( 'twitter' ) ); ?>"><?php esc_html_e( 'Twitter: ', 'sharehouse' ) ?></label>
      <input type="text" name="<?php echo esc_attr( $this->get_field_name ( 'twitter' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id ( 'twitter' ) ); ?>" value="<?php echo esc_attr( $twitter ); ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id ( 'linkedin' ) ); ?>"><?php esc_html_e( 'Linkedin: ', 'sharehouse' ) ?></label>
      <input type="text" name="<?php echo esc_attr( $this->get_field_name ( 'linkedin' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id ( 'linkedin' ) ); ?>" value="<?php echo esc_attr( $linkedin ); ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id ( 'pinterest' ) ); ?>"><?php esc_html_e( 'Pinterest: ', 'sharehouse' ) ?></label>
      <input type="text" name="<?php echo esc_attr( $this->get_field_name ( 'pinterest' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id ( 'pinterest' ) ); ?>" value="<?php echo esc_attr( $pinterest ); ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id ( 'youtube' ) ); ?>"><?php esc_html_e( 'Pinterest: ', 'sharehouse' ) ?></label>
      <input type="text" name="<?php echo esc_attr( $this->get_field_name ( 'youtube' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id ( 'youtube' ) ); ?>" value="<?php echo esc_attr( $youtube ); ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id ( 'instagram' ) ); ?>"><?php esc_html_e( 'Instagram: ', 'sharehouse' ) ?></label>
      <input type="text" name="<?php echo esc_attr( $this->get_field_name ( 'instagram' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id ( 'instagram' ) ); ?>" value="<?php echo esc_attr( $instagram ); ?>" class="widefat" />
    </p>
 
<?php
  }

  function update( $new_instance, $old_instance ) {
    $instance                 = $old_instance;  
    $instance['title']        = esc_sql( $new_instance['title']); 
    $instance['size']         = esc_sql( $new_instance['size']);
    $instance['facebook']     = esc_sql( $new_instance['facebook']); 
    $instance['twitter']      = esc_sql( $new_instance['twitter']); 
    $instance['plus']         = esc_sql( $new_instance['plus'] ); 
    $instance['linkedin']     = esc_sql( $new_instance['linkedin']); 
    $instance['pinterest']    = esc_sql( $new_instance['pinterest']);
    $instance['instagram']    = esc_sql( $new_instance['instagram']); 
    $instance['youtube']      = esc_sql( $new_instance['youtube']);  
    return $instance;
  }

  function widget( $args, $instance ) {
    extract( $args );
    $default = array(
      'title'       => 'Join us',
      'size'        => 'fa-1x', 
      'facebook'    => '', 
      'plus'        => '', 
      'twitter'     => '', 
      'linkedin'    => '', 
      'pinterest'   => '', 
      'youtube'     => '', 
      'instagram'   => '',  
    ); 

    $instance = wp_parse_args( (array) $instance, $default );

    extract($instance);
  
    echo wp_kses_post( $before_widget ); 
    if (!empty($title)) {
      echo wp_kses_post( $before_title ); 
      echo esc_html($title); 
      echo wp_kses_post( $after_title ); 
    }  
    echo '<ul class="list-unstyled list-inline list-social">';
    if (!empty($facebook))
      echo '<li><a href="'.esc_url($facebook).'" target="_blank"><i class="fa fa-facebook '.$size.'"></i></a></li>';
    if (!empty($plus))
      echo '<li><a href="'.esc_url($plus).'" target="_blank"><i class="fa fa-google-plus '.$size.'"></i></a></li>';
    if (!empty($twitter))
      echo '<li><a href="'.esc_url($twitter).'" target="_blank"><i class="fa fa-twitter '.$size.'"></i></a></li>';
    if (!empty($linkedin))
      echo '<li><a href="'.esc_url($linkedin).'" target="_blank"><i class="fa fa-linkedin '.$size.'"></i></a></li>';
    if (!empty($pinterest))
      echo '<li><a href="'.esc_url($pinterest).'" target="_blank"><i class="fa fa-pinterest '.$size.'"></i></a></li>';
    if (!empty($youtube))
      echo '<li><a href="'.esc_url($youtube).'" target="_blank"><i class="fa fa-youtube-play '.$size.'"></i></a></li>';
    if (!empty($instagram))
      echo '<li><a href="'.esc_url($instagram).'" target="_blank"><i class="fa fa-instagram '.$size.'"></i></a></li>';
    echo '</ul>';
    echo wp_kses_post( $after_widget ); 
  }
}