<?php
wp_nonce_field( 'save_page_field', 'nonce_code' ); 
$post_id = $post->ID;
$_fullbox = get_post_meta( $post_id, '_fullbox', false );
$_fullbox = $_fullbox? 'checked' : '';
?>
<div class="tab-panel shw-mbox shw-mbox-active-page-demo" >
	<ul class="tab-list">
		<li class="active">
			<a href="tab-header">Genaral</a>
		</li>
		<li>
			<a href="tab-footer">Sidebar</a>
		</li> 
	</ul>
	<div class="tab-container">
		<div class="tab-wrapper"> 
			<!-- Header -->
			<div id="tab-header" class="tab-content active"> 
				<strong class="tab-title">Genaral</strong>
				<table class="form-table"> 
					<tr>
						<th scope="row">
							<div><?php _e( 'Display Full/Box? ', 'sharehouse' );?></div>
							<p class="description" ><?php __( 'Enabled/Disabled content in header top.', 'sharehouse' );?></p>
						</th>
						<td class="row">
							<input type="checkbox" name="_fullbox" <?=$_fullbox?> />
						</td>
					</tr>
				</table>
			</div>
			<div id="tab-footer" class="tab-content"> 
				<strong class="tab-title">Sidebar</strong>
				<table class="form-table"> 
					<tr>
						<th scope="row">
							<div><?php _e( 'Header Left Content', 'sharehouse' );?></div>
							<p class="description" ><?php __( 'Enabled/Disabled content in header top.', 'sharehouse' );?></p>
						</th>
						<td class="row">
							a
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>