<?php
/**
 * The template for displaying all single posts.
 *
 * This is the template that displays all single posts by default.
 * Please note that this is the WordPress construct of posts
 * and that other 'posts' on your WordPress site will use a
 * different template.
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.3.0
 */

get_header(); ?>

	<!-- Row for main content area -->
	
		<div class="page-title hide-for-small" >
            <div class="row">
                <div class="twelve columns">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </div>
                
        </div>
            <div class="bottom-padding">
            </div>
        </div>
        <div class="page-title-medium-down show-for-small" >
        <div class="row">
                <div class="twelve columns">
                    <h3 class="entry-title"><?php the_title(); ?></h3>
                </div>
                
        </div>
            <div class="bottom-padding">
            </div>
        </div>
		<hr class="carved" />
    <div id="content" class="row">
		<div id="main" class="eight columns" role="main">

			<div class="post-box">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

					<?php required_single_content_nav( 'nav-below' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; ?>

			</div>

		</div><!-- /#main -->

		<aside id="sidebar" class="four columns" role="complementary">

			<div class="sidebar-box">

				<?php get_sidebar(); ?>

			</div>

		</aside><!-- /#sidebar -->

	</div><!-- End Content row -->

<?php get_footer(); ?>