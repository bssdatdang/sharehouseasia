<?php 
	$block_title = empty($atts['block_title']) ? '' : $atts['block_title'];
	$extra_class = empty($atts['extra_class']) ? 'client' : 'client '.$atts['extra_class'];
	$block_number = (empty($atts['block_number']) && !is_numeric($atts['block_number'])) ? '10': $atts['block_number'];
	$block_offset = (empty($atts['block_offset']) && !is_numeric($atts['block_offset'])) ? '0': $atts['block_offset'];
	$block_full = empty($atts['block_full']) ? false : true;
	$sort_by = empty($atts['sort_by']) ? '0s' : $atts['sort_by'];
	$categories = empty($atts['category_list']) ? '0' : json_decode(urldecode($atts['category_list']));
	$categories = Helper_Controller::get_category_s($categories,true);  
 	 

	$orderby = Helper_Controller::get_sort_by($sort_by);
 	$args = array(
		'post_type'				=> 'house_client',
		'posts_per_page'	=> $block_number,
		'offset'					=> $block_offset,
	); 
	if (!in_array('0', $categories)) { 
		$filter = array(
				'tax_query'		=> array(
					array(
						'taxonomy'	=> 'client_cat',
						'field'    => 'term_id',
						'terms'    => $categories, 
					)
				) 
			);
		$args = array_merge($args,$filter); 
	}
	$args = array_merge($args,$orderby);  
	$clients =  new WP_Query($args);  
?>
<!--Start Box Client-->
<div class="<?php echo esc_attr($extra_class) ?> box" >
	<div class="box-inner panel panel-default"> 
			<?php if (!empty($block_title)):?> 
				<div class="panel-heading  wow fadeIn <?php if($block_full) echo 'container' ?>" data-wow-duration="0.7s" data-wow-delay="700ms">
					<h3 class="panel-title"><?php echo esc_html($atts['block_title']) ?></h3>
				</div>
			<?php endif; ?>
			<div class="panel-body <?php if($block_full) echo 'container' ?>">
				<div class="brands  wow fadeIn" data-wow-duration="0.7s" data-wow-delay="700ms">
					<?php   
						if ($clients->have_posts()) {
							while ($clients->have_posts()) : $clients->the_post(); ?>
								<div class="brand-item"> 
									<a href="<?php the_permalink(); ?>">
									<?php 
										if ( has_post_thumbnail() ) {
									    echo get_the_post_thumbnail ();
										}else{ ?>
												<img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png">
									<?php	}?>
									</a>
								</div> 	
							<?php
							endwhile;
							wp_reset_postdata();
						}
					?>
					 
					 
				</div> 
		</div>
	</div>
</div>
<!--/End Box Client-->