<?php
/**
 * Custom template tags for this theme
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
<<<<<<< HEAD
 * @since Twenty Twenty-One 1.0
=======
 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
 */

if ( ! function_exists( 'twenty_twenty_one_posted_on' ) ) {
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
	 *
	 * @return void
	 */
	function twenty_twenty_one_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() )
		);
		echo '<span class="posted-on">';
		printf(
<<<<<<< HEAD
			/* translators: %s: Publish date. */
=======
			/* translators: %s: publish date. */
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
			esc_html__( 'Published %s', 'twentytwentyone' ),
			$time_string // phpcs:ignore WordPress.Security.EscapeOutput
		);
		echo '</span>';
	}
}

if ( ! function_exists( 'twenty_twenty_one_posted_by' ) ) {
	/**
	 * Prints HTML with meta information about theme author.
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
	 *
	 * @return void
	 */
	function twenty_twenty_one_posted_by() {
		if ( ! get_the_author_meta( 'description' ) && post_type_supports( get_post_type(), 'author' ) ) {
			echo '<span class="byline">';
			printf(
<<<<<<< HEAD
				/* translators: %s: Author name. */
=======
				/* translators: %s author name. */
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
				esc_html__( 'By %s', 'twentytwentyone' ),
				'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . esc_html( get_the_author() ) . '</a>'
			);
			echo '</span>';
		}
	}
}

