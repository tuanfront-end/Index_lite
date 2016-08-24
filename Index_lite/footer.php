<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eden
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-12 col-xs-12 logo-foot">
						<?php eden_logo(); ?>
						<br>
						<?php eden_des_footer(); ?>
						<nav id="site-navigation" class="social-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_id' => 'social-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>

					<div class="col-md-7 col-sm-12 col-xs-12 foot-nav">
						<nav id="site-navigation" class="footer-navigation" role="navigation">
							<span>navigation</span>
							<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
						</nav><!-- #site-navigation -->

						<nav id="site-navigation" class="service-navigation" role="navigation">
							<span>service</span>
							<?php wp_nav_menu( array( 'theme_location' => 'service', 'menu_id' => 'service-menu' ) ); ?> 
						</nav><!-- #site-navigation -->
						
						<nav class="">
							<span>contact info</span>
							<?php eden_contact_footer(); ?>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<div class="coppy-footer">
			<div class="container">
				<?php eden_bottom_footer(); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
