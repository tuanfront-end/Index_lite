<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package eden
 */

get_header(); 

?>
<div class="container-fluid">
	<div class="container top-content-area">
		<div class="page-name">
				<span class="name-page"> <?php wp_title("");  ?> </span> <br>
				<span class="page-des"><?php echo get_field('page_description');?>	</span>
		</div>

	</div>
</div>
<div class="container-fluid breadcrumbs-wrap">
	<div class="row breadcrumbs-area">
		<div class="container">
			<div class="breadcrumbs">
				<a href=" <?php bloginfo('url' ); ?> ">Home</a>
				<a href="#"><?php  wp_title( $sep = '&raquo;', $display = true, $seplocation = '' )  ?> </a>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid page-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						
						
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<!--End Content area -->

			<div class="col-md-3 sidebar">
				<?php get_sidebar(); ?>
			</div>
			<!--End Sidebar  AREA -->
		</div>
	</div>
</div>
	


<?php
get_footer();
