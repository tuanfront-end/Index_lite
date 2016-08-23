<?php
/**
	Template Name:Contact

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

			<div class="col-md-3 sidebar">
				<nav class="contact-info">
					<h2>Contact info</h2>
					<?php eden_contact_footer(); ?>
				</nav>
				<!--End contact-info AREA -->
				<?php echo do_shortcode('[opentime_shortcode term1="8:00 - 16:00"
				term2="8:00 - 16:00" term3="8:00 - 16:00" term4="8:00 - 16:00" term5="8:00 - 16:00"
				term6="8:00 - 16:00" term7="8:00 - 16:00"]' ); ?>
				<!-- End Opentime- Area -->
			</div>
			<!--End Left Sidebar  AREA -->


			<div class="col-md-9">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<div class="maps">
							<h2>Whe you can find us</h2>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386.44929961025383!2d-106.95437114012559!3d39.206664154853954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6234075e91b26982!2sHoliday+Inn+Express+Snowmass+Village!5e0!3m2!1svi!2s!4v1471919880783" width="1000" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="contact-form">
							<?php echo do_shortcode('[contact-form-7 id="95" title="Contact-form"]' ); ?>
						</div>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<!--End Content area -->

			
		</div>
	</div>
</div>
	


<?php
get_footer();
