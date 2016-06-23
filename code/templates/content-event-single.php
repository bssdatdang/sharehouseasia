<?php

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
} 
$user_joined = get_post_meta( get_the_ID(), '_event_user_joined','[]' );
$user_joined = json_decode($user_joined);

if ( is_user_logged_in() ){
  if ( isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $current_user = wp_get_current_user();
    if (!in_array($current_user->ID, $user_joined)) {
      array_push($user_joined, $current_user->ID);
      update_post_meta( get_the_ID(), '_event_user_joined', json_encode($user_joined));
    }
  }
}

global $wc_product_attributes; 
$event_data = get_post_meta( get_the_ID(), '_event_data', true ); 

print_r($_event_user_joined);

wp_nonce_field( 'save_event_field', 'nonce_code' ); 
$event_obj  = json_decode($event_data); 
$phone      = isset($event_obj->phone) && !empty($event_obj->phone) ?     $event_obj->phone : '';
$email      = isset($event_obj->email) && !empty($event_obj->email) ?     $event_obj->email : '';
$price      = isset($event_obj->price) && !empty($event_obj->price) ?     $event_obj->price : '0';
$date       = isset($event_obj->date) &&  !empty($event_obj->date) ?      $event_obj->date : '';
$time       = isset($event_obj->time) &&  !empty($event_obj->time) ?      $event_obj->time : '';
$place      = isset($event_obj->place) &&  !empty($event_obj->place) ?    $event_obj->place : '';
$present    = isset($event_obj->present) &&  !empty($event_obj->present) ?  $event_obj->present : '';
$address    = isset($event_obj->address) && !empty($event_obj->address) ? $event_obj->address : ''; 

?>

<script type="text/javascript">
  
  jQuery(document).ready(function(){
    var newYear = new Date(); 
    newYear = new Date('<?php echo date('d,m,Y',strtotime($date)) ?>'); 
    jQuery('#coutdownTimer').countdown({until: newYear, format: 'YOD'});
  });
</script>
<div class="content ">
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
  <div class="event-detail box" id="event-detail" style="background:#fff"> 
    <div class="container">
      <div class="row">
        <div class="col-md-3  pull-right-md">
          <div class="widget-price">
            <strong>
              <span class="currency"><?php echo get_woocommerce_currency_symbol()?></span>
              <?php echo esc_html($price) ?>
            </strong>
            <div class="widget-content">
              <ul>
                <li>
                  <label>Status: </label>
                  <span class="value">
                    <?php 
                    $now = new DateTime();  
                      if (strtotime(date('d/m/Y',strtotime($date))) > $now->getTimestamp()) {
                        echo __('Comming Soon', 'sharehouse');
                      }else{
                        echo __('Passed', 'sharehouse');
                      }
                    ?>
                  </span>
                </li>
                <li>
                  <label>Joined: </label>
                  <span class="value"><?=count($user_joined)?></span>
                </li>
              </ul>
              <div class="coutdownTimer" id="coutdownTimer">
                
              </div>
              <form action="" method="post">
                <button class="btn btn-success" type="submit">
                  <i class="glyphicon glyphicon-hand-right"></i>
                  <?php 
                    if ( is_user_logged_in() ){
                      echo __('Join Event','sharehouse');
                    }else {
                      echo __('Login To Join','sharehouse') ;
                    }
                  ?>
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-9 ">
          <h1 class="event-detail-title"> <?php the_title()?></h1>
          <div class="event-info"> 
            <table class="table table-striped">
              <tr>
                <td>
                  <div class="note-info-block">
                    <label class="label-info">Date: </label>
                    <label class="note-info"><?php echo esc_html($date) ?></label>
                  </div>
                </td>
                <td>
                  <div class="note-info-block">
                    <label class="label-info">Time:</label>
                    <label class="note-info"><?php echo esc_html($time) ?></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="note-info-block">
                    <label class="label-info">Phone: </label>
                    <label class="note-info"><?php echo esc_html($phone) ?></label>
                  </div>
                </td>
                <td>
                  <div class="note-info-block">
                    <label class="label-info">Email:</label>
                    <label class="note-info"><?php echo esc_html($email) ?></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="note-info-block">
                    <label class="label-info">Place:</label>
                    <label class="note-info"><?php echo esc_html($place) ?></label>
                  </div>
                </td>
                <td>
                  <div class="note-info-block">
                    <label class="label-info">Address</label>
                    <label class="note-info"><?php echo esc_html($email) ?></label>
                  </div>
                </td>
              </tr> 
            </table>
          </div>
          <div class="event-content">
            <?php the_content()?>
          </div>
        </div>
      </div>  
    </div>
  </div>
  <!--/End Box Detail Room-->
</div>