<?php
/**
 * Customize API: WP_Customize_Color_Control class
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
 * Customize Color Control class.
 *
<<<<<<< HEAD
 * @since Twenty Twenty-One 1.0
=======
 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
 *
 * @see WP_Customize_Control
 */
class Twenty_Twenty_One_Customize_Color_Control extends WP_Customize_Color_Control {
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
	public $type = 'twenty-twenty-one-color';

	/**
	 * Colorpicker palette
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @access public
	 *
	 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
	 *
	 * @var array
	 */
	public $palette;

	/**
	 * Enqueue control related scripts/styles.
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
	public function enqueue() {
		parent::enqueue();

		// Enqueue the script.
		wp_enqueue_script(
			'twentytwentyone-control-color',
			get_theme_file_uri( 'assets/js/palette-colorpicker.js' ),
			array( 'customize-controls', 'jquery', 'customize-base', 'wp-color-picker' ),
<<<<<<< HEAD
			wp_get_theme()->get( 'Version' ),
=======
			(string) filemtime( get_theme_file_path( 'assets/js/palette-colorpicker.js' ) ),
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
			false
		);
	}

	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @access public
	 *
	 * @since 1.0.0
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
	 *
	 * @uses WP_Customize_Control::to_json()
	 *
	 * @return void
	 */
	public function to_json() {
		parent::to_json();
		$this->json['palette'] = $this->palette;
	}
}
