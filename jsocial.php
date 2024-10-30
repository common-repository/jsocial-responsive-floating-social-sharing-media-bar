<?php

/**
 * The plugin bootstrap file
 *
 * @link              http://codecanyon.net/user/ressannedba?ref=ressannedba
 * @since             1.0.0
 * @package           jSocial
 *
 * @wordpress-plugin
 * Plugin Name:       jSocial - Responsive Floating Social Sharing Media Bar
 * Plugin URI:        http://codecanyon.net/user/ressannedba?ref=ressannedba
 * Description:       jSocial is a light-weight WordPress plugin that adds a floating bar to your site to get you maximum shares.
 * Version:           1.0.0
 * Author:            ressannedba
 * Author URI:        http://codecanyon.net/user/ressannedba?ref=ressannedba
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jsocial
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-jsocial-activator.php';

/**
 * The code that runs during plugin deactivation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-jsocial-deactivator.php';

register_activation_hook( __FILE__, array( 'jSocial_Activator', 'activate' ) );

register_deactivation_hook( __FILE__, array( 'jSocial_Deactivator', 'deactivate' ) );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-jsocial.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jSocial() {

	$plugin = new jSocial();
	$plugin->run();

}
run_jSocial();

?>