<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://codecanyon.net/user/ressannedba?ref=ressannedba
 * @since      1.0.0
 *
 * @package    jSocial
 * @subpackage jSocial/includes
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    jSocial
 * @subpackage jSocial/admin
 * @author     ressannedba <kirat.ressannedba@gmail.com>
 */
class jSocial_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $name    The ID of this plugin.
	 */
	private $name;

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
	 * @var      string    $name       The name of this plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $name, $version ) {

		$this->name = $name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the Dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( 'jsocial-vendor-css-admin', plugin_dir_url( __FILE__ ) . 'css/jsocial-vendor.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'jsocial-main-css-admin', plugin_dir_url( __FILE__ ) . 'css/jsocial-main.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( 'jsocial-vendor-js-admin', plugin_dir_url( __FILE__ ) . 'js/jsocial-vendor.js', array( ), $this->version, false );
		wp_enqueue_script( 'jsocial-main-js-admin', plugin_dir_url( __FILE__ ) . 'js/jsocial-main.js', array(), $this->version, false );
		wp_localize_script( 'jsocial-main-js-admin', 'jsocial_admin', array('url'=>plugin_dir_url( __FILE__ )) );
	
	}

	/**
	 * @since    1.0.0
	 */
	public function jsocial_options_menu() {

		 
		$page_hook_suffix =add_menu_page('jSocial Plugin Settings', 'jSocial', 'administrator', 'jsocial-admin', array( $this, 'jsocial_options' ),plugin_dir_url( __FILE__ ) .'/images/icon.png');
		
        add_action('admin_print_scripts-' . $page_hook_suffix, array( $this, 'enqueue_scripts' ));
        add_action('admin_print_styles-' . $page_hook_suffix, array( $this, 'enqueue_styles' ));

	}
	
	/**
	 * @since    1.0.0
	 */
	public function jsocial_options() {

		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}

		include(plugin_dir_path( __FILE__  ) . 'partials/jsocial-admin-display.php');

	}


}
