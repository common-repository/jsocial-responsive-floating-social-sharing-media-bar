<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://codecanyon.net/user/ressannedba?ref=ressannedba
 * @since      1.0.0
 *
 * @package    jSocial
 * @subpackage jSocial/includes
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    jSocial
 * @subpackage jSocial/admin
 * @author     ressannedba <kirat.ressannedba@gmail.com>
 */
class jSocial_Public {

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
	 * @var      string    $name       The name of the plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $name, $version ) {

		$this->name = $name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_resources() {
		$jsocial_display = get_option('jsocial_display');

		$display=array(
			"posts"=>(is_single() && $jsocial_display["jsocial_posts"] ===true && !is_single( explode( ',', $jsocial_display["jsocial_ignore_posts"] ) )),
			"pages"=>( is_page() && $jsocial_display["jsocial_pages"] ===true && !is_page( explode( ',', $jsocial_display["jsocial_ignore_pages"] )  )),
			"homepage"=>(is_home() && $jsocial_display["jsocial_homepage"] ===true),
			);
		
		if(in_array(true, $display)){
			
			wp_enqueue_style( 'jsocial-main-css', plugin_dir_url( __FILE__ ) . 'css/jsocial-main.css', array(), $this->version, 'all' );
			wp_enqueue_style( 'jsocial-vendor-css', plugin_dir_url( __FILE__ ) . 'css/jsocial-vendor.css', array(), $this->version, 'all' );
			wp_enqueue_style( 'jsocial-custom-css', plugin_dir_url( __FILE__ ) . 'css/jsocial-custom.php', array(), $this->version, 'all' );
			
			wp_enqueue_script( 'jsocial-vendor-js', plugin_dir_url( __FILE__ ) . 'js/jsocial-vendor.js', array(), $this->version, false );
			wp_enqueue_script( 'jsocial-main-js', plugin_dir_url( __FILE__ ) . 'js/jsocial-main.js', array(), $this->version, false );


			$jsocial_attr = get_option('jsocial_attr');
			$jsocial_attr['jsocial_ajax_url'] = admin_url( 'admin-ajax.php' );

			if($jsocial_attr){

				wp_localize_script( 'jsocial-main-js', 'jsocial_attr', $jsocial_attr );
			}
		}
	}

	/**
	 * @since    1.0.0
	 */
	public function jsocial_markup() {

		$jsocial_display = get_option('jsocial_display');

		$display=array(
			"posts"=>(is_single() && $jsocial_display["jsocial_posts"] ===true && !is_single( explode( ',', $jsocial_display["jsocial_ignore_posts"] ) )),
			"pages"=>( is_page() && $jsocial_display["jsocial_pages"] ===true && !is_page( explode( ',', $jsocial_display["jsocial_ignore_pages"] )  )),
			"homepage"=>(is_home() && $jsocial_display["jsocial_homepage"] ===true),
			);
		
		if(in_array(true, $display) && (is_single() || is_page() || is_home())){
			require_once (plugin_dir_path( __FILE__  ) . 'partials/jsocial-public-display.php');
		}
	}

	/**
	 * @since    1.0.0
	 */
	public function jsocial_callback() {


		$json = array('url'=>'','count'=>0);
		$json['url'] = $_GET['url'];
		$url = urlencode($_GET['url']);
		$type = urlencode($_GET['type']);

		if(filter_var($_GET['url'], FILTER_VALIDATE_URL)){

			if($type == 'googlePlus'){  
				$contents = wp_remote_get( $url );
				$body = wp_remote_retrieve_body($contents);

				preg_match( '/window\.__SSR = {c: ([\d]+)/', $body, $matches );

				if(isset($matches[0])){
					$json['count'] = (int)str_replace('window.__SSR = {c: ', '', $matches[0]);
				}
			}else if($type == 'stumbleupon'){
				$contents =wp_remote_get( $url );
				$body = wp_remote_retrieve_body($contents);

				$result = json_decode($body);
				if (isset($result->result->views))
				{
					$json['count'] = $result->result->views;
				}

			}
		}
		echo str_replace('\\/','/',json_encode($json));

		die();
	}
}
