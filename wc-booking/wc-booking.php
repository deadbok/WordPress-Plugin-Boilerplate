<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://groenholdt.net
 * @since             1.0.0
 * @package           Wc_Booking
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce booking
 * Plugin URI:        https://github.com/deadbok/WooCommerce-Booking
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Martin Grønholdt
 * Author URI:        http://groenholdt.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wc-booking
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (! defined ('WPINC'))
{
	die ();
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wc-booking-activator.php
 */
function activate_wc_booking()
{
	require_once plugin_dir_path (__FILE__) . 'includes/class-wc-booking-activator.php';
	Wc_Booking_Activator::activate ();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wc-booking-deactivator.php
 */
function deactivate_wc_booking()
{
	require_once plugin_dir_path (__FILE__) . 'includes/class-wc-booking-deactivator.php';
	Wc_Booking_Deactivator::deactivate ();
}

register_activation_hook (__FILE__, 'activate_wc_booking');
register_deactivation_hook (__FILE__, 'deactivate_wc_booking');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path (__FILE__) . 'includes/class-wc-booking.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since 1.0.0
 */
function run_wc_booking()
{
	$plugin = new Wc_Booking ();
	$plugin->run ();
}
run_wc_booking ();
