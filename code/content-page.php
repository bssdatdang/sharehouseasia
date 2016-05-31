<?php
/**
 * The template used for displaying page content
 *
 * @package Sharehouse
 * @subpackage sharehouse
 * @since Sharehouse 1.1
 */
?> 

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'sharehouse' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
</article><!-- #post-## -->
