<div class="tab-panel shw-mbox shw-mbox-active-page-demo" style="padding: 5px 10px 5px 10px;margin-left: -10px;">
	<?php 
		$link_client = get_post_meta( $post->ID, '_link_client', true ); 
		wp_nonce_field( 'save_testimonial_field', 'nonce_code' );
	?>
	<label for="link_client">Client Url: </label>
	<input type="text" id="link_client" name="link_client" value="<?php echo esc_url( $link_client ) ?>" style="width:300px"  />  
</div>