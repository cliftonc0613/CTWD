<?php
/**
 * Template Name Posts: Website Launch
 * The template for displaying all Website Launch single posts.
 *
 * This is the template that displays all single posts for 
 * Website Design Launch.
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
		<div class="row">
			<div class="twelve columns hide-for-small">
				<img class="center" src="<?php the_field( "feature_img" ); ?>" >
			</div>
			<div class="twelve columns show-for-small">
				<img  src="<?php the_field( "feature_img" ); ?>" class="center">
			</div>
		</div>
		
    <div id="content">
		<div id="main" class="twelve columns" role="main">
			<div class="row">
				<div class="eight columns">
					<?php the_field( "feature_text" ); ?>
				</div>
				<div class="four columns">
					<div class="panel">
			 		      <center><h4><strong>Languages Used:</strong></h4></center>
					      <?php the_field( "code" ); ?>
					      <hr class="carved" />
					      <center><a class="full-width button " href="<?php the_field( "website_button" ); ?>" target="_blank"><?php the_field( "website_bt" ); ?></a></center>
				    </div>
				</div>
				<div class="eight columns">
					<img src="<?php the_field( "desktop_view" ); ?>">
				</div>
				<div class="four columns">
					<?php the_field( "desktop_text" ); ?>
				</div>
			</div>
			<div class="row" id="name">			
				<div class="four columns">
					<?php the_field( "tablet_mobile_text" ); ?>
				</div>
				
				<div class="four columns">
					<img src="<?php the_field( "tablet_mobile_view" ); ?>">
				</div>
				<div class="four columns">
					<?php the_field( "tablet_mobile_text2" ); ?>
				</div>
			</div>
				
			<div class="row">
				<div class="post-box">
			
								<?php required_single_content_nav( 'nav-below' ); ?>
			
								<?php comments_template( '', true ); ?>
			
							
			
				</div>
			</div>
			</div>
		</div>
		


	</div><!-- End Content row -->

<?php get_footer(); ?>