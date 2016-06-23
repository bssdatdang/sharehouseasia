<?php 
  $block_title = empty($atts['block_title']) ? '' : $atts['block_title']; 
  $block_small = empty($atts['block_small']) ? '' : $atts['block_small'];  
  $extra_class = empty($atts['extra_class']) ? 'register-form' : 'register-form '.$atts['extra_class'];
  $block_full = empty($atts['block_full']) ? false : true;

  $username   =   isset($_POST['username'])? $_POST['username'] : null;
  $password   =   isset($_POST['password'])? $_POST['password'] : null;
  $email      =   isset($_POST['email'])? $_POST['email'] : null;
  $first_name =   isset($_POST['first_name'])? $_POST['first_name'] : null;
  $last_name  =   isset($_POST['last_name'])? $_POST['last_name'] : null;
global $reg_errors;
  $status= '';
  if ( isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST' ) { 

    Helper_Controller::registration_validation(
    $_POST['username'],
    $_POST['password'],
    $_POST['password_confirmation'],
    $_POST['email'], 
    $_POST['first_name'],
    $_POST['last_name']
    );
    // sanitize user form input
    global $username, $password, $email, $first_name, $last_name;
    $username   =   sanitize_user( $_POST['username'] );
    $password   =   esc_attr( $_POST['password'] );
    $email      =   sanitize_email( $_POST['email'] );
    $first_name =   sanitize_text_field( $_POST['first_name'] );
    $last_name  =   sanitize_text_field( $_POST['last_name'] );
    
    $status = Helper_Controller::complete_registration(
    $username,
    $password,
    $email, 
    $first_name,
    $last_name
    );
  } 
$reg_errors = $reg_errors->errors;
?>
<div class="panel-body <?php if($block_full) echo 'container' ?>">
  <div class="row ">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form action="<?php echo esc_url($_SERVER['REQUEST_URI'])?>" role="form" class="register-form" method="post">
        <h2><?php echo esc_html($block_title)?> <small><?php echo esc_html($block_small)?></small></h2>
        <?php if (!empty($status)) {
          echo '<p>'.$status.'</p>';
        }?>
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group"> 
              <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" value="<?=( isset( $_POST['first_name'] ) ? $first_name : null )?>">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value="<?=( isset( $_POST['last_name'] ) ? $last_name : null )?>">
            </div>
          </div>
        </div>
        <div class="form-group">
          <?php
            $error = '';
            if (isset($reg_errors['username'][0])) {
              $error = 'error';
              echo '<label  class="label label-danger">'.$reg_errors['username'][0].'</label>';
            }              
          ?>
          <input type="text" name="username" id="username" class="<?php echo esc_html($error) ?> form-control input-lg" placeholder="Username (*)" tabindex="3" value="<?=( isset( $_POST['username'] ) ? $username : null )?>">
        </div>
        <div class="form-group">
          <?php
            $error = '';
            if (isset($reg_errors['email'][0])) {
              $error = 'error';
              echo '<label  class="label label-danger">'.$reg_errors['email'][0].'</label>';
            }              
          ?>
          <input type="email" name="email" id="email" class="<?php echo esc_html($error) ?> form-control input-lg" placeholder="Email Address (*)" tabindex="4" value="<?=( isset( $_POST['email'] ) ? $email : null )?>">
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <?php
                $error = '';
                if (isset($reg_errors['password'][0])) {
                  $error = 'error';
                  echo '<label  class="label label-danger">'.$reg_errors['password'][0].'</label>';
                }              
              ?>
              <input type="password" name="password" id="password" class="<?php echo esc_html($error) ?> form-control input-lg " placeholder="Password (*)" tabindex="5" value="<?=( isset( $_POST['password'] ) ? $password : null )?>">
            </div>
          </div>
          <div class="col-xs-12">
            <div class="form-group">
            <?php
              $error = '';
              if (isset($reg_errors['confirm'][0])) {
                $error = 'error';
                echo '<label  class="label label-danger">'.$reg_errors['confirm'][0].'</label>';
              }              
            ?>
              <input type="password" name="password_confirmation" id="password_confirmation" class="<?php echo esc_html($error) ?> form-control input-lg" placeholder="Confirm Password (*)"  tabindex="6" value="<?=( isset( $_POST['password_confirmation'] ) ? $password_confirmation : null )?>">
            </div>
          </div> 
        </div>
        
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-12 text-center">
            <button  class="btn btn-primary" name="submit"><i class="glyphicon glyphicon-new-window"></i>  Register</button> 
            <a href="<?php echo get_site_url() . '/wp-login.php' ?>" class="btn btn-success"><i class="glyphicon glyphicon-remove"></i>  Log In</a></div>
        </div>
      </form>
    </div>
  </div>
</div>