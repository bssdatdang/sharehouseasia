<?php 
	$block_title = empty($atts['block_title']) ? '' : $atts['block_title'];
	$block_description = empty($atts['block_description']) ? '' : $atts['block_description'];

	$extra_class = empty($atts['extra_class']) ? 'service' : 'service '.$atts['extra_class'];
	$block_number = (empty($atts['block_number']) && !is_numeric($atts['block_number'])) ? '10': $atts['block_number'];
	$block_offset = (empty($atts['block_offset']) && !is_numeric($atts['block_offset'])) ? '0': $atts['block_offset'];
	$block_full = empty($atts['block_full']) ? false : true;
	$sort_by = empty($atts['sort_by']) ? '0s' : $atts['sort_by'];
	$categories = empty($atts['category_list']) ? '0' : json_decode(urldecode($atts['category_list']));
	$categories = Helper_Controller::get_category_s($categories,true);  
	
	$orderby = Helper_Controller::get_sort_by($sort_by);
	$args = array(
		'post_type'				=> 'house_service',
		'posts_per_page'	=> $block_number,
		'offset'					=> $block_offset,
	); 
	if (!in_array('0', $categories)) { 
		$filter = array(
				'tax_query'		=> array(
					array(
						'taxonomy'	=> 'service_cat',
						'field'    => 'term_id',
						'terms'    => $categories, 
					)
				) 
			);
		$args = array_merge($args,$filter); 
	}
	$args = array_merge($args,$orderby);  
	$services =  new WP_Query($args);  
?>

<!--Start Box Service-->
<div class="<?php echo esc_attr($extra_class) ?> box" >
	<div class="box-inner panel panel-default"> 
		<?php if (!empty($block_title)):?> 
			<div class="panel-heading  text-center wow fadeIn <?php if($block_full) echo 'container' ?>" data-wow-duration="0.7s" data-wow-delay="700ms">
				<h3 class="panel-title"><?php echo esc_html($block_title) ?></h3>
				<p> <?php echo $block_description ?></p>
			</div>
		<?php endif; ?>
		<div class="panel-body <?php if($block_full) echo 'container' ?>">
			<div class="row">
				<?php 
					if ($services->have_posts()):
						while ($services->have_posts()) : $services->the_post();
							$service_items  = json_decode(get_post_meta( get_the_ID(), '_service_data', true )); 
							$names = [];
							$icon_field   = '';
							if (isset($service_items ) && is_object($service_items)):
								$names  = $service_items->name;
								$des  = $service_items->description;
								$icons  = $service_items->icon;
								$icon_field  = $service_items->icon_field;
							endif ;
				?>
				<div class="col-lg-4 col-md-4 col-sm-4 ">
					<div class="service-inner wow fadeIn" data-wow-duration="0.9s" data-wow-delay="700ms">
						<div class="service-icon">
							<i class="fa <?php echo esc_html($icon_field)?>"></i>
						</div>
						<h4 class="service-title"><?php the_title()?></h4>
						<ul class="service-list list-unstyled">
							<?php   
								
									foreach ($names as $k=>$item): 
							?>
								<li class="service-item">
									<h6 class="sc-item-title">
										<i class="fa <?php 
											if (isset($icons[$k])) 
												echo esc_html($icons[$k]);
										 ?>"></i>
										<?php echo esc_html($item) ?>
										<span class="control-caret pull-right"> 
										<i class="fa fa-plus"></i>
										</span>
									</h6>
									<div class="sc-item-description">
										<?php 
											if (isset($des[$k])) 
												echo esc_html($des[$k]);
										 ?>
									</div>
								</li> 
								<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<?php 
						endwhile;
					endif;
				?> 
			</div>
		</div> 
	</div>
</div>
<!--/End Box Service-->