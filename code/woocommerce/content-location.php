<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}  
  $cate = get_term_by( 'slug', get_query_var('location_cat'), 'location_cat' );

  $images = get_option('taxonomy_image_plugin'); 
  $category_link = get_category_link( $cate->term_id );
  $image_data = wp_get_attachment_image_src ($images[ $cate->term_id]); 
  $filters = array(
      'post_type'       => 'product',
      'posts_per_page'  => '12', 
      'tax_query'   => array(
        array(
          'taxonomy'  => 'location_cat',
          'field'    => 'term_id',
          'terms'    => $cate->term_id, 
        )
      ) 
    );
    $products =  new WP_Query($filters); 
?>
<div class="feature-wapper" id="feature-wapper">
  <div class="feature-wapper-inner">
    <div class="feature-wapper-thumbnail">
      
      <?php 

        if ( isset($image_data[0])) {
          echo '<img src="'.esc_url( $image_data[0] ).'">';
        }else{ ?>
            <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png">
      <?php }?>
    </div>
    <div class="feature-wapper-info">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
          <h1 class="feature-wapper-title"><?php single_cat_title()?> </h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Start Box Detail Room-->
<div class="sh-post-detail box" id="sh-post-detail" style="background:#fff">
  <div class="box-inner panel panel-default">
    <div class="container"> 
      <div class="row">
        <div class="col-md-8">
          <?php if($products->have_posts()){ 
            while ($products->have_posts()) {
              $products->the_post(); ?>
            <div class="house-item">
              <div class="house-inner" >
                <div class="row" >
                  <div class="col-md-4 col-xs-12 thumb">
                    <a href="<?php the_permalink() ?>" >
                    <?php 
                      if ( has_post_thumbnail() ) {
                        echo get_the_post_thumbnail ();
                      }else{ ?>
                          <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png">
                    <?php }?>
                    </a>
                  </div> 
                  <div class="info col-md-8 col-xs-12 ">
                    <a href="<?php the_permalink() ?>" class="title">
                      <?php the_title()?>
                    </a>
                    <div class="description" >
                      <?php the_excerpt() ?>
                    </div>
                  </div> 
                </div> 
              </div> 
            </div>

          <?php  } 
          }
          ?>
        </div>
        <div class="col-md-4">
          <?php if (is_active_sidebar('sidebar-product')): ?>
            <?php dynamic_sidebar('sidebar-product') ?>
          <?php endif;?>
          <p class="copyright">
            <?php get_footer_descripton()?>
          </p> 
        </div>
      </div>
    </div>
  </div>
</div>