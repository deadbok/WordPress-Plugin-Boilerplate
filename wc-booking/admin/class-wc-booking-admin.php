<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://groenholdt.net
 * @since      1.0.0
 *
 * @package    Wc_Booking
 * @subpackage Wc_Booking/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wc_Booking
 * @subpackage Wc_Booking/admin
 * @author     Martin Grønholdt <martin.groenholdt@gmail.com>
 */
class Wc_Booking_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_action('init', array($this, 'includes'));
	}
	
	/**
	 * Includes needed for the admin interface.
	 * 
	 * @since 1.0.0
	 */
	public function includes()
	{
		//Administration menus.
		require_once plugin_dir_path (dirname (__FILE__)) . 'admin/class-wc-booking-admin-menus.php';
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wc_Booking_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_Booking_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wc-booking-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wc_Booking_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_Booking_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wc-booking-admin.js', array( 'jquery' ), $this->version, false );

	}

}
