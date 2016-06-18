<?php 
	$block_title = empty($atts['block_title']) ? '' : $atts['block_title']; 
	$extra_class = empty($atts['extra_class']) ? 'client' : 'client '.$atts['extra_class'];
	$block_number = (empty($atts['block_number']) && !is_numeric($atts['block_number'])) ? '10': $atts['block_number'];
	$block_offset = (empty($atts['block_offset']) && !is_numeric($atts['block_offset'])) ? '0': $atts['block_offset'];
	$block_full = empty($atts['block_full']) ? false : true;
	$sort_by = empty($atts['sort_by']) ? '0' : $atts['sort_by']; 

	$orderby = Helper_Controller::get_sort_by($sort_by);
	$args = array(
		'post_type'				=> 'house_testimonial',
		'posts_per_page'	=> $block_number,
		'offset'					=> $block_offset,
	);  
	$args = array_merge($args,$orderby);  
	$testimonials =  new WP_Query($args);  
?>
<!--Start Box Client-->
<div class="<?php echo esc_attr($extra_class) ?> box" >
	<div class="box-inner panel panel-default"> 
		<?php if (!empty($block_title)):?>  
			<div class="panel-heading  text-center wow fadeIn <?php if($block_full) echo 'container' ?>" data-wow-duration="0.7s" data-wow-delay="700ms">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
						<h3 class="panel-title"><?php echo esc_html($block_title) ?></h3>
						<p> <?php echo $content; ?></p>
					</div>
				</div>
			</div> 
		<?php endif; ?>
		<div class="panel-body <?php if($block_full) echo 'container' ?>">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="list-testimonials  wow fadeIn" data-wow-duration="0.7s" data-wow-delay="700ms">
					<?php   
						if ($testimonials->have_posts()): 
							while ($testimonials->have_posts()) : $testimonials->the_post(); 
								$url = get_post_meta(get_the_ID(),'_link_client', true)
							?>
								<div class="testimonial-item">
									<div class="testimonial-info">
										<p class="testimonial-content">
											<?php the_content() ?>
										</p>
										<p class="testimonial-author"><?php the_title() ?> - <a href="<?php echo esc_html($url) ?>"><?php echo esc_html($url) ?> </a> </p>
									</div>
									<div class="testimonial-thumbnail">
										<?php 
											if ( has_post_thumbnail() ) {
										    echo get_the_post_thumbnail ();
											}else{ ?>
													<img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png">
										<?php	}
										?>
									</div>
								</div> 
					<?php   
							endwhile;
							wp_reset_postdata();
						endif;
					?>
					</div>
				</div> 
			</div>
		</div>  
	</div>
</div>
<!--/End Box Client-->