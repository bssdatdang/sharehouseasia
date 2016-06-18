<?php 
	$block_title = empty($atts['block_title']) ? '' : $atts['block_title']; 
	$extra_class = empty($atts['extra_class']) ? 'event' : 'event '.$atts['extra_class'];
	$block_number = (empty($atts['block_number']) && !is_numeric($atts['block_number'])) ? '10': $atts['block_number'];
	$block_offset = (empty($atts['block_offset']) && !is_numeric($atts['block_offset'])) ? '0': $atts['block_offset'];
	$block_full = empty($atts['block_full']) ? false : true;
	$sort_by = empty($atts['sort_by']) ? '0' : $atts['sort_by']; 

	$orderby = Helper_Controller::get_sort_by($sort_by);
	$args = array(
		'post_type'				=> 'house_event',
		'posts_per_page'	=> $block_number,
		'offset'					=> $block_offset,
	);  
	$args = array_merge($args,$orderby);

	$params = array(
			'taxonomy' => 'event_cat',
			'hide_empty' => false,
			) ;
	$categories  = get_categories($params);   
	$events =  new WP_Query($args); 
	$images = get_option('taxonomy_image_plugin'); 
?>
<!--Start Box Event-->
<div class="<?php echo esc_attr($extra_class) ?> box" >
	<div class="box-inner panel panel-default"> 
		<?php if (!empty($block_title)):?>  
			<div class="panel-heading  text-center wow fadeIn <?php if($block_full) echo 'container' ?>" data-wow-duration="0.7s" data-wow-delay="700ms">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">

						<h3 class="panel-title"><?php echo esc_html($block_title) ?></h3>
						<p> <?php echo $content; ?> 
						</p>
					</div>
				</div>
			</div> 
		<?php endif; ?>
		<div class="panel-body <?php if($block_full) echo 'container' ?>">
			<div class="row">
				<div class="col-md-8"> 
					<div class="slider-category  wow fadeIn" data-wow-duration="0.7s" data-wow-delay="600ms">
						<div class="slider slider-for">
						<?php 
							if (count($categories) > 0):
								foreach ($categories as   $cate): 
									$filter = array(
										'post_type'				=> 'house_event',
										'posts_per_page'	=> $block_number,
										'offset'					=> $block_offset,
										'tax_query'		=> array(
											array(
												'taxonomy'	=> 'client_cat',
												'field'    => 'term_id',
												'terms'    => $cate->term_id, 
											)
										) 
									);
									$events_p =  new WP_Query($args); 
									echo '<div class="slider-category-item">';
									if ($events_p->have_posts()):
										while ($events_p->have_posts()) : $events_p->the_post();
										?> 
											<div class="event-item">
												<div class="event-inner">
													<div class="event-thumbnail">
														<?php 
															if ( has_post_thumbnail() ) {
														    echo get_the_post_thumbnail ();
															}else{ ?>
																	<img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png">
														<?php	}?>
													</div>
													<div class="event-info">
														<a href="<?php the_permalink(); ?>"><?php the_title()?></a>
													</div>
												</div>
											</div>   
										<?php
										endwhile;
										wp_reset_postdata();
									endif;
									echo '</div> ';
								endforeach; 
							endif;
						?>  
						</div>
						<div class="slider slider-nav">
							<?php 
								if (count($categories) > 0):
									foreach ($categories as   $cate): 
										$category_link = get_category_link( $cate->term_id );
										$image_data = wp_get_attachment_image_src ($images[ $cate->term_id], 'thumbnail');  
							?>
										<div class="event-item">
											<div class="event-inner">
												<div class="event-thumbnail">
													<img src="<?php echo esc_url( $image_data[0] ); ?>">
												</div>
												<div class="event-info">
													<a href="<?php echo esc_url( $category_link ); ?>"> <?php echo $cate->name ?></a>
												</div>
											</div>
										</div>  
							<?php
									endforeach; 
								endif;
							?> 
						</div>
					</div>
				</div>
				<div class="col-md-4 event-right">
					<div class="row  wow fadeIn" data-wow-duration="0.9s" data-wow-delay="1000ms">
					<?php 
						$filter = array(
											'post_type'				=> 'house_event',
											'posts_per_page'	=> 4);
						$events_p =  new WP_Query($args);
						if ($events_p->have_posts()):
							while ($events_p->have_posts()) : $events_p->the_post();
					?> 
								<div class="col-md-6 event-item"> 
									<div class="event-inner">
										<div class="event-thumbnail">
											<?php 
												if ( has_post_thumbnail() ) {
											    echo get_the_post_thumbnail ();
												}else{ 
											?> 
												<img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png">
											<?php	
											}?>
										</div>
										<div class="event-info">
											<a href="<?php the_permalink(); ?>"><?php the_title()?></a>
										</div>
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
	</div>
</div>
<!--/End Box Event-->