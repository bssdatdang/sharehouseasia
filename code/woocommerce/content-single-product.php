<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $wc_product_attributes;
$condition_data = get_post_meta( get_the_ID(), '_condition_data', true );  
$condition_data = json_decode($condition_data);  
?>

<div class="content ">
  <div class="feature-wapper" id="feature-wapper">
    <div class="feature-wapper-inner">
      <div class="feature-wapper-thumbnail">
        <?php 
					if ( has_post_thumbnail() ) {
				    echo get_the_post_thumbnail ();
					}else{ ?>
							<img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png">
				<?php	}?>
      </div>
      <div class="feature-wapper-info">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
            <h1 class="feature-wapper-title"><?php the_title()?> </h1>
            <p>
              <?php the_excerpt()?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Start Box Detail Room-->
  <div class="room-detail box" id="room-detail" style="background:#fff">
    <div class="box-inner panel panel-default">
      <div class="container">
        <div class="row">
          <div class="col-md-4  pull-right-md">
            <div class="box-booking">
              <form action="#" method="post">
                <label class="form-title">
                  <strong>Your Reservation</strong>
                </label>
                <div class="form-group">
                  <select class="searchform-location form-control">
                    <option value="" disabled selected hidden>Please select your area...</option>
                    <option value="1">North Binh Thanh District</option>
                    <option value="1">Southern Binh Thanh District</option>
                    <option value="1">District 2</option>
                    <option value="1">District 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" name="dateStart" data-check="start" class="form-control searchform-date date-check-in" placeholder="Check in" id="date-check-in">
                </div>
                <div class="form-group">
                  <input type="text" name="dateEnd" data-check="end" class="form-control  searchform-date date-check-out" placeholder="Check out" id="date-check-out">
                </div>
                <div class="form-group">
                  <select class="form-control searchform-input ">
                    <option value="1">1 Guest</option>
                    <option value="2">2 Guest</option>
                  </select>
                </div>
                <div class="form-group">
                  <button class="btn btn-search   ">
                    Search
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-8 ">
            <div class="album-images">
              <div class="images-slider-for">
              <?php
								  global $product;
								 $attachment_ids = $product->get_gallery_attachment_ids();

								foreach( $attachment_ids as $attachment_id ) 
								{
								  $image_link = wp_get_attachment_url( $attachment_id );
								  echo '<img src="'.$image_link.'" />';
								}
							?> 
              </div>
              <div class="images-slider-nav">
	              <?php
									  global $product;
									 $attachment_ids = $product->get_gallery_attachment_ids();

									foreach( $attachment_ids as $attachment_id ) 
									{
									  $image_link = wp_get_attachment_image_src( $attachment_id, 'thumbnail' )[0];
									  echo '<img src="'.$image_link.'" />';
									}
								?> 
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="room-detail">
              <div class="room-headeing">
                <h1 class="room-title"><?php the_title()?></h1>
                <div class="room-price">
                  <span class="price-regular">
                  <?=get_woocommerce_currency_symbol() ?>
                  <?=$product->price ?> / Month
                </span>
                </div>
              </div>
              <div class="room-body">
                <div class="row">
                  <div class="col-md-12 condition-title">
                    <strong>Condition</strong>
                  </div>
                  <div class="col-md-12 list-condition">
                    <ul id="condition" class="list-unstyled list-inline">
                    <?php
                    	$attribute_taxonomies = wc_get_attribute_taxonomies();
											if ( ! empty( $attribute_taxonomies ) ) {
												foreach ( $attribute_taxonomies as $tax ) {
													$attribute_taxonomy_name = wc_attribute_taxonomy_name( $tax->attribute_name );
													$label = $tax->attribute_label ? $tax->attribute_label : $tax->attribute_name;
													?>
													<li class="condition-item">
		                        <div class="info">
		                        	<?php if (in_array($attribute_taxonomy_name, $condition_data, true)) {
																echo '<i class="fa fa-check"></i>';
															}?> 
															<?php echo esc_html( $label )?>  
														</div>
		                      </li>

													<?php	}
											}?> 
                      <li class="clearfix"></li>
                    </ul>
                  </div>
                  <div class="col-md-12 condition-title">
                    <strong>House description</strong>
                  </div>
                  <div class="col-md-12 ">
                  	<?php the_content()?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/End Box Detail Room-->
</div>