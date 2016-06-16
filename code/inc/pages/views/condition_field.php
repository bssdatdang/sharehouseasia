	<?php 
		$condition_data = get_post_meta( $post->ID, '_condition_data', true ); 
		wp_nonce_field( 'save_condition_field', 'nonce_code' ); 
		$condition_data = json_decode($condition_data);   
	?>
<div class="tab-panel" >
	<ul class="tab-list">
		<li class="active">
			<a href="tab-header">House conditions</a>
		</li>  
	</ul>
	<div class="tab-container">
		<div class="tab-wrapper"> 
			<!-- Header -->
			<div id="tab-header" class="tab-content active"> 
				<strong class="tab-title">Chooice a condition in house </strong>  
				<div class="tab-content-condition">
					<?php
					global $wc_product_attributes;
					// Array of defined attribute taxonomies
					$attribute_taxonomies = wc_get_attribute_taxonomies();
					if ( ! empty( $attribute_taxonomies ) ) {
						foreach ( $attribute_taxonomies as $tax ) {
							$attribute_taxonomy_name = wc_attribute_taxonomy_name( $tax->attribute_name );
							$label = $tax->attribute_label ? $tax->attribute_label : $tax->attribute_name; ?>
						<div class="condition-item"> 
							<input type="checkbox" name="condition_field[]" 
							<?php if (in_array($attribute_taxonomy_name, $condition_data, true)) {
								echo ' checked=true ';
							}?>
							value="<?php echo esc_attr( $attribute_taxonomy_name )?>"> 
							<?php echo esc_html( $label )?> 
						</div>
				<?php		}
					}
				?>
				</div> 
			</div> 
		</div>
	</div>
</div>  