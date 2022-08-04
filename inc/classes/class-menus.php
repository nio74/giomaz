<?php
/**
 * Register Menus
 *
 * @package Giomaz
 */

namespace AQUILA_THEME\Inc;

use GIOMAZ_THEME\Inc\Traits\Singleton;

class Menus {

	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'register_menus' ] );
	}

	public function register_menus() {
		register_nav_menus([
			'giomaz-header-menu' => esc_html__( 'Header Menu', 'giomaz' ),
			'giomaz-footer-menu' => esc_html__( 'Footer Menu', 'giomaz' ),
		]);
	}

	/**
	 * Get the menu id by menu location.
	 *
	 * @param string $location
	 *
	 * @return integer
	 */
	public function get_menu_id( $location ) {

		// Get all locations
		$locations = get_nav_menu_locations();

		// Get object id by location.
		$menu_id = ! empty($locations[$location]) ? $locations[$location] : '';

		return ! empty( $menu_id ) ? $menu_id : '';

	}

	

}
