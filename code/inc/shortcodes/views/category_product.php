<div class="vc_column_container">

	<div class="vc_column-inner "> 

		<div class="grid box">

			<?php  if (isset($atts['block_title'])): ?>

				<div class="box-heading"> <?php echo esc_html($atts['block_title']) ?></div>

			<?php endif ?> 

 

		<div class="box-content">

			<div class="box-product">

			<?php 

			$all = false;

				$objects= json_decode(urldecode($atts['category_list']));

 

				$ids = array();

				if (is_array($objects)) {

					foreach ($objects as $cate) {

						if ( $cate->id =='0') {

							$all = true; 

							break;

						}else{

							$ids[]= $cate->id;

						}

					}

				}else{

					$all = true; 

				}

				//$ids = implode(',', $ids);

				if ($all) { 

					$terms = get_terms( 'product_cat',array(

						'hide_empty' => false,

								'title_li'     => '',

									'term_args'    => array(

									'orderby'      => 'id',

									'order'        => 'ASC',

									'hierarchical' => true,

									'depth'  => 3,

									), 

						)); 

				}else{

					$terms = get_terms( 'product_cat',array(

						'include' => $ids,

						'hide_empty' => false,

								'title_li'     => '',

									'term_args'    => array(

									'orderby'      => 'id',

									'order'        => 'ASC',

									'hierarchical' => true,

									'depth'  => 3,

									),

					));

				}

				 

				$_terms = array();

				foreach ($terms as  $term) {

				 	if (empty($atts['just_child']))  { 

						if (!in_array($term, $_terms)) {

							$_terms[] = $term;

						}

					} 

					if (!empty($atts['show_child'])) { 

						$query_args = array(

							'child_of'   => $term->term_id,

						); 

						$_categories = get_terms('product_cat', $query_args  ); 

						foreach ($_categories as $c) {

							if (!in_array($c, $_terms)) {

								$_terms[] = $c;

							}

						}

					} 

				}   





				foreach ($_terms as $term):

					$thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );

				  $image = wp_get_attachment_url( $thumbnail_id );

				  if (empty( $image)) {

				  	$image = THANHCONG_THEME_NOIMAGE;

				  } 

					?>

					<div class="wrap">

						<div class="struct">

							<div class="frame">

								<a href="<?php echo get_term_link($term->term_id,'product_cat')?>" class="image"><img src="<?php echo esc_url($image) ?>" alt=" " /> </a>

								<div class="name"><a href="<?php echo get_term_link($term->term_id,'product_cat')?>"><?php echo esc_html($term->name)?></a> </div> 

            	</div>

            	</div>

         	</div>

				<?php endforeach; ?>

			</div>

			</div>

		</div>

	</div>

</div>