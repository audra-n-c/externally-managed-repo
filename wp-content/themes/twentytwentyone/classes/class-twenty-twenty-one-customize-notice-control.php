<?php
/**
 * Customize API: Twenty_Twenty_One_Customize_Notice_Control class
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
 * Customize Notice Control class.
 *
<<<<<<< HEAD
 * @since Twenty Twenty-One 1.0
=======
 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
 *
 * @see WP_Customize_Control
 */
class Twenty_Twenty_One_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
	 *
	 * @var string
	 */
	public $type = 'twenty-twenty-one-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @access public
	 *
	 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'twentytwentyone' ); ?></p>
<<<<<<< HEAD
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/twenty-twenty-one/#dark-mode-support', 'twentytwentyone' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'twentytwentyone' ); ?>
			</a></p>
		</div><!-- .notice -->
=======
			<p><a href="https://wordpress.org/support/article/twenty-twenty-one/">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'twentytwentyone' ); ?>
			</a></p>
		</div>
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
		<?php
	}
}
