<?php 
  $block_title    = empty($atts['block_title']) ? '' : $atts['block_title']; 
  $extra_class    = empty($atts['extra_class']) ? 'posts-list' : 'posts-list '.$atts['extra_class'];
  $column_offset  = empty($atts['column_offset']) || intval($atts['column_offset']) < 1 ? '3' : intval($atts['column_offset']);
  $block_number   = (empty($atts['block_number']) && !is_numeric($atts['block_number'])) ? '10': $atts['block_number'];
  $block_offset   = (empty($atts['block_offset']) && !is_numeric($atts['block_offset'])) ? '0': $atts['block_offset'];
  $block_full     = empty($atts['block_full']) ? false : true;
  $show_type      = empty($atts['show_type']) ? 'grid' : $atts['show_type']; 
  $sort_by        = empty($atts['sort_by']) ? 'all' : $atts['sort_by']; 
  $categories     = empty($atts['category_list']) ? '0' : json_decode(urldecode($atts['category_list']));
  $post_type      = empty($atts['post_type']) ? 'post' : $atts['post_type'];
  $categories     = Helper_Controller::get_category_s($categories,true);  

  $orderby        = Helper_Controller::get_sort_by($sort_by);
  $args           = array(
                    'post_type'       => $post_type,
                    'posts_per_page'  => $block_number,
                    'offset'          => $block_offset);  

  $args = array_merge($args,$orderby); 

  $posts =  new WP_Query($args);  
  $images = get_option('taxonomy_image_plugin'); 

  $col = round(12 / $column_offset );
?>
<!--Start Box Event-->
<div class="<?php echo esc_attr($extra_class) ?> box" >
  <div class="box-inner panel panel-default"> 
    <?php if (!empty($block_title)):?>  
      <div class="panel-heading  text-center wow fadeIn <?php if($block_full) echo 'container' ?>" data-wow-duration="0.7s" data-wow-delay="700ms"> 
        <h3 class="panel-title"><?php echo esc_html($block_title) ?></h3>
        <p> <?php echo $content; ?> 
        </p> 
      </div> 
    <?php endif; ?>
    <div class="panel-body <?php if($block_full) echo 'container' ?>">
      <div class="row sh-posts">
        <?php if ($posts->have_posts()):
          while($posts->have_posts()):
            $posts->the_post();  ?>
            <?php if ($show_type ==='list_1'): ?>
              <div class="col-md-12 col-xs-12 col-ms-12">
                <div class="post-item post-list-1">
                  <div class="post-info">
                    <?php if($post_type == 'house_testimonial'): ?>
                      <a><?php the_title()?></a>
                    <?php else: ?>
                      <a href="<?php the_permalink(); ?>"><?php the_title()?></a>     
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php elseif($show_type ==='list_2'): ?>
              <div class="col-md-12 col-xs-12 col-ms-12">
                <div class="post-item post-list-2">
                  <div class="row">
                    <div class="col-md-4 post-thumbnail">
                      <?php 
                        if ( has_post_thumbnail() ) {
                          echo get_the_post_thumbnail ();
                        }else{ ?>
                            <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png">
                      <?php }?>
                    </div>
                    <div class="col-md-8 post-info">
                      <?php if($post_type == 'house_testimonial'): ?>
                        <a><?php the_title()?></a>
                      <?php else: ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title()?></a>     
                      <?php endif; ?>
                    </div>
                  </div> 
                </div>
              </div>
            <?php elseif ($show_type ==='list_3'): ?>
              <div class="col-md-12 col-xs-12 col-ms-12">
                <div class="post-item post-list-3"> 
                  <div class="post-thumbnail">
                    <?php 
                      if ( has_post_thumbnail() ) {
                        echo get_the_post_thumbnail ();
                      }else{ ?>
                          <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png">
                    <?php }?>
                  </div>
                  <div class="post-info">
                    <?php if($post_type == 'house_testimonial'): ?>
                      <a><?php the_title()?></a>
                    <?php else: ?>
                      <a href="<?php the_permalink(); ?>"><?php the_title()?></a>     
                    <?php endif; ?>
                  </div> 
                </div>
              </div>
            <?php else: ?>
            <div class="col-md-<?=$col?> col-xs-12 col-ms-6">
              <div class="post-item">
                <div class="post-inner">
                  <div class="post-thumbnail">
                    <?php 
                      if ( has_post_thumbnail() ) {
                        echo get_the_post_thumbnail ();
                      }else{ ?>
                          <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png">
                    <?php }?>
                  </div>
                  <div class="post-info">
                    <a href="<?php the_permalink(); ?>"><?php the_title()?></a>  
                    <p ><?php the_excerpt() ?></p>
                  </div>
                </div>
              </div>   
            </div>
            <?php endif ?>
        <?php  endwhile; endif; ?>
      </div>
    </div> 
  </div>
</div>
<!--/End Box Event-->