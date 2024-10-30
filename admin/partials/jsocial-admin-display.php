<?php

/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://codecanyon.net/user/ressannedba?ref=ressannedba
 * @since      1.0.0
 *
 * @package    jSocial
 * @subpackage jSocial/admin/partials
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

?>
<div class="wrap">
    <div class="container" id="jsocial">
    <h1 class="text-capitalize">jSocial - Responsive Floating social sharing media bar</h1>
    <h3><a target="_blank" href="http://codecanyon.net/item/jsocial-responsive-floating-social-sharing-bar/9187628/?ref=ressannedba">Get Premium Version</a></h3>
    <hr>
<?php

if(isset($_POST['jsocial_options'])){
    $positions=explode("_", $_POST["jsocial_positions"]);
    update_option( "jsocial_options",
        array(
                "jsocial_alignement" =>$positions[0],
                "jsocial_alignement_position" => $positions[1],
                "jsocial_container_position" => $positions[2],

                "jsocial_toggle_hover" => $_POST["jsocial_toggle_hover"],
                "jsocial_toggle_text" => $_POST["jsocial_toggle_text"],
                "jsocial_toggle_size" => $_POST["jsocial_toggle_size"],

                "jsocial_responsive_small" => (int)$_POST["jsocial_responsive_small"],
                "jsocial_responsive_medium" => (int)$_POST["jsocial_responsive_medium"],
                "jsocial_responsive_large" => (int)$_POST["jsocial_responsive_large"],

                "jsocial_button_google" => (bool)$_POST["jsocial_button_google"],
                "jsocial_button_facebook" => (bool)$_POST["jsocial_button_facebook"],
                "jsocial_button_twitter" => (bool)$_POST["jsocial_button_twitter"],
                // "jsocial_button_digg" => (bool)$_POST["jsocial_button_digg"],
                // "jsocial_button_delicious" => (bool)$_POST["jsocial_button_delicious"],
                // "jsocial_button_stumbleupon" => (bool)$_POST["jsocial_button_stumbleupon"],
                // "jsocial_button_linkedin" => (bool)$_POST["jsocial_button_linkedin"],
                // "jsocial_button_pinterest" => (bool)$_POST["jsocial_button_pinterest"],
            )
    );
?>
<div class="alert alert-success" role="alert"><strong>General Settings Updated Successfully!</strong></div>
<?php

}else if(isset($_POST['jsocial_styles'])){
    
    update_option( "jsocial_styles",
        array(
                    "jsocial_color" => $_POST["jsocial_color"],
                    "jsocial_color_rgba" => $_POST["jsocial_color_rgba"],
                    "jsocial_color_opacity" => (float)$_POST["jsocial_color_opacity"],
                    "jsocial_toggle_color" => $_POST["jsocial_toggle_color"],
                    "jsocial_toggle_color_rgba" => $_POST["jsocial_toggle_color_rgba"],
                    "jsocial_toggle_color_opacity" => (float)$_POST["jsocial_toggle_color_opacity"],
                    "jsocial_toggle_text_color" => $_POST["jsocial_toggle_text_color"],
                    "jsocial_toggle_text_color_rgba" => $_POST["jsocial_toggle_text_color_rgba"],
                    "jsocial_toggle_text_color_opacity" => (float)$_POST["jsocial_toggle_text_color_opacity"],
                    "jsocial_border_color" => $_POST["jsocial_border_color"],
                    "jsocial_border_color_rgba" => $_POST["jsocial_border_color_rgba"],
                    "jsocial_border_color_opacity" => (float)$_POST["jsocial_border_color_opacity"],
                    "jsocial_icon_color" => $_POST["jsocial_icon_color"],
                    "jsocial_icon_color_rgba" => $_POST["jsocial_icon_color_rgba"],
                    "jsocial_icon_color_opacity" => (float)$_POST["jsocial_icon_color_opacity"],
                    "jsocial_count_color" => $_POST["jsocial_count_color"],
                    "jsocial_count_color_rgba" => $_POST["jsocial_count_color_rgba"],
                    "jsocial_count_color_opacity" => (float)$_POST["jsocial_count_color_opacity"],

                    "jsocial_toggle_display" => $_POST["jsocial_toggle_display"],
                    "jsocial_border_width" => (int)$_POST["jsocial_border_width"],
                    "jsocial_margin" => (int)$_POST["jsocial_margin"],

                    "jsocial_radius" => (int)$_POST["jsocial_radius"],
                    "jsocial_icon_radius" => (int)$_POST["jsocial_icon_radius"],
                    "jsocial_position" => (int)$_POST["jsocial_position"],
                    "jsocial_toggle_position" => (int)$_POST["jsocial_toggle_position"],

                    "jsocial_google_color" => $_POST["jsocial_google_color"],
                    "jsocial_google_color_rgba" => $_POST["jsocial_google_color_rgba"],
                    "jsocial_google_color_opacity" => (float)$_POST["jsocial_google_color_opacity"],
                    "jsocial_facebook_color" => $_POST["jsocial_facebook_color"],
                    "jsocial_facebook_color_rgba" => $_POST["jsocial_facebook_color_rgba"],
                    "jsocial_facebook_color_opacity" => (float)$_POST["jsocial_facebook_color_opacity"],
                    "jsocial_twitter_color" => $_POST["jsocial_twitter_color"],
                    "jsocial_twitter_color_rgba" => $_POST["jsocial_twitter_color_rgba"],
                    "jsocial_twitter_color_opacity" => (float)$_POST["jsocial_twitter_color_opacity"],
                    "jsocial_digg_color" => $_POST["jsocial_digg_color"],
                    "jsocial_digg_color_rgba" => $_POST["jsocial_digg_color_rgba"],
                    "jsocial_digg_color_opacity" => (float)$_POST["jsocial_digg_color_opacity"],
                    
                    "jsocial_delicious_color" => $_POST["jsocial_delicious_color"],
                    "jsocial_delicious_color_rgba" => $_POST["jsocial_delicious_color_rgba"],
                    "jsocial_delicious_color_opacity" => (float)$_POST["jsocial_delicious_color_opacity"],
                    "jsocial_stumbleupon_color" => $_POST["jsocial_stumbleupon_color"],
                    "jsocial_stumbleupon_color_rgba" => $_POST["jsocial_stumbleupon_color_rgba"],
                    "jsocial_stumbleupon_color_opacity" => (float)$_POST["jsocial_stumbleupon_color_opacity"],
                    "jsocial_linkedin_color" => $_POST["jsocial_linkedin_color"],
                    "jsocial_linkedin_color_rgba" => $_POST["jsocial_linkedin_color_rgba"],
                    "jsocial_linkedin_color_opacity" => (float)$_POST["jsocial_linkedin_color_opacity"],
                    "jsocial_pinterest_color" => $_POST["jsocial_pinterest_color"],
                    "jsocial_pinterest_color_rgba" => $_POST["jsocial_pinterest_color_rgba"],
                    "jsocial_pinterest_color_opacity" => (float)$_POST["jsocial_pinterest_color_opacity"],
            )
    );
?>
<div class="alert alert-success" role="alert"><strong>Styles Updated Successfully!</strong></div>
<?php
}else if(isset($_POST['jsocial_attr'])){
    
    update_option( "jsocial_attr",
        array(
                'jsocial_count' => (bool)$_POST['jsocial_count'],
                'jsocial_hover' => $_POST['jsocial_hover'],
                'jsocial_sizes' => $_POST['jsocial_sizes'],
                'jsocial_toggled' => (bool)$_POST['jsocial_toggled'],
            )
    );
?>
<div class="alert alert-success" role="alert"><strong>Container options Updated Successfully!</strong></div>
<?php
}else if(isset($_POST['jsocial_display'])){
    
    update_option( "jsocial_display",
        array(
                'jsocial_posts' => (bool)$_POST["jsocial_posts"],
                'jsocial_ignore_posts' => $_POST["jsocial_ignore_posts"],
                'jsocial_pages' => (bool)$_POST["jsocial_pages"],
                'jsocial_ignore_pages' => $_POST["jsocial_ignore_pages"],
                'jsocial_homepage' => (bool)$_POST["jsocial_homepage"],
            )
    );
?>
<div class="alert alert-success" role="alert"><strong>Display options Updated Successfully!</strong></div>
<?php
}


    $jsocial_styles = get_option('jsocial_styles');
    $jsocial_options = get_option('jsocial_options');
    $positions=$jsocial_options["jsocial_alignement"]."_".$jsocial_options["jsocial_alignement_position"]."_".$jsocial_options["jsocial_container_position"];
    $jsocial_attr = get_option('jsocial_attr');
    $jsocial_display = get_option('jsocial_display');

    if($jsocial_styles){
?>
    <form id="jsocial_styles" role="form"  class="" method="post">
        <div class="panel panel-primary">
            <div class="panel-heading clickable <?php if (isset($_POST['jsocial_styles']) ){ echo "jsocial-submitted";} ?>">
                <strong class="pannel-title text-capitalize">Styles</strong>
                <span class="pull-right "><i class="fa fa-minus"></i></span>
            </div>
            <div class="panel-body">
                <h3 class="text-capitalize margin-top"><strong>Colors :</strong></h3>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Container Background</label>
                        <input type="text" name="jsocial_color" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_color"]; ?>">
                        <input name="jsocial_color_rgba" type="hidden" />
                        <input name="jsocial_color_opacity" type="hidden" />
                    </div>
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Toggle Button Background</label>
                        <input type="text" name="jsocial_toggle_color" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_toggle_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_toggle_color"]; ?>">
                        <input name="jsocial_toggle_color_rgba" type="hidden" />
                        <input name="jsocial_toggle_color_opacity" type="hidden" />
                    </div>
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Toggle Text</label>
                        <input type="text" name="jsocial_toggle_text_color" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_toggle_text_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_toggle_text_color"]; ?>">
                        <input name="jsocial_toggle_text_color_rgba" type="hidden" />
                        <input name="jsocial_toggle_text_color_opacity" type="hidden" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Border</label>
                        <input type="text" name="jsocial_border_color" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_border_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_border_color"]; ?>">
                        <input name="jsocial_border_color_rgba" type="hidden" />
                        <input name="jsocial_border_color_opacity" type="hidden" />
                    </div>
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Social media icons Text</label>
                        <input type="text" name="jsocial_icon_color" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_icon_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_icon_color"]; ?>">
                        <input name="jsocial_icon_color_rgba" type="hidden" />
                        <input name="jsocial_icon_color_opacity" type="hidden" />
                    </div>
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Count Text</label>
                        <input type="text" name="jsocial_count_color" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_count_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_count_color"]; ?>">
                        <input name="jsocial_count_color_rgba" type="hidden" />
                        <input name="jsocial_count_color_opacity" type="hidden" />
                    </div>
                </div>
                <h3 class="text-capitalize"><strong>Appearance :</strong></h3>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Toggle button</label>
                        <select name="jsocial_toggle_display" class="form-control">
                            <option value="block" <?php selected( $jsocial_styles['jsocial_toggle_display'], "block" ); ?>>Block</option>
                            <option value="none" <?php selected( $jsocial_styles['jsocial_toggle_display'], "none" ); ?>>None</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Container border width
                            <small>(px)</small>
                        </label>
                        <input name="jsocial_border_width" class="stepper" value="<?php echo $jsocial_styles["jsocial_border_width"]; ?>" type="number" min="0" max="50" step="1" />
                    </div>
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Container margin
                            <small>(px)</small>
                        </label>
                        <input name="jsocial_margin" class="stepper" value="<?php echo $jsocial_styles["jsocial_margin"]; ?>" type="number" min="0" max="50" step="1" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">Container Radius
                            <small>(px)</small>
                        </label>
                        <input name="jsocial_radius" class="stepper" value="<?php echo $jsocial_styles["jsocial_radius"]; ?>" typ e="number" min="0" max="50" step="1" />
                    </div>
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">Social media icons Radius
                            <small>(%)</small>
                        </label>
                        <input name="jsocial_icon_radius" class="stepper" value="<?php echo $jsocial_styles["jsocial_icon_radius"]; ?>" type="number" min="0" max="50" step="1" />
                    </div>
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">container position
                            <small>(%)</small>
                        </label>
                        <input name="jsocial_position" class="stepper" value="<?php echo $jsocial_styles["jsocial_position"]; ?>" type="number" min="0" max="50" step="1" />
                    </div>
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">Toggle position
                            <small>(%)</small>
                        </label>
                        <input name="jsocial_toggle_position" class="stepper" value="<?php echo $jsocial_styles["jsocial_toggle_position"]; ?>" type="number" min="0" max="50" step="1" />
                    </div>
                </div>
                <h3 class="text-capitalize"><strong>Social media icons background :</strong></h3>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">google</label>
                        <input name="jsocial_google_color" type="text" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_google_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_google_color"]; ?>">
                        <input name="jsocial_google_color_rgba" type="hidden"/>
                        <input name="jsocial_google_color_opacity" type="hidden"/>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">facebook</label>
                        <input name="jsocial_facebook_color" type="text" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_facebook_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_facebook_color"]; ?>">
                        <input name="jsocial_facebook_color_rgba" type="hidden"/>
                        <input name="jsocial_facebook_color_opacity" type="hidden"/>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">twitter</label>
                        <input name="jsocial_twitter_color" type="text" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_twitter_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_twitter_color"]; ?>">
                        <input name="jsocial_twitter_color_rgba" type="hidden"/>
                        <input name="jsocial_twitter_color_opacity" type="hidden"/>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">digg</label>
                        <input disabled name="jsocial_digg_color" type="text" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_digg_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_digg_color"]; ?>">
                        <input name="jsocial_digg_color_rgba" type="hidden"/>
                        <input name="jsocial_digg_color_opacity" type="hidden"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">delicious</label>
                        <input disabled name="jsocial_delicious_color" type="text" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_delicious_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_delicious_color"]; ?>">
                        <input name="jsocial_delicious_color_rgba" type="hidden"/>
                        <input name="jsocial_delicious_color_opacity" type="hidden"/>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">stumbleupon</label>
                        <input disabled name="jsocial_stumbleupon_color" type="text" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_stumbleupon_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_stumbleupon_color"]; ?>">
                        <input name="jsocial_stumbleupon_color_rgba" type="hidden"/>
                        <input name="jsocial_stumbleupon_color_opacity" type="hidden"/>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">linkedin</label>
                        <input disabled name="jsocial_linkedin_color" type="text" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_linkedin_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_linkedin_color"]; ?>">
                        <input name="jsocial_linkedin_color_rgba" type="hidden"/>
                        <input name="jsocial_linkedin_color_opacity" type="hidden"/>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">pinterest</label>
                        <input disabled name="jsocial_pinterest_color" type="text" class="form-control minicolors" data-opacity="<?php echo $jsocial_styles["jsocial_pinterest_color_opacity"]; ?>" value="<?php echo $jsocial_styles["jsocial_pinterest_color"]; ?>">
                        <input name="jsocial_pinterest_color_rgba" type="hidden"/>
                        <input name="jsocial_pinterest_color_opacity" type="hidden"/>
                    </div>
                </div>
                <input type="hidden" name="jsocial_styles" value="" />
            </div>
            <div class="panel-footer">
                <input type="submit" class="btn btn-primary btn-block" value="<?php esc_attr_e('Save'); ?>" />
            </div>
        </div>
    </form>

    <?php } 
        if($jsocial_options){
    ?>
    <form  id="jsocial_options" role="form" class="" method="post">
        <div class="panel panel-primary">
            <div class="panel-heading clickable <?php if (isset($_POST['jsocial_options']) ){ echo "jsocial-submitted";} ?>">
                <strong class="pannel-title text-capitalize">General</strong>
                <span class="pull-right "><i class="fa fa-minus"></i></span>
            </div>
            <div class="panel-body">
                <h3 class="text-capitalize margin-top"><strong>Social media icons :</strong></h3>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <ul id="jsocial-icons" class="list-inline center-block text-center">
                            <li>
                                <p class="text-center">
                                    <i class="fa fa-google-plus fa-2x"></i>
                                </p>
                                <input name="jsocial_button_google" type="checkbox" class="switch" value="true" <?php checked( $jsocial_options['jsocial_button_google'], true ); ?>>
                            </li>
                            <li>
                                <p class="text-center">
                                    <i class="fa fa-facebook fa-2x"></i>
                                </p>
                                <input name="jsocial_button_facebook" type="checkbox" class="switch" value="true" <?php checked( $jsocial_options['jsocial_button_facebook'], true ); ?>>
                            </li>
                            <li>
                                <p class="text-center">
                                    <i class="fa fa-twitter fa-2x"></i>
                                </p>
                                <input name="jsocial_button_twitter" type="checkbox" class="switch" value="true" <?php checked( $jsocial_options['jsocial_button_twitter'], true ); ?>>
                            </li>
                            <li>
                                <p class="text-center">
                                    <i class="fa fa-delicious fa-2x"></i>
                                </p>
                                <input disabled name="jsocial_button_delicious" type="checkbox" class="switch" value="true" <?php checked( $jsocial_options['jsocial_button_delicious'], true ); ?>>
                            </li>
                            <li>
                                <p class="text-center">
                                    <i class="fa fa-stumbleupon fa-2x"></i>
                                </p>
                                <input disabled name="jsocial_button_stumbleupon" type="checkbox" class="switch" value="true" <?php checked( $jsocial_options['jsocial_button_stumbleupon'], true ); ?>>
                            </li>
                            <li>
                                <p class="text-center">
                                    <i class="fa fa-linkedin fa-2x"></i>
                                </p>
                                <input disabled name="jsocial_button_linkedin" type="checkbox" class="switch" value="true" <?php checked( $jsocial_options['jsocial_button_linkedin'], true ); ?>>
                            </li>
                            <li>
                                <p class="text-center">
                                    <i class="fa fa-pinterest fa-2x"></i>
                                </p>
                                <input disabled name="jsocial_button_pinterest" type="checkbox" class="switch" value="true" <?php checked( $jsocial_options['jsocial_button_pinterest'], true ); ?>>
                            </li>
                        </ul>
                    </div>
                </div>
                <h3 class="text-capitalize"><strong>Position :</strong></h3>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <select id="jsocial_positions" name="jsocial_positions" class="form-control" size="16">
                            <optgroup label="Left">
                                <option <?php selected($positions, "side_left_top" ); ?> value="side_left_top">Top</option>
                                <option <?php selected($positions, "side_left_center" ); ?> value="side_left_center" >Center</option>
                                <option <?php selected($positions, "side_left_bottom" ); ?> value="side_left_bottom">Bottom</option>
                            </optgroup>
                            <optgroup label="Right">
                                <option <?php selected($positions, "side_right_top" ); ?> value="side_right_top">Top</option>
                                <option <?php selected($positions, "side_right_center" ); ?> value="side_right_center">Center</option>
                                <option <?php selected($positions, "side_right_bottom" ); ?> value="side_right_bottom">Bottom</option>
                            </optgroup>
                            <optgroup label="Top">
                                <option <?php selected($positions, "extremity_top_left" ); ?> value="extremity_top_left">Left</option>
                                <option <?php selected($positions, "extremity_top_center" ); ?> value="extremity_top_center">Center</option>
                                <option <?php selected($positions, "extremity_top_right" ); ?> value="extremity_top_right">Right</option>
                            </optgroup>
                            <optgroup label="Bottom">
                                <option <?php selected($positions, "extremity_bottom_left" ); ?> value="extremity_bottom_left">Left</option>
                                <option <?php selected($positions, "extremity_bottom_center" ); ?> value="extremity_bottom_center">Center</option>
                                <option <?php selected($positions, "extremity_bottom_right" ); ?> value="extremity_bottom_right">Right</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <p class="text-center">
                            <img id="jsocial_positions_image" class="img-responsive" src="" alt="">
                        </p>
                    </div>
                </div>
                <h3 class="text-capitalize"><strong>Toggle button :</strong></h3>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Hover Effect
                            <small><a href="http://ianlunn.github.io/Hover#effects" target="_blank">See more</a>
                            </small>
                        </label>
                        <select name="jsocial_toggle_hover" class="form-control">
                            <option value="" <?php selected($jsocial_options['jsocial_toggle_hover'], "" ); ?>>None</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "grow" ); ?> value="grow">grow</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "shrink" ); ?> value="shrink">shrink</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "pulse" ); ?> value="pulse">pulse</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "pulse-grow" ); ?> value="pulse-grow">pulse-grow</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "pulse-shrink" ); ?> value="pulse-shrink">pulse-shrink</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "push" ); ?> value="push">push</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "pop" ); ?> value="pop">pop</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "grow-rotate" ); ?> value="grow-rotate">grow-rotate</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "float" ); ?> value="float">float</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "sink" ); ?> value="sink">sink</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "hover" ); ?> value="hover">hover</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "hang" ); ?> value="hang">hang</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "skew" ); ?> value="skew">skew</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "skew-forward" ); ?> value="skew-forward">skew-forward</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "skew-backward" ); ?> value="skew-backward">skew-backward</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "wobble-vertical" ); ?> value="wobble-vertical">wobble-vertical</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "wobble-horizontal" ); ?> value="wobble-horizontal">wobble-horizontal</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "wobble-to-bottom-right" ); ?> value="wobble-to-bottom-right">wobble-to-bottom-right</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "wobble-to-top-right" ); ?> value="wobble-to-top-right">wobble-to-top-right</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "wobble-top" ); ?> value="wobble-top">wobble-top</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "wobble-bottom" ); ?> value="wobble-bottom">wobble-bottom</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "wobble-skew" ); ?> value="wobble-skew">wobble-skew</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "buzz" ); ?> value="buzz">buzz</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_hover'], "buzz-out" ); ?> value="buzz-out">buzz-out</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Anchor text</label>
                        <input name="jsocial_toggle_text" class="form-control" type="text" value="<?php echo $jsocial_options["jsocial_toggle_text"]; ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Sizes</label>
                        <select name="jsocial_toggle_size" class="form-control">
                            <option <?php selected($jsocial_options['jsocial_toggle_size'], "fa-1x" ); ?> value="fa-1x">1x</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_size'], "fa-lg" ); ?> value="fa-lg">lg</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_size'], "fa-2x" ); ?> value="fa-2x">2x</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_size'], "fa-3x" ); ?> value="fa-3x">3x</option>
                            <option <?php selected($jsocial_options['jsocial_toggle_size'], "fa-4x" ); ?> value="fa-4x">4x</option>
                        </select>
                    </div>
                </div>
                <h3 class="text-capitalize"><strong>Responsive options</strong>
                    <small>Social icons per line</small>
                    :</h3>
                    <hr>
                <div class="row">
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Small</label>
                        <input name="jsocial_responsive_small" class="stepper" value="<?php echo $jsocial_options["jsocial_responsive_small"]; ?>" type="number" min="1" max="7" step="1" />
                    </div>
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Medium</label>
                        <input name="jsocial_responsive_medium" class="stepper" value="<?php echo $jsocial_options["jsocial_responsive_medium"]; ?>" type="number" min="1" max="7" step="1" />
                    </div>
                    <div class="col-md-4">
                        <label for="" class="text-capitalize">Large</label>
                        <input name="jsocial_responsive_large" class="stepper" value="<?php echo $jsocial_options["jsocial_responsive_large"]; ?>" type="number" min="1" max="7" step="1" />
                    </div>
                </div>
                <input type="hidden" name="jsocial_options" value="" />
            </div>
            <div class="panel-footer">
                <input type="submit" class="btn btn-primary btn-block" value="<?php esc_attr_e('Save'); ?>" />
            </div>
        </div>
    </form>
    <?php } 
        if($jsocial_attr){
    ?>
    <form  id="jsocial_attr" role="form"  class="" method="post">
        <div class="panel panel-primary">
           <div class="panel-heading clickable <?php if (isset($_POST['jsocial_attr']) ){ echo "jsocial-submitted";} ?>">
                <strong class="pannel-title text-capitalize">Container</strong>
                <span class="pull-right "><i class="fa fa-minus"></i></span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label for="" class="text-capitalize">
                                <input id="count" name="jsocial_count" type="checkbox" class="icheck" value="true" <?php checked( $jsocial_attr['jsocial_count'], true ); ?>>&nbsp;Hide the Counters for jSocial Buttons.</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label for="" class="text-capitalize">
                                <input id="toggled" name="jsocial_toggled" type="checkbox" class="icheck" value="true" <?php checked( $jsocial_attr['jsocial_toggled'], true ); ?>>&nbsp;Toggle the container directly after the loading of the pages.</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">Social media icons size</label>
                        <select name="jsocial_sizes" class="form-control">
                            <option <?php selected($jsocial_attr['jsocial_sizes'], "fa-1x" ); ?> value="fa-1x">1x</option>
                            <option <?php selected($jsocial_attr['jsocial_sizes'], "fa-lg" ); ?> value="fa-lg">lg</option>
                            <option <?php selected($jsocial_attr['jsocial_sizes'], "fa-2x" ); ?> value="fa-2x">2x</option>
                            <option <?php selected($jsocial_attr['jsocial_sizes'], "fa-3x" ); ?> value="fa-3x">3x</option>
                            <option <?php selected($jsocial_attr['jsocial_sizes'], "fa-4x" ); ?> value="fa-4x">4x</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="text-capitalize">Toggle button Effect
                            <small><a href="http://ianlunn.github.io/Hover#effects" target="_blank">See more</a>
                            </small>
                        </label>
                        <select name="jsocial_hover" class="form-control">
                            <option value="" <?php selected($jsocial_attr['jsocial_hover'], "" ); ?>>None</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "grow" ); ?> value="grow">grow</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "shrink" ); ?> value="shrink">shrink</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "pulse" ); ?> value="pulse">pulse</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "pulse-grow" ); ?> value="pulse-grow">pulse-grow</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "pulse-shrink" ); ?> value="pulse-shrink">pulse-shrink</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "push" ); ?> value="push">push</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "pop" ); ?> value="pop">pop</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "grow-rotate" ); ?> value="grow-rotate">grow-rotate</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "float" ); ?> value="float">float</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "sink" ); ?> value="sink">sink</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "hover" ); ?> value="hover">hover</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "hang" ); ?> value="hang">hang</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "skew" ); ?> value="skew">skew</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "skew-forward" ); ?> value="skew-forward">skew-forward</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "skew-backward" ); ?> value="skew-backward">skew-backward</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "wobble-vertical" ); ?> value="wobble-vertical">wobble-vertical</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "wobble-horizontal" ); ?> value="wobble-horizontal">wobble-horizontal</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "wobble-to-bottom-right" ); ?> value="wobble-to-bottom-right">wobble-to-bottom-right</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "wobble-to-top-right" ); ?> value="wobble-to-top-right">wobble-to-top-right</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "wobble-top" ); ?> value="wobble-top">wobble-top</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "wobble-bottom" ); ?> value="wobble-bottom">wobble-bottom</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "wobble-skew" ); ?> value="wobble-skew">wobble-skew</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "buzz" ); ?> value="buzz">buzz</option>
                            <option <?php selected($jsocial_attr['jsocial_hover'], "buzz-out" ); ?> value="buzz-out">buzz-out</option>
                        </select>
                    </div>
                </div>
                <input type="hidden" name="jsocial_attr" value="" />
            </div>
            <div class="panel-footer">
                <input type="submit" class="btn btn-primary btn-block" value="<?php esc_attr_e('Save'); ?>" />
            </div>
        </div>
    </form>
    <?php } 
        if($jsocial_display){
    ?>
    <form  id="jsocial_display" role="form"  class="" method="post">
        <div class="panel panel-primary">
           <div class="panel-heading clickable <?php if (isset($_POST['jsocial_display']) ){ echo "jsocial-submitted";} ?>">
                <strong class="pannel-title text-capitalize">Display</strong>
                <span class="pull-right "><i class="fa fa-minus"></i></span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label for="" class="text-capitalize">
                                <input id="count" name="jsocial_posts" type="checkbox" class="icheck" value="true" <?php checked( $jsocial_display['jsocial_posts'], true ); ?>>&nbsp;Posts - Show jSocial on posts.
                                </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Posts to Ignore (ID, slug, title) seperated with commas.</label>
                        <input type="text" name="jsocial_ignore_posts" class="form-control" value="<?php echo $jsocial_display["jsocial_ignore_posts"]; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label for="" class="text-capitalize">
                                <input id="count" name="jsocial_pages" type="checkbox" class="icheck" value="true" <?php checked( $jsocial_display['jsocial_pages'], true ); ?>>&nbsp;Pages - Show jSocial on pages.
                                </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Pages to Ignore (ID, slug, title) seperated with commas.</label>
                        <input type="text" name="jsocial_ignore_pages" class="form-control" value="<?php echo $jsocial_display["jsocial_ignore_pages"]; ?>">
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="checkbox">
                            <label for="" class="text-capitalize">
                                <input id="count" name="jsocial_homepage" type="checkbox" class="icheck" value="true" <?php checked( $jsocial_display['jsocial_homepage'], true ); ?>>&nbsp;Homepage - Show jSocial on homepage.
                                </label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="jsocial_display" value="" />
            </div>
            <div class="panel-footer">
                <input type="submit" class="btn btn-primary btn-block" value="<?php esc_attr_e('Save'); ?>" />
            </div>
        </div>
    </form>
    <?php } ?>

    <p class="text-center">
        <a class="text-uppercase" href="http://codecanyon.net/user/ressannedba?ref=ressannedba">ressannedba</a> 2014
    </p>

 </div>


</div>