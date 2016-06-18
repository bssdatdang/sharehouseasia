<?php 
	$block_title = empty($atts['block_title']) ? '' : $atts['block_title']; 
	$extra_class = empty($atts['extra_class']) ? 'slider-video' : 'slider-video '.$atts['extra_class'];
	$block_link1 = empty($atts['block_link1']) ? 'https://a0.muscache.com/airbnb/static/P1-background-vid-compressed-2.mp4': $atts['block_link1'];
	$block_link2 = empty($atts['block_link2']) ? 'https://a0.muscache.com/airbnb/static/US_60_ANTHEM.mp4': $atts['block_link2'];

 
	$params = array(
			'taxonomy' => 'location_cat',
			'hide_empty' => false,
			) ;
	$categories  = get_categories($params);  
?>
 
<div class=" <?php echo esc_attr($extra_class) ?>" id="slider-video">
	<div class="slider-inner">
		<div class="slider-background video-control" aria-hidden="false">
			<video preload="auto" loop="loop" id="slider-video-main" class="video-playing" autoplay>
				<source src="<?php echo esc_url($block_link1)?>" type="video/mp4">
			</video>
			<div class="overlay">
			</div>
			<div class="video-caption">
				<a href="#" class="btn btn-circle  btn-play hide-md" data-video="slider-video-main"><i class="fa fa-play-circle" ></i></a> 
				<?php if (!empty($block_title)):?>
				<h2 class="text-branding panel-title text-jumbo text-contrast"> <?php echo esc_html($block_title) ?> </h2>
				<?php endif; ?>

				<?php if (!empty($content)):?>
				<p class="text-contrast"> <?php echo esc_html($content) ?> </p>
				<?php endif; ?> 
				<a href="#" class="btn btn-circle  btn-play hide-sm" data-video="slider-video-main"><i class="fa fa-play-circle" ></i></a>
			</div>
		</div>
		<div class="slider-player  video-control" aria-hidden="true">
			<video preload="auto" loop="loop" id="slider-video-player" class="video-playing">
				<source src="<?php echo esc_url($block_link2)?>" type="video/mp4">
			</video>
			<span class="btn-close "><i class="fa fa-remove"></i></span>
			<div class="video-caption">
				<a href="#" class="btn btn-circle  btn-play" data-video="slider-video-player"><i class="fa fa-play-circle" ></i></a>
			</div>
		</div>
		<!--Start Box Check Availablity-->
		<div class="checking" id="checking">
			<div class="box-inner panel panel-default">
				<div class="container">
					<div class="panel-body">
						<form class="form-check-available form-inline" method="post" action="#">
							<div class="form-group">
								<div class="input-group">
									<select class="searchform-location searchform-input">
										<option value="" disabled selected hidden>Please select your area...</option>
										<?php   
											if (count($categories) > 0) :
												foreach ($categories as $loca): ?> 
													<option value="<?php echo esc_html($loca->term_id) ?>"><?php echo esc_html($loca->name) ?></option>
										<?php 
												endforeach;
											endif; ?> 
									</select>
									<input type="text" name="dateStart" data-check="start" class=" searchform-input searchform-date date-check-in" placeholder="Check in" id="date-check-in">
									<input type="text" name="dateEnd" data-check="end" class=" searchform-input searchform-date date-check-out" placeholder="Check out" id="date-check-out">
									<select class="searchform-guest searchform-input">
										<option value="1">1 Guest</option>
										<option value="2">2 Guest</option>
									</select>
									<button class="btn btn-search   ">
										Search
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--/End Box Check Availablity-->
	</div>
</div>