<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package eden
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-area'); ?>>
	<div class="post-top">
		<?php 
			$tp_country = get_post_meta( $post->ID, 'eden_field', true );
			if( $tp_country ) { // kiểm tra xem nó có dữ liệu hay không
	                echo $tp_country;
	            }
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
		
		 ?>
	</div>
	

	<div class="post-content-wrap">
		
		
		<header class="entry-header">
			<?php
			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					
					<?php 
					echo '<span> by <a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a><span>' ;
		
				
					 eden_entry_footer(); 
					 ?>
		
				</div><!-- .entry-meta -->
				<?php
			endif; 
		
			?>
			<div class="title-post">
				<div class="posted-date-time">
					<?php eden_posted_on(); ?>
				</div>
				<?php
				
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				 else :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				endif; 
				?>
			</div>
		
		
		
			
		</header><!-- .entry-header -->
		
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses_post( __( 'Read more %s <i class="fa fa-caret-right" aria-hidden="true"></i>', 'eden' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
				
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eden' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		
		<!-- <footer class="entry-footer">
			<?php //eden_entry_footer(); ?>
		</footer> -->
		<!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
