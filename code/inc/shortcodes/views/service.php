<?php 
	$block_title = empty($atts['block_title']) ? '' : $atts['block_title'];
	$extra_class = empty($atts['extra_class']) ? 'service' : 'service '.$atts['extra_class'];
	$block_number = (empty($atts['block_number']) && !is_numeric($atts['block_number'])) ? '10': $atts['block_number'];
	$block_offset = (empty($atts['block_offset']) && !is_numeric($atts['block_offset'])) ? '0': $atts['block_offset'];
	$block_full = empty($atts['block_full']) ? false : true;
	$sort_by = empty($atts['sort_by']) ? '0s' : $atts['sort_by'];
	$categories = empty($atts['category_list']) ? '0' : json_decode(urldecode($atts['category_list']));
	$categories = Helper_Controller::get_category_s($categories,true);  
 	
	$orderby = Helper_Controller::get_sort_by($sort_by);
 	$args = array(
		'post_type'				=> 'house_client',
		'posts_per_page'	=> $block_number,
		'offset'					=> $block_offset,
	); 
	if (!in_array('0', $categories)) { 
		$filter = array(
				'tax_query'		=> array(
					array(
						'taxonomy'	=> 'client_cat',
						'field'    => 'term_id',
						'terms'    => $categories, 
					)
				) 
			);
		$args = array_merge($args,$filter); 
	}
	$args = array_merge($args,$orderby);  
	$clients =  new WP_Query($args);  
?>

<!--Start Box Service-->
<div class="<?php echo esc_attr($extra_class) ?> box" >
	<div class="box-inner panel panel-default"> 
		<?php if (!empty($block_title)):?> 
			<div class="panel-heading  wow fadeIn <?php if($block_full) echo 'container' ?>" data-wow-duration="0.7s" data-wow-delay="700ms">
				<h3 class="panel-title"><?php echo esc_html($atts['block_title']) ?></h3>
			</div>
		<?php endif; ?>
		<div class="panel-body <?php if($block_full) echo 'container' ?>">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 ">
          <div class="service-inner wow fadeIn" data-wow-duration="0.9s" data-wow-delay="700ms">
            <div class="service-icon">
              <i class="fa fa-empire"></i>
            </div>
            <h4 class="service-title">Live</h4>
            <ul class="service-list list-unstyled">
              <li class="service-item">
                <h6 class="sc-item-title">
                  <i class="fa fa-file-text-o"></i>
                  Personal Contract
                  <span class="control-caret pull-right"> 
                  <i class="fa fa-plus"></i>
                  </span>
                </h6>
                <div class="sc-item-description">
                  Each room have its own contract which is independent from the whole flat. No matter how many person sharing the flat, you pay the same price for all the contract duration.
                </div>
              </li>
              <li class="service-item">
                <h6 class="sc-item-title">
                  <i class="fa fa-pie-chart"></i>
                  Bills Management 
                  <span class="control-caret pull-right"> 
                  <i class="fa fa-plus"></i>
                  </span>
                </h6>
                <div class="sc-item-description">
                  You won’t ever have to worry about managing your bills for your flat; every month you will receive only one bill with your equally-shared part of expenses and charges.
                </div>
              </li>
              <li class="service-item">
                <h6 class="sc-item-title">
                  <i class="fa fa-recycle"></i>
                  Cleaning Service 
                  <span class="control-caret pull-right"> 
                  <i class="fa fa-plus"></i>
                  </span>
                </h6>
                <div class="sc-item-description">
                  We offer a 3 times/week cleaning service for all common areas of the flat (kitchen, bathroom, living room, etc.) with the option of a custom cleaning of bedrooms, washing and ironing clothes upon request!
                </div>
              </li>
              <li class="service-item">
                <h6 class="sc-item-title">
                  <i class="fa fa-signal"></i>
                  Fully furnished 
                  <span class="control-caret pull-right"> 
                  <i class="fa fa-plus"></i>
                  </span>
                </h6>
                <div class="sc-item-description">
                  All of our flats are fully furnished. From a desk, bed and wardrobe, washing machine to multiples Internet routers accessible from everywhere and a fully equipped kitchen.
                </div>
              </li>
              <li class="service-item">
                <h6 class="sc-item-title">
                  <i class="fa fa-plug"></i>
                  Local Support
                  <span class="control-caret pull-right"> 
                  <i class="fa fa-plus"></i>
                  </span>
                </h6>
                <div class="sc-item-description">
                  We have your maintenance needs covered with our technical team. Moreover, as part of the community, you will have access to our best deal in term of travelling and restaurant. Last but not least, we provide to our tenants, the internship and job placement service to provide the best local experiences ever.
                </div>
              </li>
              <li class="service-item">
                <h6 class="sc-item-title">
                  <i class="fa fa-users"></i>
                  Very Good Ambience
                  <span class="control-caret pull-right"> 
                  <i class="fa fa-plus"></i>
                  </span>
                </h6>
                <div class="sc-item-description">
                  We organize trips and events to make you and your housemates join our international community from others flatshares.
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 ">
          <div class="service-inner wow fadeIn" data-wow-duration="0.9s" data-wow-delay="1000ms">
            <div class="service-icon">
              <i class="fa fa-file-word-o"></i>
            </div>
            <h4 class="service-title">Play & Work</h4>
            <ul class="service-list list-unstyled">
              <li class="service-item">
                <h6 class="sc-item-title">
                  <i class="fa fa-user"></i>
                  Event
                  <span class="control-caret pull-right"> 
                  <i class="fa fa-plus"></i>
                  </span>
                </h6>
                <div class="sc-item-description">
                  updating....
                </div>
              </li>
              <li class="service-item">
                <h6 class="sc-item-title">
                  <i class="fa fa-user"></i>
                  Intership 
                  <span class="control-caret pull-right"> 
                  <i class="fa fa-plus"></i>
                  </span>
                </h6>
                <div class="sc-item-description">
                  updating....
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 ">
          <div class="service-inner wow fadeIn" data-wow-duration="0.9s" data-wow-delay="700ms">
            <div class="service-icon">
              <i class="fa fa-life-ring"></i>
            </div>
            <h4 class="service-title">Support</h4>
            <ul class="service-list list-unstyled">
              <li class="service-item">
                <h6 class="sc-item-title">
                  <i class="fa fa-file-text"></i>
                  Documenttation 
                  <span class="control-caret pull-right"> 
                  <i class="fa fa-plus"></i>
                  </span>
                </h6>
                <div class="sc-item-description">
                  updating....
                </div>
              </li>
              <li class="service-item">
                <h6 class="sc-item-title">
                  <i class="fa fa-list-alt"></i>
                  FAQ 
                  <span class="control-caret pull-right"> 
                  <i class="fa fa-plus"></i>
                  </span>
                </h6>
                <div class="sc-item-description">
                  updating....
                </div>
              </li>
              <li class="service-item">
                <h6 class="sc-item-title">
                  <i class="fa fa-home"></i>
                  House 
                  <span class="control-caret pull-right"> 
                  <i class="fa fa-plus"></i>
                  </span>
                </h6>
                <div class="sc-item-description">
                  updating....
                </div>
              </li>
              <li class="service-item">
                <h6 class="sc-item-title">
                  <i class="fa fa-user"></i>
                  Personal service 
                  <span class="control-caret pull-right"> 
                  <i class="fa fa-plus"></i>
                  </span>
                </h6>
                <div class="sc-item-description">
                  updating....
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>
<!--/End Box Service-->