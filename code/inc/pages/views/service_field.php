	<?php 
		$service_data = get_post_meta( $post->ID, '_service_data', true ); 
		wp_nonce_field( 'save_service_field', 'nonce_code' ); 
		$service_obj = json_decode($service_data); 
		$name_arr = $service_obj->name;
		$icon_arr = $service_obj->icon;
		$icon_field = $service_obj->icon_field;
		$desc_arr = $service_obj->description;
	?>
<div class="tab-panel" >
	<ul class="tab-list">
		<li class="active">
			<a href="tab-header">Service Field</a>
		</li>  
	</ul>
	<div class="tab-container">
		<div class="tab-wrapper"> 
			<!-- Header -->
			<div id="tab-header" class="tab-content active"> 
				<strong class="tab-title">Service Icon: <input type="text" name="service_field[icon_field]" placeholder="Enter service icon" class="form-control" value="<?=$icon_field?>"></strong> 


				<hr/>
				<strong class="tab-title">Service Field  <span class="page-title-action action-add"><i class="fa fa-plus"></i> Add Field</span></strong> 
				<table class="form-table service-table"> 
					<thead>
						<tr> 
							<th class="row"  style="width:80%"> 
								<div><?php _e( 'Field Name', 'sharehouse' );?></div>
								<p class="description" ><?php echo __( 'Enter content in description.', 'sharehouse' );?></p>
							</th>
							<th class="row"  style="width:20%"> 
								Action
							</th>
						</tr> 
					</thead>
					<tbody>
						<?php 
							if (!empty($name_arr)&& is_array($name_arr)) {
								for ($i=0; $i < count($name_arr ); $i++) { ?>
									 <tr class="row-<?=$i?>" >
										<td>
											<input type="text" name="service_field[icon][]" placeholder="Enter field icon" class="form-control" value="<?=$icon_arr[$i]?>">
											<input type="text" name="service_field[name][]" placeholder="Enter field name" class="form-control" value="<?=$name_arr[$i]?>">
											<textarea  name="service_field[description][]" cols="50" rows="3"  class="form-control"><?=$desc_arr[$i]?></textarea>
										</td> 
										<td> 
											<span href="#" class="title-action action-remove" data-index="<?=$i?>"> <i class="fa fa-remove"></i></span>
										</td>
									</tr>
								<?php };
							} 
						?> 
					</tbody>
				</table>
			</div> 
		</div>
	</div>
</div> 
<script type="text/template" id="template-service-field">
	<tr class="row-{{row_index}}" >
		<td>
			<input type="text" name="service_field[icon][]" placeholder="Enter field icon" class="form-control">
			<input type="text" name="service_field[name][]" placeholder="Enter field name" class="form-control">
			<textarea  name="service_field[description][]" cols="50" rows="3"  class="form-control"></textarea>
		</td> 
		<td> 
			<span href="#" class="title-action action-remove" data-index="{{row_index}}"> <i class="fa fa-remove"></i></span>
		</td>
	</tr>
</script>