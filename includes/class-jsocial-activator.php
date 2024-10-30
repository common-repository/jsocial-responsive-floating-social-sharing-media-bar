<?php

/**
 * Fired during plugin activation
 *
 * @link       http://codecanyon.net/user/ressannedba?ref=ressannedba
 * @since      1.0.0
 *
 * @package    jSocial
 * @subpackage jSocial/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    jSocial
 * @subpackage jSocial/includes
 * @author     ressannedba <kirat.ressannedba@gmail.com>
 */
class jSocial_Activator {

	/**
	 * @since    1.0.0
	 */
	public static function activate() {

		if (! get_option("jsocial_options")) {
			add_option( "jsocial_options",
				array(
					"jsocial_button_google" => true,
					"jsocial_button_facebook" => true,
					"jsocial_button_twitter" => true,
					"jsocial_button_digg" => false,
					"jsocial_button_delicious" => false,
					"jsocial_button_stumbleupon" => false,
					"jsocial_button_linkedin" => false,
					"jsocial_button_pinterest" => false,


					"jsocial_alignement" => "side",
					"jsocial_alignement_position" => "left",
					"jsocial_container_position" => "center",

					"jsocial_toggle_hover" => "pulse-shrink",
					"jsocial_toggle_text" => "Share",
					"jsocial_toggle_size" => "fa-1x",

					"jsocial_responsive_small" => 1,
					"jsocial_responsive_medium" => 2,
					"jsocial_responsive_large" => 3,


					)
				);
		}

		if (! get_option("jsocial_styles")) {
			add_option( "jsocial_styles",
				array(
					"jsocial_color" => "#33474D",
					"jsocial_color_rgba" => "",
					"jsocial_color_opacity" => 1,
					"jsocial_toggle_color" => "#2C3E50",
					"jsocial_toggle_color_rgba" => "",
					"jsocial_toggle_color_opacity" => 1,
					"jsocial_toggle_text_color" => "#ffffff",
					"jsocial_toggle_text_color_rgba" => "",
					"jsocial_toggle_text_color_opacity" => 1,
					"jsocial_border_color" => "#7EA0C2",
					"jsocial_border_color_rgba" => "",
					"jsocial_border_color_opacity" => 1,
					"jsocial_icon_color" => "#ffffff",
					"jsocial_icon_color_rgba" => "",
					"jsocial_icon_color_opacity" => 1,
					"jsocial_count_color" => "#F2EDE9",
					"jsocial_count_color_rgba" => "",
					"jsocial_count_color_opacity" => 1,

					"jsocial_toggle_display" => "block",
					"jsocial_border_width" => 3,
					"jsocial_margin" => 0,

					"jsocial_radius" => 5,
					"jsocial_icon_radius" => 50,
					"jsocial_position" => 40,
					"jsocial_toggle_position" => 20,

					"jsocial_google_color" => "#d3452d",
					"jsocial_google_color_rgba" => "",
					"jsocial_google_color_opacity" => 1,
					"jsocial_facebook_color" => "#5c7cb3",
					"jsocial_facebook_color_rgba" => "",
					"jsocial_facebook_color_opacity" => 1,
					"jsocial_twitter_color" => "#2894be",
					"jsocial_twitter_color_rgba" => "",
					"jsocial_twitter_color_opacity" => 1,
					"jsocial_digg_color" => "#5a8dbf",
					"jsocial_digg_color_rgba" => "",
					"jsocial_digg_color_opacity" => 1,

					"jsocial_delicious_color" => "#333333",
					"jsocial_delicious_color_rgba" => "",
					"jsocial_delicious_color_opacity" => 1,
					"jsocial_stumbleupon_color" => "#fa6e47",
					"jsocial_stumbleupon_color_rgba" => "",
					"jsocial_stumbleupon_color_opacity" => 1,
					"jsocial_linkedin_color" => "#247ba6",
					"jsocial_linkedin_color_rgba" => "",
					"jsocial_linkedin_color_opacity" => 1,
					"jsocial_pinterest_color" => "#c62f2e",
					"jsocial_pinterest_color_rgba" => "",
					"jsocial_pinterest_color_opacity" => 1,
					)
			);
		}
		
		if (! get_option("jsocial_attr")) {
			add_option( "jsocial_attr",
				array(
					'jsocial_count' => false,
					'jsocial_hover' => 'buzz',
					'jsocial_sizes' => 'fa-1x',
					'jsocial_toggled' => true
					)
				);
		}

		if (! get_option("jsocial_display")) {
			add_option( "jsocial_display",
				array(
					'jsocial_posts' => true,
					'jsocial_ignore_posts' => "",
					'jsocial_pages' => true,
					'jsocial_ignore_pages' => "",
					'jsocial_homepage' => true,
					)
				);
		}
	}

}
