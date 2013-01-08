<?php
/**
 * Template Name: Landing Page 
 * Description: A Page Template without a sidebar
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.2.0
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			
			<div class="six columns">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('LP_left_feature')) : else : ?>
					<h3><strong>Landing Page Left Widget Ready</strong></h3>
					<p>This LP_left_feature is widget ready! Add one in the admin panel.</p>
				<?php endif; ?>			
			</div> <!-- End Secound Column -->
	
	
			<div class="six columns">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('LP_right_feature')) : else : ?>
					<h3><strong>Landing Page Right Widget Ready</strong></h3>
					<p>This LP_right_feature is widget ready! Add one in the admin panel.</p>
				<?php endif; ?>				
			</div> 
			<!-- End Secound Column -->
				
		</div>
	</div>

<?php get_footer(); ?>