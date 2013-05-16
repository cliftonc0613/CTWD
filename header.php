<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package required+ Starter
 * @since required+ Starter 0.1.0
 */
?><!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/images/devices/apple-touch-icon-iphone.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/devices/apple-touch-icon-iphone.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/devices/apple-touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/images/devices/apple-touch-icon-ipad.png" />
	<link rel="author" href="https://plus.google.com/117383983759489221379/posts" />
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body <?php body_class(); ?>>

			<!-- Row for blog navigation -->
			<!-- START: top-bar -->
            <!-- <div class="contain-to-grid"> // enable to contain to grid -->
                <nav class="top-bar">
                    <ul>
                        <li class="name"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://cliftontcanady.com/ctwd/files/2013/01/CT-WebDesign-65x65.png" /> <?php bloginfo( 'name' ); ?></h1></li>
                        <li class="toggle-topbar"><a href="#"></a></li>
                    </ul>
                    <section>
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'depth' => 0,
                            'items_wrap' => '<ul class="right">%3$s</ul>',
                            'fallback_cb' => 'required_menu_fallback', // workaround to show a message to set up a menu
                            'walker' => new REQ_Foundation_Walker( array(
                                'in_top_bar' => true,
                                'item_type' => 'li'
                            ) ),
                        ) );
                    ?>
                    </section>
                </nav>
            <!-- </div> -->
            <!-- END: top-bar -->
	<!-- Start the main container -->
	<div id="container" class="container" role="document">
		<?php
			/**
			 * Include the Foundation Top Bar
			 *
			 * It uses the same navigation as nav.php
			 * so you might want to use a different navigation
			 * here.
			 */
			if ( is_page_template( 'page-templates/off-canvas-page.php' ) ) {
				get_template_part('nav', 'top-bar');
			}
		?>

		
		<div class="row">
			<header class="twelve columns required-header" role="banner">
				<div class="row">
				
				</div>
				<?php
					/**
					 * Include the default navigation
					 *
					 * You could easily do something like:
					 * if ( is_front_page() ) {
					 * 	get_template_part( 'nav', 'front-page' ); // nav-front-page.php
					 * } else {
					 * 	get_template_part( 'nav' );	// nav.php
					 * }
					 *
					 *	if ( ! is_page_template( 'page-templates/off-canvas-page.php' ) ) {
					 *		get_template_part( 'nav' );
					 *	}
                     */
				?>
                     
				<?php
					/**
					 * Include our custom-header.php
					 *
					 * Used with the header image stuff.
					 */
					//get_template_part( 'custom-header' );
				?>
			</header>
		</div><!-- // header.php -->