if ( ! function_exists( 'twenty_twenty_one_entry_meta_footer' ) ) {
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 * Footer entry meta is displayed differently in archives and single posts.
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
	 *
	 * @return void
	 */
	function twenty_twenty_one_entry_meta_footer() {

		// Early exit if not a post.
		if ( 'post' !== get_post_type() ) {
			return;
		}

		// Hide meta information on pages.
		if ( ! is_single() ) {

			if ( is_sticky() ) {
				echo '<p>' . esc_html_x( 'Featured post', 'Label for sticky posts', 'twentytwentyone' ) . '</p>';
			}

			$post_format = get_post_format();
			if ( 'aside' === $post_format || 'status' === $post_format ) {
				echo '<p><a href="' . esc_url( get_permalink() ) . '">' . twenty_twenty_one_continue_reading_text() . '</a></p>'; // phpcs:ignore WordPress.Security.EscapeOutput
			}

			// Posted on.
			twenty_twenty_one_posted_on();

			// Edit post link.
			edit_post_link(
				sprintf(
<<<<<<< HEAD
					/* translators: %s: Post title. Only visible to screen readers. */
=======
					/* translators: %s: Name of current post. Only visible to screen readers. */
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span><br>'
			);

			if ( has_category() || has_tag() ) {

				echo '<div class="post-taxonomies">';

<<<<<<< HEAD
				$categories_list = get_the_category_list( wp_get_list_item_separator() );
				if ( $categories_list ) {
					printf(
						/* translators: %s: List of categories. */
=======
				/* translators: used between list items, there is a space after the comma. */
				$categories_list = get_the_category_list( __( ', ', 'twentytwentyone' ) );
				if ( $categories_list ) {
					printf(
						/* translators: %s: list of categories. */
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
						'<span class="cat-links">' . esc_html__( 'Categorized as %s', 'twentytwentyone' ) . ' </span>',
						$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}

<<<<<<< HEAD
				$tags_list = get_the_tag_list( '', wp_get_list_item_separator() );
				if ( $tags_list ) {
					printf(
						/* translators: %s: List of tags. */
=======
				/* translators: used between list items, there is a space after the comma. */
				$tags_list = get_the_tag_list( '', __( ', ', 'twentytwentyone' ) );
				if ( $tags_list ) {
					printf(
						/* translators: %s: list of tags. */
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
						'<span class="tags-links">' . esc_html__( 'Tagged %s', 'twentytwentyone' ) . '</span>',
						$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}
				echo '</div>';
			}
		} else {

			echo '<div class="posted-by">';
			// Posted on.
			twenty_twenty_one_posted_on();
			// Posted by.
			twenty_twenty_one_posted_by();
			// Edit post link.
			edit_post_link(
				sprintf(
<<<<<<< HEAD
					/* translators: %s: Post title. Only visible to screen readers. */
=======
					/* translators: %s: Name of current post. Only visible to screen readers. */
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			echo '</div>';

			if ( has_category() || has_tag() ) {

				echo '<div class="post-taxonomies">';

<<<<<<< HEAD
				$categories_list = get_the_category_list( wp_get_list_item_separator() );
				if ( $categories_list ) {
					printf(
						/* translators: %s: List of categories. */
=======
				/* translators: used between list items, there is a space after the comma. */
				$categories_list = get_the_category_list( __( ', ', 'twentytwentyone' ) );
				if ( $categories_list ) {
					printf(
						/* translators: %s: list of categories. */
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
						'<span class="cat-links">' . esc_html__( 'Categorized as %s', 'twentytwentyone' ) . ' </span>',
						$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}

<<<<<<< HEAD
				$tags_list = get_the_tag_list( '', wp_get_list_item_separator() );
				if ( $tags_list ) {
					printf(
						/* translators: %s: List of tags. */
=======
				/* translators: used between list items, there is a space after the comma. */
				$tags_list = get_the_tag_list( '', __( ', ', 'twentytwentyone' ) );
				if ( $tags_list ) {
					printf(
						/* translators: %s: list of tags. */
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
						'<span class="tags-links">' . esc_html__( 'Tagged %s', 'twentytwentyone' ) . '</span>',
						$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}
				echo '</div>';
			}
		}
	}
}

if ( ! function_exists( 'twenty_twenty_one_post_thumbnail' ) ) {
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
	 *
	 * @return void
	 */
	function twenty_twenty_one_post_thumbnail() {
		if ( ! twenty_twenty_one_can_show_post_thumbnail() ) {
			return;
		}
		?>

		<?php if ( is_singular() ) : ?>

			<figure class="post-thumbnail">
				<?php
<<<<<<< HEAD
				// Lazy-loading attributes should be skipped for thumbnails since they are immediately in the viewport.
				the_post_thumbnail( 'post-thumbnail', array( 'loading' => false ) );
=======
				// Thumbnail is loaded eagerly because it's going to be in the viewport immediately.
				the_post_thumbnail( 'post-thumbnail', array( 'loading' => 'eager' ) );
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
				?>
				<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
					<figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
				<?php endif; ?>
			</figure><!-- .post-thumbnail -->

		<?php else : ?>

			<figure class="post-thumbnail">
				<a class="post-thumbnail-inner alignwide" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
					<?php the_post_thumbnail( 'post-thumbnail' ); ?>
				</a>
				<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
					<figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
				<?php endif; ?>
<<<<<<< HEAD
			</figure><!-- .post-thumbnail -->
=======
			</figure>
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571

		<?php endif; ?>
		<?php
	}
}

if ( ! function_exists( 'twenty_twenty_one_the_posts_navigation' ) ) {
	/**
	 * Print the next and previous posts navigation.
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
	 *
	 * @return void
	 */
	function twenty_twenty_one_the_posts_navigation() {
<<<<<<< HEAD
		the_posts_pagination(
			array(
				'before_page_number' => esc_html__( 'Page', 'twentytwentyone' ) . ' ',
=======
		$post_type      = get_post_type_object( get_post_type() );
		$post_type_name = '';
		if (
			is_object( $post_type ) &&
			property_exists( $post_type, 'labels' ) &&
			is_object( $post_type->labels ) &&
			property_exists( $post_type->labels, 'name' )
		) {
			$post_type_name = $post_type->labels->name;
		}

		the_posts_pagination(
			array(
				/* translators: There is a space after page. */
				'before_page_number' => esc_html__( 'Page ', 'twentytwentyone' ),
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ),
<<<<<<< HEAD
					wp_kses(
						__( 'Newer <span class="nav-short">posts</span>', 'twentytwentyone' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
=======
					sprintf(
						/* translators: %s: The post-type name. */
						esc_html__( 'Newer %s', 'twentytwentyone' ),
						'<span class="nav-short">' . esc_html( $post_type_name ) . '</span>'
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
					)
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
<<<<<<< HEAD
					wp_kses(
						__( 'Older <span class="nav-short">posts</span>', 'twentytwentyone' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
=======
					sprintf(
						/* translators: %s: The post-type name. */
						esc_html__( 'Older %s', 'twentytwentyone' ),
						'<span class="nav-short">' . esc_html( $post_type_name ) . '</span>'
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
					),
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' )
				),
			)
		);
	}
}
