	<?php 
		$event_data = get_post_meta( $post->ID, '_event_data', true ); 
		$user_joined = get_post_meta( get_the_ID(), '_event_user_joined','[]' );
		wp_nonce_field( 'save_event_field', 'nonce_code' ); 
		$event_obj 	= json_decode($event_data); 
		$phone      = isset($event_obj->phone) && !empty($event_obj->phone) ?     $event_obj->phone : '';
		$email      = isset($event_obj->email) && !empty($event_obj->email) ?     $event_obj->email : '';
		$price      = isset($event_obj->price) && !empty($event_obj->price) ?     $event_obj->price : '0';
		$date       = isset($event_obj->date) &&  !empty($event_obj->date) ?      $event_obj->date : '';
		$time       = isset($event_obj->time) &&  !empty($event_obj->time) ?      $event_obj->time : '';
		$place      = isset($event_obj->place) &&  !empty($event_obj->place) ?    $event_obj->place : '';
		$present    = isset($event_obj->present) &&  !empty($event_obj->present) ?  $event_obj->present : '';
		$address    = isset($event_obj->address) && !empty($event_obj->address) ? $event_obj->address : ''; ; 

		$user_query = new WP_User_Query( array( 'include' => $user_joined) );
	?>
<div class="tab-panel" >
	<ul class="tab-list">
		<li class="active">
			<a href="tab-header"><?php echo __('General', 'sharehouse')?></a>
		</li>   
		<li class="">
			<a href="tab-subscribed"><?php echo __('Subscribed', 'sharehouse')?></a>
		</li>  
	</ul>
	<div class="tab-container">
		<div class="tab-wrapper"> 
			<!-- Header -->
			<div id="tab-header" class="tab-content active"> 
				<strong class="tab-title"> <?php echo __('General Settings' , 'sharehouse')?></strong> 
				<div class="options_group">  
					<p class="form-field _regular_price_field ">
						<label for="_regular_price">Regular price</label>
						<input type="number" class="short" name="event_field[price]" id="_regular_price" value="<?php echo esc_html($price) ?>" placeholder="0"> </p>
				</div>   
				<div class="options_group">  
					<p class="form-field _event_phone_field ">
						<label for="_event_phone">Phone</label>
						<input type="text" class="short" name="event_field[phone]" id="_event_phone" value="<?php echo esc_html($phone) ?>"> </p>
				</div>  
				<div class="options_group">  
					<p class="form-field _event_email_field ">
						<label for="_event_email">Email</label>
						<input type="text" class="_event_email" name="event_field[email]" id="_event_email" value="<?php echo esc_html($email) ?>"> </p>
				</div> 
				<div class="options_group">  
					<p class="form-field _event_time_field">
						<label for="_event_time">Time</label>
						<input type="text" class="_event_time" name="event_field[time]" id="_event_time" value="<?php echo esc_html($time) ?>"> am/pm</p>
				</div> 
				<div class="options_group">  
					<p class="form-field _event_date_field ">
						<label for="_event_date">Date</label>
						<input type="text" class="_event_date" name="event_field[date]" id="_event_date" value="<?php echo esc_html($date) ?>"> </p>
				</div> 

				<div class="options_group"> 
					<p class="form-field _event_place_field">
						<label for="_event_place">Place</label>
						<input type="text" class="short" name="event_field[place]" id="_event_place" value="<?php echo esc_html($place) ?>">
					</p>   
				</div> 
				<div class="options_group"> 
					<p class="form-field _event_address">
						<label for="_event_address">Address</label>
						<input type="text" class="short" name="event_field[address]" id="_event_address" value="<?php echo esc_html($address) ?>">
					</p> 
				</div> 
			</div> 
			<!-- Subscribed -->
			<div id="tab-subscribed" class="tab-content"> 
				<strong class="tab-title"> <?php echo __('Subscribed' , 'sharehouse')?></strong> 

				<div class="user-list">
				<?php 
					// Get query results.
					$users = $user_query->get_results();
					foreach ($users as $index => $user):
						$user = get_userdata( $user->ID );?>
						<div class="user-info">
							<div class="user-inner">
								<div class="thumb">
									<?php echo get_avatar( $user->ID, 'thumbnail',null,$user->display_name  ); ?> 
								</div> 
								<p><?=$user->display_name?></p>
							</div>
						</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>  