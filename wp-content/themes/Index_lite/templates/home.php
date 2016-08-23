<?php
/*
	Template Name:Home
*/
get_header();
?>
<!-- My Slider here -->
<div class="container-fluid my-slideshow">
	<div class="row top-slideshow">
    	
		<div class="top-slide">
			<?php echo do_shortcode('[slider_shortcode term1="http://www.w3schools.com/w3css/img_la.jpg" term2="Repair your damaged phone." term3="Cheap and Fast." term4="We offer free postage with all mobile phone & tablet repairs. Saving you time and money. Just print the label and send."]' ); ?>

			<?php echo do_shortcode('[slider_shortcode term1="http://www.w3schools.com/w3css/img_ny.jpg" term2="Repair your damaged phone." term3="Cheap and Fast." term4="We offer free postage with all mobile phone & tablet repairs. Saving you time and money. Just print the label and send."]' ); ?>
			
	
			<?php echo do_shortcode('[slider_shortcode term1="http://www.w3schools.com/w3css/img_chicago.jpg" term2="Repair your damaged phone." term3="Cheap and Fast." term4="We offer free postage with all mobile phone & tablet repairs. Saving you time and money. Just print the label and send."]' ); ?>

		</div>
	
    	<div class="slide-control">
			<button  class="prev-slideshow my-btn btn-slide"><i class="fa fa-caret-left" aria-hidden="true"></i></button> &nbsp; 
			<button  class="next-slideshow my-btn btn-slide"><i class="fa fa-caret-right" aria-hidden="true"></i></button>
		</div>
    </div>
</div>
<!--End My slider here -->

<div class="banner-wrap">
 	<div class="container">
 		<div class="row">
 		<!-- 	<div class="col-md-3 banner-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
 				<div class="text-left">
 					<h5><strong>NO FIX, NO FEE</strong></h5>
 					<span>Lorem input dorno sit </span>
 				</div>
 				<div class="icon-right">
 					<i class="fa fa-money" aria-hidden="true"></i>
 				</div>
 			</div> -->
 			<?php echo do_shortcode('[banner_shortcode term0="0.5s" term1="NO FIX, NO FEE" term2="Lorem input dorno sit " term3="money"]' ); ?>

 			<?php echo do_shortcode('[banner_shortcode term1="6 months warrenty" term2="Lorem input dorno sit " term3="calendar-o" term0="1s"]' ); ?>

 			<?php echo do_shortcode('[banner_shortcode term1="Expert repair staff" term2="Lorem input dorno sit " term3="users" term0="1.5s"]' ); ?>
 			<?php echo do_shortcode('[banner_shortcode term1="we are fast" term2="Lorem input dorno sit " term3="tachometer" term0="2s"]' ); ?>
 			

 		</div>
 	</div>
</div>
<!--End My Banner here -->
<div class="first-row">
	<div class="container">
		<div class="row">
			 <div class="col-md-9">
			 	<div class="row">
			 		<?php echo do_shortcode('[first_row_card time="0.5s" term1="http://www.w3schools.com/w3css/img_5terre.jpg" term2="water damage repair" term3="We offer free postage with all mobile phone & tablet repairs. Saving time and money. Just print the label and send." term4="readmore"]' );
					 ?>

					 <?php echo do_shortcode('[first_row_card time="1s" term1="http://www.w3schools.com/w3css/img_monterosso.jpg" term2="water damage repair" term3="We offer free postage with all mobile phone & tablet repairs. Saving time and money. Just print the label and send." term4="readmore"]' );
					 ?>

					 <?php echo do_shortcode('[first_row_card time="1.5s" term1="http://www.w3schools.com/w3css/img_vernazza.jpg" term2="water damage repair" term3="We offer free postage with all mobile phone & tablet repairs. Saving time and money. Just print the label and send." term4="readmore"]' );
					 ?>
			 	</div>
			 </div>
			 <div class="col-md-3 list_firt_row wow fadeInUp" data-wow-duration="2s" data-wow-delay="2s">
			 	<ul>
				 	<?php echo do_shortcode('[first_row_list term1="laptop" term2="mac & pc repair"]'); ?>
				 	<?php echo do_shortcode('[first_row_list term1="tablet" term2="tablet & ipad repair"]'); ?>
				 	<?php echo do_shortcode('[first_row_list term1="gamepad" term2="game system repair"]'); ?>
				 	<?php echo do_shortcode('[first_row_list term1="desktop" term2="LCD tv repair"]'); ?>
				 	<?php echo do_shortcode('[first_row_list term1="music" term2="mp3 & mp4 repair"]'); ?>
				 	<?php echo do_shortcode('[first_row_list term1="ellipsis-v" term2="other electronic"]'); ?>
				</ul>
			 </div>

		</div>
	</div>
