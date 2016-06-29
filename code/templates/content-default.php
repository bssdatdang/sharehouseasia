<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}  
?>
<div class="feature-wapper" id="feature-wapper">
  <div class="feature-wapper-inner">
    <div class="feature-wapper-thumbnail">
      <?php 
        if ( has_post_thumbnail() ) {
          echo get_the_post_thumbnail ();
        }else{ ?>
            <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png">
      <?php }?>
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
<div class="sh-post-detail box" id="sh-post-detail" style="background:#fff">
  <div class="box-inner panel panel-default">
    <div class="container"> 
      <div class="row">
        <div class="col-md-8">
          <div class="sh-post-detail">
            <div class="sh-post-headeing">
              <h1 class="sh-post-title"><?php the_title()?></h1>  
            </div>
            <div class="sh-post-body"> 
              <?php the_content()?>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <?php if (is_active_sidebar('sidebar-right')): ?>
            <?php dynamic_sidebar('sidebar-right') ?>
          <?php endif;?>
          <p class="copyright">
            <?php get_footer_descripton()?>
          </p> 
        </div>
      </div>
    </div>
  </div>
</div>