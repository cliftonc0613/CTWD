<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.3.0
 */

get_header(); ?>

	<!-- Row for main content area 
	<div class="page-title" >
		<div class="row">
			<div class="twelve columns">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns hide-for-small">
				<img class="center" src="<?php the_field( "blog_header" ); ?>" >
			</div>
			<div class="twelve columns show-for-small">
				<img  src="<?php the_field( "blog_header" ); ?>" class="center">
			</div>
		</div>
	</div>
		-->
	<div id="content" class="row">
		
		<div id="main" class="eight columns" role="main">
			<div class="post-box">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						/**
						 * Seriously I never used comments on a page, what for?
						 */
						//comments_template( '', true );
					?>

				<?php endwhile; // end of the loop. ?>

			</div>
		</div><!-- /#main -->

		<aside id="sidebar" class="four columns" role="complementary">
			<div class="sidebar-box">
				<?php get_sidebar(); ?>
			</div>
		</aside><!-- /#sidebar -->

	</div><!-- End Content row -->

<?php get_footer(); ?>