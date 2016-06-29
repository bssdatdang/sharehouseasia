    <footer>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 sh-widget">
              <?php if (is_active_sidebar('footer-1')): ?>
                <?php dynamic_sidebar('footer-1') ?>
              <?php endif;?> 
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 sh-widget">
              <?php if (is_active_sidebar('footer-2')): ?>
                <?php dynamic_sidebar('footer-2') ?>
              <?php endif;?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 sh-widget">
              <?php if (is_active_sidebar('footer-3')): ?>
                <?php dynamic_sidebar('footer-3') ?>
              <?php endif;?>
            </div>
          </div>
        </div>
      </div>
      <div class="container"> 
        <?php if (is_active_sidebar('footer-bottom')): ?>
          <?php dynamic_sidebar('footer-bottom') ?>
        <?php endif;?>
        <p class="copyright">
          <?php get_footer_descripton()?>
        </p> 
      </div>
    </footer>
  </div>
  <a href="#" class="backtop"><i class="fa fa-arrow-up"></i></a> 
  <?php wp_footer() ?> 
</body>
</html>