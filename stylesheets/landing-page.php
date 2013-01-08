<?php
/**
 * Template Name: Landing Page 
 * Description: A Page Template without a sidebar
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.2.0
 */
?>

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>Page Title</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/foundation.css">
	<link rel="stylesheet" href="stylesheets/social_foundicons.css">
	<link rel="stylesheet" href="stylesheets/landing-page.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>

	<!-- container -->
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
	<!-- container -->




	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/modernizr.foundation.js"></script>
	<script src="javascripts/foundation.js"></script>
	<script src="javascripts/app.js"></script>

</body>
</html>