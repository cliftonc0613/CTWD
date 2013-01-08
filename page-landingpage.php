<?php
/**
 * Template Name: Home Landing Page
 * Description: A Page Template without a sidebar
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.2.0
 */

get_header(blank); ?>

	<!-- Row for main content area -->
	<div class="LPcontainer">
		
			<div class="row">
				<div class="twelve columns">
					<h2 class="text-center orange"><?php the_title(); ?></h2></div>
				<div class="twelve columns">
					<div class="six columns 100op">
						<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('landing_left')) : else : ?>
							<p><strong>Widget Ready</strong></p>
							<p>This left_column is widget ready! Add one in the admin panel.</p>
						<?php endif; ?>	
					</div> <!-- End First .Six .Column -->
					
					
					<div class="six columns">
						<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('landing_right')) : else : ?>
							<p><strong>Widget Ready</strong></p>
							<p>This left_column is widget ready! Add one in the admin panel.</p>
						<?php endif; ?>			
					</div> <!-- End Secound .Six .Column -->
				</div><!-- End .Twelve .Column -->
					
			</div><!-- End .Row -->
	</div>

<?php get_footer(landingpage); ?>