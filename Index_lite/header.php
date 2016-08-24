<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eden 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'eden'); ?></a>
	
	<header id="masthead" class="site-header" role="banner">

		<div class="head-wellcome" > 
			<div class="container">
				<div class="top-text-1">
					<span>Wellcome to our land oppoturnnets</span>
				</div>
				
				<nav class="top-menu-1">
					<ul>
						<li><a href="#">Carrers</a></li>
						<li><a href="#">Extras</a></li>
						<li><a href="#">Privacy Policy</a></li>	
					</ul>
				</nav>
			</div>
		</div>

		<div class="site-branding">
			<div class="container">
				<div class="logo-top">
					<?php
						eden_logo();
						
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php// echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
					endif; ?>
				</div>
				<div class="branding-top">
					<nav>
						<ul>
							 <?php 
							 	echo do_shortcode('[tinhtong term1="headphones" term2="Live Help" term3="1-888-112-8376"]' );
							  ?>
							  <?php 
							 	echo do_shortcode('[tinhtong term1="clock-o" term2="Opening Time" term3="08.00 - 18.00"]' );
							  ?>
							  <?php 
							 	echo do_shortcode('[tinhtong term1="envelope-o" term2="Emai Us" term3="info@cargopress.com"]' );
							  ?>
							
							<li>
								<button class="my-btn">REQUEST A QUOTE</button>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div><!-- .site-branding -->

		
		<div class="navigation-container-wrap">
			<div class="container">
				<div class="navigation-container">
					<div class="eden-navigation-main left">
						<nav id="" class="main-navigation" role="">
							<button class="eden_menu-toggle my-btn">Menu</button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
					
					<div class="eden-navigation-social-top right">
						<nav id="site-navigation" class="social-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_id' => 'social-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div><!-- .Container for Navigation-top -->
		</div>
		
		

	</header><!-- #masthead -->

	<div id="content" class="site-content">
	