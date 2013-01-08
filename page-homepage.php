<?php
/**
 * Template Name: HomePage 
 * Description: A Page Template without a sidebar
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.2.0
 */

get_header(); ?>

	<!-- Row for main content area -->
		<div class="show-for-small orbitBG">
			<div class="row">
				<img src="http://cliftontcanady.com/ctwd/files/2013/01/mobileHEADER.jpg" />
			</div>
		</div>

        <div class="hide-for-small orbitBG">
		<?php
		    /**
		     * Check for the responsive slider plugin
		     */
		    if ( class_exists( 'REQ_Orbit' ) ) : 
		?>
			
            <div class="row">
				<div class="twelve columns">
					<div class=" ">
                <?php
				    /**
				     * Use the shortcode to create the slider
				     */
				    echo do_shortcode('[orbit]');
				?>
					</div>
                </div>
			</div>
        </div>
		<?php endif; ?>
		 <!-- Third Band (Image Right with Text) -->

		<div id="column_wrapper" class="row">

			<div class="eight columns">

				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('left_feature')) : else : ?>
					<h3><strong>Feature Left Widget Ready</strong></h3>
					<p>This left_feature is widget ready! Add one in the admin panel.</p>
				<?php endif; ?>
			</div>

			<div class="four columns">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('right_feature')) : else : ?>
					<h3><strong>Feature Right Widget Ready</strong></h3>
					<p>This right_feature is widget ready! Add one in the admin panel.</p>
				<?php endif; ?>

			</div>

</div>
	<div id="column_wrapper" class="row">
		
	        <div class="four  columns">
	        	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('left_column')) : else : ?>
					<h3><strong>Widget Ready</strong></h3>
					<p>This left_column is widget ready! Add one in the admin panel.</p>
				<?php endif; ?>
	        </div>

	        <div class="four columns">
	        	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('center_column')) : else : ?>
					<h3><strong>Widget Ready</strong></h3>
					<p>This center_column is widget ready! Add one in the admin panel.</p>
				<?php endif; ?>
	        </div>

	        <div class="four columns">
	        	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('right_column')) : else : ?>
					<h3><strong>Widget Ready</strong></h3>
					<p>This right_column is widget ready! Add one in the admin panel.</p>
				<?php endif; ?>
	        </div>

	</div><!-- End Content row -->

<?php get_footer(); ?>