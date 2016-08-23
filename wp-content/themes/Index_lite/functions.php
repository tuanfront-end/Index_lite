<?php
/**
 * eden functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package eden
 */
// @Khai bao hang gia tri 
	// @THEMW_URL = lay url cua theme
	// @CORE = lay url thu muc /core
define('THEMW_URL', get_stylesheet_directory());
define('CORE', THEMW_URL . '/core');

// @Nhung file /core/init.php

require_once(CORE . '/init.php');


if ( ! function_exists( 'eden_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function eden_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on eden, use a find and replace
	 * to change 'eden' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'eden', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );


	// Add Post format for THeme
	add_theme_support('post-formats', array(
		'link',
		'aside',
		'audio',
		'gallery',
		'video',
		'image',
		'chat',
		'status',
		'quote'
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'eden' ),
	) );
	
	register_nav_menus( array(
		'social' => esc_html__( 'Social', 'eden' ),
	) );

	
	register_nav_menus( array(
		'footer' => esc_html__( 'Footer', 'eden' ),
	) );
	register_nav_menus( array(
		'service' => esc_html__( 'Service', 'eden' ),
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'eden_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'eden_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function eden_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'eden_content_width', 640 );
}
add_action( 'after_setup_theme', 'eden_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function eden_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'eden' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'eden' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'eden_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function eden_scripts() {
	

	wp_enqueue_style( 'eden-style', get_stylesheet_uri() );
	wp_enqueue_script( 'eden-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );  /*add Navigation Js */
	
	wp_enqueue_script( 'eden-carousel-js', get_template_directory_uri() . '/js/owl.carousel.js', array(), 'jquery', true ); /*add Carousel Js */
	wp_enqueue_script( 'eden-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), 'jquery', true ); /*add Bootstrap Js */
	wp_enqueue_script( 'eden-wow-js', get_template_directory_uri() . '/js/wow.js', array(), 'jquery', true ); /*add wow Js */
	wp_enqueue_script( 'eden-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'eden-customize-js', get_template_directory_uri() . '/js/customizer.js', array(), '20151215', true );  /*add Navigation Js */
	

	wp_enqueue_style( 'eden-style-carousel',  get_template_directory_uri().'/less/owl.carousel.css' ); /*add Carousel CSS */
	wp_enqueue_style( 'eden-style-carousel-theme', get_template_directory_uri().'/less/owl.theme.css' ); /*add Carousel CSS */
	wp_enqueue_style( 'eden-fontawesome', get_template_directory_uri().'/css/font-awesome.css' ); /*add Font awesome CSS */
	wp_enqueue_style( 'eden-animate', get_template_directory_uri().'/css/animate.css' ); /*add animated CSS */

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eden_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * My shortcodes in here________________________
 */

 // Short code for header textarea-callus
function create_shortcode_tinhtong($args, $content) {
        return ' <li><span><i class="fa fa-'.$args['term1'].' aria-hidden="true"></i> '.$args['term2'].'</span><br><strong>'.$args['term3'].'</strong></li>' ;
}
add_shortcode( 'tinhtong', 'create_shortcode_tinhtong' );

 // Short code for First-row-card
 function create_shortcode_eden_first_row($args, $content){
 	return '
		<div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="'.$args['time'].'">
				<header>
					<img src=" '.$args['term1'].' " alt="">
				</header>
				<div class="card-container">
					<h4>'.$args['term2'].'</h4>
					<span>
						'.$args['term3'].'
					</span> <br><br>
					<a href="">'.$args['term4'].' <i class="fa fa-caret-right" aria-hidden="true"></i></a>
				</div>
			</div>
 	';
 }
 add_shortcode( 'first_row_card', 'create_shortcode_eden_first_row' );

 // Short code for First_row_List_Li
function create_shortcode_eden_first_row_list($args, $content) {
        return ' <li><span><i class="fa fa-'.$args['term1'].' aria-hidden="true"></i> '.$args['term2'].'</span></li>' ;
}
add_shortcode( 'first_row_list', 'create_shortcode_eden_first_row_list' );


// Shortcode for works-dark-title
function create_shortcode_eden_works_dark_title($args, $content){
	return $args['term1'];
}
 add_shortcode( 'works_dark_title', 'create_shortcode_eden_works_dark_title' );
 // Short code for Works-Dark-card
 function create_shortcode_eden_works_dark_card($args, $content){
 	return '
		<div class="col-md-3 works-card wow slideInLeft" data-wow-duration="2s" data-wow-delay="'.$args['time'].'">
			<div class="wrap-works-card '.$args['term0'].'">
				<header>
					<i class="fa fa-'.$args['term1'].'" aria-hidden="true"></i> <span>'.$args['term2'].'</span>
				</header>
				<div class="card-content">
					<span>
						'.$args['term3'].'
					</span>
				</div>
				<footer>
					<span>'.$args['term4'].'</span>
				</footer>
			</div>
		</div>
 	';
 }
 add_shortcode( 'works_dark_card', 'create_shortcode_eden_works_dark_card' );

// Short code for Thirt Row Here
 function create_shortcode_eden_thirt_row($args, $content){
 	return '
		<div class="col-md-4 thirt-row-content wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="'.$args['time'].'" >
				<div class="icon">
					<i class="fa fa-'.$args['term1'].'" aria-hidden="true"></i>
				</div>
				<div class="thirt-row-text">
					<h3>'.$args['term2'].'</h3>
					<span>
						'.$args['term3'].'
					</span>
				</div>
			</div>
 	';
 }
 add_shortcode( 'third_row_shortcode', 'create_shortcode_eden_thirt_row' );

// Short code for Blog area Here
 function create_shortcode_eden_blog_div($args, $content){
 	$query = new WP_Query(
				array(
					'post_type' => 'post',
					'posts_per_page' => $args['term1']
					)
			);

 	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>	
		<div class="col-md-6 blog-card">
		<div class="card-images">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="card-content">
			<header>
				<?php 
					the_title( '<span><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a><span>' );
				?>
			</header>
			<footer>
				<span><?php eden_posted_on_2(); ?></span>
			</footer>
		</div>
	</div>

	<?php endwhile; endif; 
 }
 add_shortcode( 'blog_div_shortcode', 'create_shortcode_eden_blog_div' );

 // Short code for about-img area Here
 function create_shortcode_eden_about_img($args, $content){
 	return '
		<div class="col-md-6 about-img">
			<img class="img-responsive" src="'.$args['term1'].'" alt="">
		</div>
 	';
 }
 add_shortcode( 'about_img_shortcode', 'create_shortcode_eden_about_img' );

// Short code for about-img area Here
 function create_shortcode_eden_about_text($args, $content){
 	return '
		<span>
			'.$args['term1'].'
		</span>
 	';
 }
 add_shortcode( 'about_text_shortcode', 'create_shortcode_eden_about_text' );


// Short code for about-img area Here
 function create_shortcode_eden_faq($args, $content){
 	return '
		<div class="panel panel-default">
		      <div class="panel-heading">
		        <h6 class="panel-title">
		          	<a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$args['collapse_id'].'">
						'.$args['term1'].'
		          	</a>
		        </h6>
		      </div>
		      <div id="collapse'.$args['collapse_id'].'" class="panel-collapse collapse ">
			        <div class="panel-body">
			        	'.$args['term2'].'
			        <br>
					 <a href="#" class="read-more">'.$args['term3'].' <i class="fa fa-caret-right" aria-hidden="true"></i></a>
			        </div>
		      </div>
		    </div>
 	';
 }
 add_shortcode( 'faq_shortcode', 'create_shortcode_eden_faq' );


 // Short code for Gallery Before-after
 function create_shortcode_eden_gallery($args, $content){
 	return '
		<div class="col-md-3 gallery-content">
			<div class="gallery-img">
				<img calss="img-responsive" src="'.$args['term1'].'" alt="">
			
				<img calss="img-responsive" src="'.$args['term2'].'" alt="">
			</div>
		
			<div class="gallery-sub">
				<span>'.$args['term3'].'</span>
			</div>
		</div>
 	';
 }
 add_shortcode( 'gallery_shortcode', 'create_shortcode_eden_gallery' );

// Short code for Testimonials Slider
 function create_shortcode_eden_testimo_slide($args, $content){
 	return '
		<div class="mySlides_2 animated fadeInLeft">
		  <span>'.$args['term1'].'</span>
		   <h4 class="author">'.$args['term2'].'</h4>
		</div>
 	';
 }
 add_shortcode( 'testimo_slide_shortcode', 'create_shortcode_eden_testimo_slide' );

 // Short code for Partnres Carousel
 function create_shortcode_eden_partners($args, $content){
 	return '
		<div class="item">
		  	<img class="img-responsive" src="'.$args['term1'].'" alt="">
		</div>
 	';
 }
 add_shortcode( 'partners_shortcode', 'create_shortcode_eden_partners' );

  // Short code for Counter
 function create_shortcode_eden_counter($args, $content){
 	return '
		<div class="col-md-3 counter col_fourth">
			<div class="count-border border-right">
				<strong class="timer count-title" id="count-number" data-to="'.$args['term1'].'" data-speed="1500"></strong> <br>
				<span>Repaired glasses</span>
			</div>
		</div>
		<div class="col-md-3 counter col_fourth">
			<div class="count-border border-right">
				<strong class="timer count-title" id="count-number" data-to="'.$args['term2'].'" data-speed="2500"></strong><br>
				<span>Water Damaged Repairs</span>
			</div>
		</div>
		<div class="col-md-3 counter col_fourth">
			<div class="count-border border-right">
				<strong class="timer count-title" id="count-number" data-to="'.$args['term3'].'" data-speed="3000"></strong><br>
				<span>Unlocked Phones</span>
			</div>
		</div>
		<div class="col-md-3 counter col_fourth">
			<div class="count-border">
				<strong  class="timer count-title" id="count-number" data-to="'.$args['term4'].'" data-speed="3500"></strong><br>	
				<span>Happy Customers</span>
			</div>
		</div>
 	';
 }
 add_shortcode( 'counter_shortcode', 'create_shortcode_eden_counter' );


 // Short code My Slider 
 function create_shortcode_eden_slider($args, $content){
 	return '
		<div class="mySlides ">
		  <img id="img-sl" class="line-top animated fadeIn" data-wow-duration="2s" data-wow-delay="0s" src=" '.$args['term1'].' " alt="">
		  <div class="sub-slide">
	    	<div class="sub-slide-content">
	    		<div class="far-far-slide">
	    			
	    			<h1 id="h1-sl" class=" animated fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0s">'.$args['term2'].'
				    </h1>
				    <h1 id="h12-sl" class="animated lightSpeedIn" data-wow-duration="2s" data-wow-delay="1s"><strong>'.$args['term3'].'</strong></h1>
	    			<span id="span-sl" class="animated fadeInDown" data-wow-duration="2s" data-wow-delay="0s">'.$args['term4'].'</span><br>
	    			<button class="my-btn btn-3 mt20 animated fadeInLeft">REQUEST A QUOTE</button>
	    			<button class="my-btn c-text animated fadeInRight">GET IN TOUCH</button>
	    		</div>
		    </div>
		  </div>
		</div>
 	';
 }
 add_shortcode( 'slider_shortcode', 'create_shortcode_eden_slider' );

// Short code Banner
 function create_shortcode_eden_banner($args, $content){
 	return '
		<div class="col-md-3 banner-item wow fadeInUp" data-wow-duration="2s" 
		data-wow-delay="'.$args['term0'].'">
			<div class="text-left">
				<h5><strong>'.$args['term1'].'</strong></h5>
				<span>'.$args['term2'].'</span>
			</div>
			<div class="icon-right">
				<i class="fa fa-'.$args['term3'].'" aria-hidden="true"></i>
			</div>
		</div>
 	';
 }
 add_shortcode( 'banner_shortcode', 'create_shortcode_eden_banner' );


// Short code Opentime-Contact Page
 function create_shortcode_eden_opening($args, $content){
 	return '
		<nav class="open-time">
			<h2>Opening Times</h2>
			<ul>
				
				<li class="active">
					<span>Monday</span>
					<span>'.$args['term1'].'</span>
				</li>
				<li>
					<span>Tuesday</span>
					<span>'.$args['term2'].'</span>
				</li>
				<li>
					<span>Wednesday</span>
					<span>'.$args['term3'].'</span>
				</li>
				<li>
					<span>Thusday</span>
					<span>'.$args['term4'].'</span>
				</li>
				<li>
					<span>Friday</span>
					<span>'.$args['term5'].'</span>
				</li>
				<li>
					<span>Saturday</span>
					<span>'.$args['term6'].'</span>
				</li>
				<li>
					<span>Sunday</span>
					<span>'.$args['term7'].'</span>
				</li>
			</ul>
		</nav>
 	';
 }
 add_shortcode( 'opentime_shortcode', 'create_shortcode_eden_opening' );
 /** My Theme Option Function   **/
function eden_logo(){ ?>
    <a href= " <?php bloginfo('url'); ?> ">
        <?php
            global $tp_options;
        ?>
       <?php if ( $tp_options['logo-on'] == 1 ) : ?>
            <img src="<?php echo $tp_options['logo-image']['url']; ?>">
        <?php endif; ?>
    </a>
	<?php
}
 /** My Theme Option Function   **/
function eden_des_footer(){ ?>
	 <?php
        global $tp_options;
    ?>
   <span>
   	   <?php echo $tp_options['footer-des']; ?>
   </span>
	<?php
}

 /** My Theme Option Function   **/
function eden_contact_footer(){ ?>
	 <?php
        global $tp_options;
    ?>
   	<?php echo $tp_options['contact-info']; ?>
	<?php
}


 /** My Theme Option Function   **/
function eden_bottom_footer(){ ?>
	 <?php
        global $tp_options;
    ?>
   <div class="coppy-footer-wrap">
		<span>
			<?php echo $tp_options['copyright-left']; ?>
		</span>
		
		<div class="bank">
			<?php echo $tp_options['icon-bank']; ?>
			
		</div>

		<span>
			<?php echo $tp_options['copyright-right']; ?>
		</span>
	</div>
	<?php
}


// Navigation post
function the_posts_navigation2( $args = array() ) {
     $navigation = '';
    if ( $GLOBALS['wp_query']->max_num_pages > 1 ) {
      	 $args = wp_parse_args( $args, array(
      	 	'mid_size'           => 1,
            'prev_text'          => _x( '<i class="fa fa-caret-left" aria-hidden="true"></i>', 'previous post',false ),
            'next_text'          => _x( '<i class="fa fa-caret-right" aria-hidden="true"></i>', 'next post' ,false),
            'screen_reader_text' => __( 'Posts navigation' ),
	    ) );
      	  // Make sure we get a string back. Plain is the next best thing.
        if ( isset( $args['type'] ) && 'array' == $args['type'] ) {
                $args['type'] = 'plain';
        }

        // Set up paginated links.
        $links = paginate_links( $args );

   		if ( $links ) {
                $navigation = _navigation_markup( $links, 'pagination', $args['screen_reader_text'] );
        }
	}
	
	    return $navigation;
	
}


