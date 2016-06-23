<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage 
 * @since sharehouse 1.0
 */

get_header(); ?>

  <div id="content" class="content">
    <main id="main" class="site-main" role="main">

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
      switch (get_post_type()) {
        case 'house_event':
          get_template_part( 'templates/content', 'event-single' );
          break;
        
        default:
          get_template_part( 'templates/content', 'default' );
          break;
      } 
    // End the loop.
    endwhile;
    ?>

    </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php get_footer(); ?>
