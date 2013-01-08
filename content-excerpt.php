<?php
/**
 * The default template for displaying content
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.1.0
 */
?>

	<!-- START: content-quote.php -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-meta">
			<?php required_posted_on(); ?>
		</div>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
		
		<footer class="entry-meta tb25">
			<?php get_template_part('entry-meta', get_post_format() ); ?>
		</footer><!-- #entry-meta -->
	</article><!-- #post -->
	<!-- END: content-quote.php -->