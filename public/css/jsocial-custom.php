<?php

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header('Content-type: text/css');

function find_wp_config_path() {
    $dir = dirname(__FILE__);
    do {
        if( file_exists($dir."/wp-config.php") ) {
            return $dir;
        }
    } while( $dir = realpath("$dir/..") );
    return null;
}

if ( !function_exists('get_option') ) {
    include_once( find_wp_config_path()  . '/wp-load.php' );
    $jsocial_styles = get_option('jsocial_styles');
}

if($jsocial_styles){
?>

#jsocial.jsocial-side.jsocial-left .jsocial-body, #jsocial.jsocial-side.jsocial-left .jsocial-toggle-button {
    border-radius: 0px  <?php echo $jsocial_styles["jsocial_radius"].'px'; ?>  <?php echo $jsocial_styles["jsocial_radius"].'px'; ?> 0px;
}
#jsocial.jsocial-side.jsocial-right .jsocial-body, #jsocial.jsocial-side.jsocial-right .jsocial-toggle-button {
    border-radius:  <?php echo $jsocial_styles["jsocial_radius"].'px'; ?> 0px 0px  <?php echo $jsocial_styles["jsocial_radius"].'px'; ?>;
}
#jsocial.jsocial-extremity.jsocial-top .jsocial-body, #jsocial.jsocial-extremity.jsocial-top .jsocial-toggle-button {
    border-radius: 0px 0px  <?php echo $jsocial_styles["jsocial_radius"].'px'; ?>  <?php echo $jsocial_styles["jsocial_radius"].'px'; ?>;
}
#jsocial.jsocial-extremity.jsocial-bottom .jsocial-body, #jsocial.jsocial-extremity.jsocial-bottom .jsocial-toggle-button {
    border-radius:  <?php echo $jsocial_styles["jsocial_radius"].'px'; ?>  <?php echo $jsocial_styles["jsocial_radius"].'px'; ?> 0px 0px;
}

#jsocial.jsocial-side.jsocial-left .jsocial-body {
    margin-left: <?php echo $jsocial_styles["jsocial_margin"].'px'; ?>;
}

#jsocial.jsocial-side.jsocial-right .jsocial-body {
    margin-right: <?php echo $jsocial_styles["jsocial_margin"].'px'; ?>;
}

#jsocial.jsocial-side.jsocial-top .jsocial-toggle-button {
    top: 0;
}
#jsocial.jsocial-side.jsocial-center, #jsocial.jsocial-side.jsocial-center .jsocial-toggle-button {
    top: <?php echo $jsocial_styles["jsocial_toggle_position"].'%'; ?>
}
#jsocial.jsocial-side.jsocial-bottom .jsocial-toggle-button {
    bottom: 0;
}

#jsocial.jsocial-extremity.jsocial-left .jsocial-toggle-button {
    left: 0;
}
#jsocial.jsocial-extremity.jsocial-center, #jsocial.jsocial-extremity.jsocial-center .jsocial-toggle-button {
    left: <?php echo $jsocial_styles["jsocial_toggle_position"].'%'; ?>
}
#jsocial.jsocial-extremity.jsocial-right .jsocial-toggle-button {
    right: 0;
}

#jsocial.jsocial-extremity.jsocial-top .jsocial-body {
    margin-top: <?php echo $jsocial_styles["jsocial_margin"].'px'; ?>;
}

#jsocial.jsocial-extremity.jsocial-bottom .jsocial-body {
    margin-bottom: <?php echo $jsocial_styles["jsocial_margin"].'px'; ?>;
}