</div>
<!--End My First row here -->
<div class="works-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center text-title wow slideInLeft" data-wow-duration="2s" data-wow-delay="0s">
				<h2><?php echo do_shortcode('[works_dark_title term1="Easy way to get your phone repaired"]'); ?></h2>
			</div>
		</div>
		<div class="row works-dark-content">
			<?php echo do_shortcode('[works_dark_card time="2s" term0="" term1="mobile" term2="broken device" term3="f your device breaks, dont panic. We offer a huge range of mobile phone & tablet repair services." term4="01."]'); 
			?>

			<?php echo do_shortcode('[works_dark_card time="1.5s" term0="" term1="envelope" term2="send it to us" term3="We offer free postage with all mobile phone & tablet repairs. Saving you time and money. Just print the label and send." term4="02."]'); 
			?>

			<?php echo do_shortcode('[works_dark_card time="1s" term0="active" term1="wrench" term2="quick fix" term3="Our trained technicians will repair your mobile phone or tablet device quickly & efficiently, keeping you informed all the way." term4="03."]'); 
			?>

			<?php echo do_shortcode('[works_dark_card time="0.5s" term0="" term1="reply" term2="fast return" term3="Choose the delivery method that matches your requirements. We will make sure your repaired device is returned safely." term4="04."]'); 
			?>


		</div>
	</div>
</div>
<!--End My Work-dark here -->
<div class="thirt-row">
	<div class="container">
		<div class="row">
		
			<?php echo do_shortcode('[third_row_shortcode time="0s" term1="android" term2="Android Lolipop" term3="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura."]' );
			 ?>

			 <?php echo do_shortcode('[third_row_shortcode time="0.25s" term1="apple" term2="Apple iOS 8.0" term3="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura."]' );
			 ?>

			 <?php echo do_shortcode('[third_row_shortcode time="0.5s" term1="windows" term2="Windown Phone 10" term3="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura."]' );
			 ?>

			 <?php echo do_shortcode('[third_row_shortcode time="0.75s" term1="mobile" term2="China Express" term3="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura."]' );
			 ?>

			 <?php echo do_shortcode('[third_row_shortcode time="1s" term1="camera-retro" term2="iCamera OS" term3="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura."]' );
			 ?>

			 <?php echo do_shortcode('[third_row_shortcode time="1.25s" term1="desktop" term2="Desktop Systems" term3="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura."]' );
			 ?>
		</div>
	</div>
</div>
<!--End My third_row here -->

<div class="want-shell wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
	<div class="container ">
		<div class="want-shell-wrap">
			<div class="text">
				<h3>Do you want to sell your mobile phone?</h3>
				<span>We can sell your cell phone device in the matter of days for just 10% fee</span>
			</div>
			<div class="button-shell">
				<button class="my-btn">GET A FREE ESTIMATION</button>
			</div>
		</div>
	</div>
</div>
<!--End My Want shell here -->

<div class="blog-div">
	<div class="container  wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0s">
		<div class="row">
			<div class="col-md-12 blog-header">
				<h2>Latest news</h2>
				<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/line.png" alt="">
				<button class="my-btn">MORE POSTS</button>
			</div>
		</div>
		<div class="row blog-content">
			<?php echo do_shortcode('[blog_div_shortcode term1="2"]' ); ?>
		</div>
	</div>
</div>
<!--End My Bog Div here -->


