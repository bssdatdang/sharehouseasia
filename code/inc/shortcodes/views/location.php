<?php 
	$block_title = empty($atts['block_title']) ? '' : $atts['block_title'];
	$extra_class = empty($atts['extra_class']) ? 'client' : 'client '.$atts['extra_class']; 
	$block_full = empty($atts['block_full']) ? false : true;

	$params = array(
			'taxonomy' => 'location_cat',
			'hide_empty' => false,
			) ;
	$categories  = get_categories($params); 
	$images = get_option('taxonomy_image_plugin'); 
?>
<!--Start Box Location-->
<div class="<?php echo esc_attr($extra_class) ?> box" >
	<div class="box-inner panel panel-default"> 
		<?php if (!empty($block_title)):?> 
				<div class="panel-heading  wow fadeIn <?php if($block_full) echo 'container' ?>" data-wow-duration="0.7s" data-wow-delay="700ms">
					<h3 class="panel-title"><?php echo esc_html($atts['block_title']) ?></h3>
				</div>
			<?php endif; ?>
		<div class="panel-body <?php if($block_full) echo 'container' ?>">
      <div class="row">
      	<?php   
					if (count($categories) > 0) {
						foreach ($categories as $index => $loca): 
						  
							$class = 'col-md-4 col-xs-4 location-top location-item';
							if ($index == 0)
								$class = 'col-md-8 col-xs-8 location-top location-item'; 
							if ($index == 1)
								$class = 'col-md-4 col-xs-4 location-top location-item';
							$category_link = get_category_link( $loca->term_id );
							$image_data = wp_get_attachment_image_src ($images[ $loca->term_id], 'thumbnail'); 
						
						?> 
		          <div class='<?php echo $class; ?>'>
		            <a href="<?php echo esc_url( $category_link ); ?>">
		              <div class="location-inner  ">
		                <div class="location-thumbnail">
		                  <img src="<?php echo esc_url( $image_data[0] ); ?>">
		                </div>
		                <div class="location-info">
		                  <strong><?php echo $loca->name ?></strong>
		                </div>
		              </div>
		            </a>
		          </div> 
						<?php
						endforeach; 
					}
				?> 
      </div>
    </div> 
  </div>
</div>
<!--/End Box Location-->