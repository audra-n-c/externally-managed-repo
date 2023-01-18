<?php
/**
 * Custom CSS
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
<<<<<<< HEAD
 * @since Twenty Twenty-One 1.0
=======
 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
 */

/**
 * Generate CSS.
 *
<<<<<<< HEAD
 * @since Twenty Twenty-One 1.0
 *
 * @param string $selector The CSS selector.
 * @param string $style    The CSS style.
 * @param string $value    The CSS value.
 * @param string $prefix   The CSS prefix.
 * @param string $suffix   The CSS suffix.
 * @param bool   $display  Print the styles.
 * @return string
 */
function twenty_twenty_one_generate_css( $selector, $style, $value, $prefix = '', $suffix = '', $display = true ) {
=======
 * @since 1.0.0
 *
 * @param string $selector The CSS selector.
 * @param string $style The CSS style.
 * @param string $value The CSS value.
 * @param string $prefix The CSS prefix.
 * @param string $suffix The CSS suffix.
 * @param bool   $echo Echo the styles.
 *
 * @return string
 */
function twenty_twenty_one_generate_css( $selector, $style, $value, $prefix = '', $suffix = '', $echo = true ) {
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571

	// Bail early if there is no $selector elements or properties and $value.
	if ( ! $value || ! $selector ) {
		return '';
	}

	$css = sprintf( '%s { %s: %s; }', $selector, $style, $prefix . $value . $suffix );

<<<<<<< HEAD
	if ( $display ) {
		/*
=======
	if ( $echo ) {
		/**
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
		 * Note to reviewers: $css contains auto-generated CSS.
		 * It is included inside <style> tags and can only be interpreted as CSS on the browser.
		 * Using wp_strip_all_tags() here is sufficient escaping to avoid
		 * malicious attempts to close </style> and open a <script>.
		 */
		echo wp_strip_all_tags( $css ); // phpcs:ignore WordPress.Security.EscapeOutput
	}
	return $css;
}
