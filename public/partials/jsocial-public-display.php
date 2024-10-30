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
 * @subpackage jSocial/public/partials
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$jsocial_options = get_option('jsocial_options');

if($jsocial_options){

global $post;
$jsocial_post_id= $post->ID;

if(is_home() ){
	$jsocial_permalink=get_bloginfo('url');
	$jsocial_title=get_bloginfo('name');
}else{
	$jsocial_permalink= get_permalink($jsocial_post_id);
	$jsocial_title=get_the_title($jsocial_post_id);
}

?>

<div id="jsocial" class="jsocial-<?php echo $jsocial_options["jsocial_alignement"] ?> jsocial-<?php echo $jsocial_options["jsocial_alignement_position"] ?> jsocial-<?php echo $jsocial_options["jsocial_container_position"] ?>">

    <a href="#" class="jsocial-toggle-button">
        <i class="fa fa-share-alt <?php echo $jsocial_options["jsocial_toggle_size"] ?> fa-inverse <?php echo $jsocial_options["jsocial_toggle_hover"] ?>">&nbsp;<strong class="jsocial-toggle-text "><?php echo $jsocial_options["jsocial_toggle_text"] ?></strong></i> 
    </a>

    <div class="jsocial-body jsocial-margin " >
        <ul class="jsocial-block-grid small-block-grid-<?php echo $jsocial_options["jsocial_responsive_small"] ?> medium-block-grid-<?php echo $jsocial_options["jsocial_responsive_medium"] ?> large-block-grid-<?php echo $jsocial_options["jsocial_responsive_large"] ?>">

            <?php if( isset($jsocial_options["jsocial_button_google"]) && $jsocial_options["jsocial_button_google"]===true) { ?>
	            <li>
	                <div class="jsocial-item " data-jsocial="googlePlus" data-url="<?php echo $jsocial_permalink; ?>" data-text="<?php echo $jsocial_title; ?>"></div>
	            </li>
            <?php } ?>

            <?php if( isset($jsocial_options["jsocial_button_facebook"]) && $jsocial_options["jsocial_button_facebook"]===true) { ?>
	            <li>
	                <div class="jsocial-item" data-jsocial="facebook" data-url="<?php echo $jsocial_permalink; ?>" data-text="<?php echo $jsocial_title; ?>"></div>
	            </li>
            <?php } ?>

            <?php if( isset($jsocial_options["jsocial_button_twitter"]) && $jsocial_options["jsocial_button_twitter"]===true) { ?>
	            <li>
	                <div class="jsocial-item" data-jsocial="twitter" data-url="<?php echo $jsocial_permalink; ?>" data-text="<?php echo $jsocial_title; ?>"></div>
	            </li>
            <?php } ?>

           	<?php if( isset($jsocial_options["jsocial_button_digg"]) && $jsocial_options["jsocial_button_digg"]===true) { ?>
	            <li>
	                <div class="jsocial-item"  data-jsocial="digg" data-url="<?php echo $jsocial_permalink; ?>" data-text="<?php echo $jsocial_title; ?>"></div> 
	            </li>
            <?php } ?>

            <?php if( isset($jsocial_options["jsocial_button_delicious"]) && $jsocial_options["jsocial_button_delicious"]===true) { ?>
	            <li>
	                <div class="jsocial-item" data-jsocial="delicious" data-url="<?php echo $jsocial_permalink; ?>" data-text="<?php echo $jsocial_title; ?>"></div>
	            </li>
            <?php } ?>

            <?php if( isset($jsocial_options["jsocial_button_stumbleupon"]) && $jsocial_options["jsocial_button_stumbleupon"]===true) { ?>
	            <li>
	                <div class="jsocial-item" data-jsocial="stumbleupon" data-url="<?php echo $jsocial_permalink; ?>" data-text="<?php echo $jsocial_title; ?>"></div>
	            </li>
            <?php } ?>

            <?php if( isset($jsocial_options["jsocial_button_linkedin"]) && $jsocial_options["jsocial_button_linkedin"]===true) { ?>
	            <li>
	                <div class="jsocial-item" data-jsocial="linkedin" data-url="<?php echo $jsocial_permalink; ?>" data-text="<?php echo $jsocial_title; ?>"></div>
	            </li>
            <?php } ?>

            <?php if(isset($jsocial_options["jsocial_button_pinterest"]) && $jsocial_options["jsocial_button_pinterest"]===true) { ?>
	            <li>
	                <div class="jsocial-item" data-jsocial="pinterest" data-url="<?php echo $jsocial_permalink; ?>" data-text="<?php echo $jsocial_title; ?>"></div>
	            </li>
            <?php } ?>
            
        </ul>
    </div>
</div>
<?php 
	}
?>