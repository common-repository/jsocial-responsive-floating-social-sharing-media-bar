<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * @link       http://codecanyon.net/user/ressannedba?ref=ressannedba
 * @since      1.0.0
 *
 * @package    jSocial
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}


if (get_option("jsocial_options")) {
	delete_option( "jsocial_options");
}

if (get_option("jsocial_styles")) {
	delete_option( "jsocial_styles");
}

if (get_option("jsocial_attr")) {
	delete_option( "jsocial_attr");
}