<div class="about-faq">
	<div class="container">
		<div class="row">
			<div class="col-md-6 about-us  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
				<div class="row">
					<div class="col-md-12 about-title">
						<h1>A little something about us</h1>
						<img class="img-responsive" src=" <?php echo get_template_directory_uri(); ?>/images/short-line.png " alt="">
					</div>
					<div class="col-md-12 about-content">
						<div class="row">
							<?php echo do_shortcode('[about_img_shortcode term1="http://www.w3schools.com/w3css/img_avatar3.png"]' ); ?>

							<?php echo do_shortcode('[about_img_shortcode term1="http://www.w3schools.com/w3css/img_avatar3.png"]' ); ?>
						</div>
						<div class="row">
							<div class="col-md-12 about-text">
								<?php echo do_shortcode('[about_text_shortcode term1="Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet. Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. Mauris accumsan elit a est tincidunt mattis.
									<br><br>
                                    žDuis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet. Nam id congue dolor. Donec feugiat hendrerit lorem. Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper."]' ); 
                                ?>
								<br>
								<a href="#" class="read-more">READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end About us -->

			<div class="col-md-6 faq  wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
				<div class="row">
					<div class="col-md-12 faq-tittle">
						<h1>FAQ</h1>
						<img class="img-responsive" src=" <?php echo get_template_directory_uri(); ?>/images/short-line2.png " alt="">
						<button class="my-btn">read more</button>
					</div>
					<div class="col-md-12 faq-wrap">
						  <div class="panel-group" id="accordion">
						    <?php 
						    	echo do_shortcode('[faq_shortcode collapse_id="1" term1="HOW TO MAKE TEXT BIGGER ON THE IPHONE ?" term2="Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." term3="read more"]' );
						     ?>
						     <?php 
						    	echo do_shortcode('[faq_shortcode  collapse_id="2" term1="HOW TO SOLVE SONY XPERIA OVER HEATING PROBLEMS" term2="Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." term3="read more"]' );
						     ?>
						     <?php 
						    	echo do_shortcode('[faq_shortcode  collapse_id="3" term1="RECOVER DELETED PHOTOS AND VIDEOS ON SONY XPERIA ?" term2="Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." term3="read more"]' );
						     ?>
						     <?php 
						    	echo do_shortcode('[faq_shortcode  collapse_id="4" term1="HOW TO SCREENSHOT ON HTC SMARTPHONE?" term2="Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." term3="read more"]' );
						     ?>
						     <?php 
						    	echo do_shortcode('[faq_shortcode  collapse_id="5" term1="THE DIFFERENCE BETWEEN A CRACKED SCREEN & BROKEN LCD..." term2="Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." term3="read more"]' );
						     ?>
						   
						  </div>
					</div>
				</div>
			</div>
			<!-- end FAQ -->
		</div>
	</div>
</div>
<!--End My About us + FAQ here -->
<div class="maps">
	
</div>
<!--End My Maps here -->

<div class="gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-12 gallery-tittle">
				<h1>Gallery before - after</h1>
				<img class="img-responsive" src=" <?php echo get_template_directory_uri(); ?>/images/line.png" alt="">
			</div>
		</div>
		<div class="row  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
			
			<?php echo do_shortcode('[gallery_shortcode term1="https://s3-ap-southeast-1.amazonaws.com/s3fileslive/public/gallery/SamsungGalaxySIIImini45schraeg_24261.jpeg" term2="http://assets.nydailynews.com/polopoly_fs/1.2412291.1445900542!/img/httpImage/image.jpg_gen/derivatives/article_750/galaxy27n-1-web.jpg" term3="water damage repair"]' ); 
			?>

			<?php echo do_shortcode('[gallery_shortcode term1="http://antyweb.pl/wp-content/uploads/2014/04/10844566625_86cc5a2b64_o.jpg" term2="http://itsfreeatlast.com/wp-content/uploads/2015/09/ipadmini_black.jpg" term3="broken screen repair"]' ); 
			?>

			<?php echo do_shortcode('[gallery_shortcode term1="https://s3-ap-southeast-1.amazonaws.com/s3fileslive/public/gallery/SamsungGalaxySIIImini45schraeg_24261.jpeg" term2="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQaidHQZ6wGWZwkcu4WrPB9R2bb1ZoNhgrvCqOHyb3Ylmj1Zk5H" term3="external case repair"]' ); 
			?>
			<?php echo do_shortcode('[gallery_shortcode term1="http://www.mobilekangaroo.com/wp-content/uploads/2016/02/phone-in-water.jpg" term2="http://d2j00gktbpe2bf.cloudfront.net/albums/images/ab1da04a28b060fc20c6f2i250221056/original" term3="broken screen repair"]' ); 
			?>

		</div>
	</div>
</div>
<!--End Gallery here -->

<div class="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center testimo-title  wow slideInLeft" data-wow-duration="2s" data-wow-delay="0s">
				<h1>Testimonials</h1>
			</div>
			<div class="col-md-12 testimonials-slideshow  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
				<!-- button Preview-slide -->
	    		<button  class="prev-slideshow-2 my-btn btn-3"><i class="fa fa-caret-left" aria-hidden="true"></i></button>
	    		<!-- Slide content --> 
	    		<div class="testimonials-slide">
					
					<?php echo do_shortcode('[testimo_slide_shortcode term1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia nostrum aliquid esse ipsum! Fugit at, accusamus reiciendis praesentium unde dicta iste cum natus laborum impedit, quisquam, corporis molestias. Temporibus, modi." term2="Joshep jimenehaz"]' );
					?>
					
					<?php echo do_shortcode('[testimo_slide_shortcode term1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde nobis veniam ab mollitia corporis voluptas, nam ducimus, laboriosam molestias quibusdam? ipsum dolor sit amet, consectetur adipisicing elit. Porro, dolorum!" term2="David Degea"]' );
					?>
					
					<?php echo do_shortcode('[testimo_slide_shortcode term1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non deserunt officia commodi dolore sunt. Doloribus sit ratione perferendis sed. Eveniet cumque quod fugit, aliquam. Sunt ad mollitia commodi consequuntur veritatis, qui velit, fuga aliquam. Incidunt quidem eligendi, eaque voluptates unde." term2="Eden Hazad jimenehaz"]' );
					?>
				</div>
				<!-- button Next-slide -->
				<button  class="next-slideshow-2 my-btn btn-3"><i class="fa fa-caret-right" aria-hidden="true"></i></button>
				
		    </div>
		</div>
	</div>
</div>
<!--End Testimonialz here -->

<div class="partners">
	<div class="container">
		<div class="row">
			<div class="col-md-12 tittle  wow slideInLeft" data-wow-duration="2s" data-wow-delay="0s">
				<h1>Our respected partners</h1>
				<div>
					<img class="img-responsive" width="100%" src=" <?php echo get_template_directory_uri(); ?>/images/line.png" alt="">
				</div>
			</div>
			<div class="col-md-12 partner-wrap  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
				
				
				<div id="owl-demo" class="owl-carousel owl-theme">
				  	 <?php echo do_shortcode('[partners_shortcode term1="http://localhost/august2016_2/wp-content/themes/Index_lite/images/1.png"]' ); ?>


					  <?php echo do_shortcode('[partners_shortcode term1="http://localhost/august2016_2/wp-content/themes/Index_lite/images/2.png"]' ); ?>

					  <?php echo do_shortcode('[partners_shortcode term1="http://localhost/august2016_2/wp-content/themes/Index_lite/images/3.png"]' ); ?>

					  <?php echo do_shortcode('[partners_shortcode term1="http://localhost/august2016_2/wp-content/themes/Index_lite/images/4.png"]' ); ?>

					  <?php echo do_shortcode('[partners_shortcode term1="http://localhost/august2016_2/wp-content/themes/Index_lite/images/5.png"]' ); ?>

				</div>
				
			</div>
		</div>
	</div>
</div>
<!--End Partners here -->

<div class="counter">
	<div class="container counter-sub  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s">
		<div class="row wrapper">
			
			<?php echo do_shortcode('[counter_shortcode term1="2427" term2="1536" term3="1440"  term4="41472"]' ); ?>
		</div>
	</div>
</div>

<!--End Counter here -->



<?php
get_footer();
