<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the class=container div and all content after
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.1.0
 */
?>
		<?php
			/*
				A sidebar in the footer? Yep. You can can customize
				your footer with three columns of widgets.
			*/
			if ( ! is_404() )
				get_sidebar( 'footer' );
			?>
			<div id="footer" class="row" role="contentinfo">
				<div class="twelve columns">
					<hr class="faded" />
				</div>
				<div class="four columns">
				 Copyright &copy <?php echo date('Y'); ?>. Designed By <a href="<?php echo esc_url( home_url( '/' ) ); ?>">CT Web Design</a>
				</div>
				<div class="eight columns">
					<?php wp_nav_menu( array(
						'theme_location' => 'secondary',
						'container' => false,
						'menu_class' => 'inline-list right',
						'fallback_cb' => false
					) ); ?>
				</div>
			</div>
	</div><!-- Container End -->

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

	<?php wp_footer(); ?>
</body>
</html>