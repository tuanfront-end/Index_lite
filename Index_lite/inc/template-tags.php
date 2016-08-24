<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package eden
 */

if ( ! function_exists( 'eden_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function eden_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string1 = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';

		$time_string2 = '<time class="entry-month published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string1 = sprintf( $time_string1,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date('d') ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$time_string2 = sprintf( $time_string2,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date(' M ') ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on1 = sprintf(
		esc_html_x( ' %s', 'post date', 'eden' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string1 . '</a>'
	);
	$posted_on2 = sprintf(
		esc_html_x( ' %s', 'post month', 'eden' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string2 . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'eden' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on-d">' . $posted_on1 . '</span>
	      <span class="posted-on-m">' . $posted_on2 . '</span>'; // WPCS: XSS OK.

}

function eden_posted_on_2() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date(' M d, Y') ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);


	$posted_on = sprintf(
		esc_html_x( ' %s', 'post date', 'eden' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	echo '<span class="posted-on-d">' . $posted_on . '</span>' ; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'eden_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function eden_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'eden' ) );
		if ( $categories_list && eden_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'eden' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'eden' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( '  /  %1$s', 'eden' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( ' /  Leave a Comment<span class="screen-reader-text"> on %s</span>', 'eden' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	// edit_post_link(
	// 	sprintf(
	// 		/* translators: %s: Name of current post */
	// 		esc_html__( 'Edit %s', 'eden' ),
	// 		the_title( '<span class="screen-reader-text">"', '"</span>', false )
	// 	),
	// 	'<span class="edit-link">',
	// 	'</span>'
	// );
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function eden_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'eden_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'eden_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so eden_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so eden_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in eden_categorized_blog.
 */
function eden_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'eden_categories' );
}
add_action( 'edit_category', 'eden_category_transient_flusher' );
add_action( 'save_post',     'eden_category_transient_flusher' );
