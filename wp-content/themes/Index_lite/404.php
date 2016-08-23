<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package eden
 */

get_header(); ?>

	<div class="container-fluid page-404">
		<div class="container page-404">
			<div id="primary" class="content-area">
				<main class="site-main text-center">
					<img class="img-responsive" src=" <?php echo get_template_directory_uri(); ?>/images/404.png " alt="">

					<h2>Look like something went wrong</h2>
					<span>Page are looking for is not here</span><br>
					<span>Go <a href="">Home</a> of try to search</span>

					<?php get_search_form(); ?>
				</main>
			</div>
		</div>
	</div>

<?php
get_footer();
