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
				<span class="name-page"> <?php wp_title("");  ?> </span>
				<?php 
				the_field('Page_des');
				echo get_field('page_description');
				echo get_field('page_des');
				echo do_shortcode('[acf field="Page_des" ]' );

			?>
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
						
						<?php
						if ( have_posts() ) :
				
							if ( is_home() && ! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
							<?php
							endif;
				
							/* Start the Loop */
							while ( have_posts() ) : the_post();
				
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
				
							endwhile;
				
							?>
							<div class="post-nav">
								<?php echo the_posts_navigation2(); ?>
							</div>
							<?php
				
						else :
				
							get_template_part( 'template-parts/content', 'none' );
				
						endif; 
						?>
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
