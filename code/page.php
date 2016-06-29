<?php get_header();

$post_id = get_the_ID();

$_fullbox = get_post_meta( $post_id, '_fullbox', false );
$_fullbox = $_fullbox[0]? 'container' : '';



?>
  <!--/Content of page-->
  <div class="content <?=$_fullbox?> ">
    <?php 
      while (have_posts()): the_post();  
        // Include the page content template.
        get_template_part( 'content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      endwhile;
    ?>

  </div>
  <!--/Content of page-->
<?php get_footer() ?>