#jsocial .jsocial-toggle-button {
    background: <?php echo ($jsocial_styles["jsocial_toggle_color_opacity"] < 1 ? $jsocial_styles["jsocial_toggle_color_rgba"] : $jsocial_styles["jsocial_toggle_color"]) ?>;
    border: <?php echo $jsocial_styles["jsocial_border_width"].'px'; ?> solid <?php echo ($jsocial_styles["jsocial_border_color_opacity"] < 1 ? $jsocial_styles["jsocial_border_color_rgba"] : $jsocial_styles["jsocial_border_color"]) ?>;;
    display: <?php echo $jsocial_styles["jsocial_toggle_display"] ?>;
}
#jsocial .jsocial-toggle-button i {

    color: <?php echo ($jsocial_styles["jsocial_toggle_text_color_opacity"] < 1 ? $jsocial_styles["jsocial_toggle_text_color_rgba"] : $jsocial_styles["jsocial_toggle_text_color"]) ?>;;
}
#jsocial .jsocial-body {
    background: <?php echo ($jsocial_styles["jsocial_color_opacity"] < 1 ? $jsocial_styles["jsocial_color_rgba"] : $jsocial_styles["jsocial_color"]) ?>;
    border: <?php echo $jsocial_styles["jsocial_border_width"].'px'; ?> solid <?php echo ($jsocial_styles["jsocial_border_color_opacity"] < 1 ? $jsocial_styles["jsocial_border_color_rgba"] : $jsocial_styles["jsocial_border_color"]) ?>;;
}

#jsocial .jsocial-body [data-jsocial=googlePlus] .jsocial-share {
    background: <?php echo ($jsocial_styles["jsocial_google_color_opacity"] < 1 ? $jsocial_styles["jsocial_google_color_rgba"] : $jsocial_styles["jsocial_google_color"]) ?>;
}
#jsocial .jsocial-body [data-jsocial=facebook] .jsocial-share {
     background: <?php echo ($jsocial_styles["jsocial_facebook_color_opacity"] < 1 ? $jsocial_styles["jsocial_facebook_color_rgba"] : $jsocial_styles["jsocial_facebook_color"]) ?>;

}
#jsocial .jsocial-body [data-jsocial=twitter] .jsocial-share {
     background: <?php echo ($jsocial_styles["jsocial_twitter_color_opacity"] < 1 ? $jsocial_styles["jsocial_twitter_color_rgba"] : $jsocial_styles["jsocial_twitter_color"]) ?>;

}
#jsocial .jsocial-body [data-jsocial=digg] .jsocial-share {
     background: <?php echo ($jsocial_styles["jsocial_digg_color_opacity"] < 1 ? $jsocial_styles["jsocial_digg_color_rgba"] : $jsocial_styles["jsocial_digg_color"]) ?>;

}
#jsocial .jsocial-body [data-jsocial=delicious] .jsocial-share {
     background: <?php echo ($jsocial_styles["jsocial_delicious_color_opacity"] < 1 ? $jsocial_styles["jsocial_delicious_color_rgba"] : $jsocial_styles["jsocial_delicious_color"]) ?>;

}
#jsocial .jsocial-body [data-jsocial=stumbleupon] .jsocial-share {
     background: <?php echo ($jsocial_styles["jsocial_stumbleupon_color_opacity"] < 1 ? $jsocial_styles["jsocial_stumbleupon_color_rgba"] : $jsocial_styles["jsocial_stumbleupon_color"]) ?>;

}
#jsocial .jsocial-body [data-jsocial=linkedin] .jsocial-share {
     background: <?php echo ($jsocial_styles["jsocial_linkedin_color_opacity"] < 1 ? $jsocial_styles["jsocial_linkedin_color_rgba"] : $jsocial_styles["jsocial_linkedin_color"]) ?>;

}
#jsocial .jsocial-body [data-jsocial=pinterest] .jsocial-share {
     background: <?php echo ($jsocial_styles["jsocial_pinterest_color_opacity"] < 1 ? $jsocial_styles["jsocial_pinterest_color_rgba"] : $jsocial_styles["jsocial_pinterest_color"]) ?>;

}

#jsocial .jsocial-item .jsocial-share {
    padding: 10px;
    color: <?php echo $jsocial_styles["jsocial_icon_color"] ?>;
    border-radius: <?php echo $jsocial_styles["jsocial_icon_radius"].'%'; ?>;
}
#jsocial .jsocial-item .jsocial-count {
    color: <?php echo ($jsocial_styles["jsocial_count_color_opacity"] < 1 ? $jsocial_styles["jsocial_count_color_rgba"] : $jsocial_styles["jsocial_count_color"]) ?>;;
}
<?php } ?>