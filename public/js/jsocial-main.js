"use strict";jQuery.noConflict(),function(a){a(window).load(function(){function d(){a("#jsocial .jsocial-body").toggle("slow")}function h(){var b=a("#jsocial .jsocial-body").css("border-radius").replace(/0px/g,"").split(" ");b=a.grep(b,function(a){return""!==a}),a("#jsocial .jsocial-body").css({"border-radius":b[0]})}function i(){a("#jsocial .jsocial-body").css({margin:"0px"}),a("#jsocial").hasClass("jsocial-side")?(a("#jsocial").hasClass("jsocial-right")?a("#jsocial .jsocial-body").css({"border-right":"none"}):a("#jsocial").hasClass("jsocial-left")&&a("#jsocial .jsocial-body").css({"border-left":"none"}),a("#jsocial").hasClass("jsocial-top")&&a("#jsocial .jsocial-body").css({"border-top":"none"}),a("#jsocial").hasClass("jsocial-bottom")&&a("#jsocial .jsocial-body").css({"border-bottom":"none"})):a("#jsocial").hasClass("jsocial-extremity")&&(a("#jsocial").hasClass("jsocial-top")?a("#jsocial .jsocial-body").css({"border-top":"none"}):a("#jsocial").hasClass("jsocial-bottom")&&a("#jsocial .jsocial-body").css({"border-bottom":"none"}),a("#jsocial").hasClass("jsocial-left")&&a("#jsocial .jsocial-body").css({"border-left":"none"}),a("#jsocial").hasClass("jsocial-right")&&a("#jsocial .jsocial-body").css({"border-right":"none"}))}if("undefined"!=typeof jsocial_attr){var b=jsocial_attr;b||(b={}),b.jsocial_sizes||(b.jsocial_sizes="fa-lg");var c=a("#jsocial .jsocial-item").length;if(a("#jsocial .jsocial-item").each(function(){var e=a(this).attr("data-jsocial"),f='<a class="jsocial-box" href="#">',g={},h={googlePlus:"fa-google-plus",facebook:"fa-facebook",twitter:"fa-twitter",digg:"fa-digg",delicious:"fa-delicious",stumbleupon:"fa-stumbleupon",linkedin:"fa-linkedin",pinterest:"fa-pinterest"};g[e]=!0,f=f+'<div class="jsocial-share '+b.jsocial_hover+'"><i class="fa '+b.jsocial_sizes+" "+h[e]+'"></i></div>',b.jsocial_count||(f+='<strong class="jsocial-count">{total}</strong>'),f+="</a>",a(this).sharrre({urlCurl:b.jsocial_ajax_url,share:g,template:f,enableHover:!1,enableTracking:!1,click:function(a){a.simulateClick(),a.openPopup(e)},render:function(){if(c--,0===c){if(a("#jsocial").hasClass("jsocial-extremity")){var e,f;e=a("#jsocial .jsocial-toggle-button").outerWidth(),f=a("#jsocial .jsocial-body").outerWidth(),e>f?a("#jsocial .jsocial-body").css({padding:"0px"}).animate({paddingRight:"+="+e/2+"px",paddingLeft:"+="+e/2+"px"},800):a("#jsocial .jsocial-body").attr("style",function(a,b){return b?b.replace(/padding[^;]+;?/g,""):void 0})}b.jsocial_toggled&&"none"!==a("#jsocial .jsocial-toggle-button").css("display")?(a("#jsocial").css("visibility","visible"),d()):a("#jsocial").css({visibility:"visible",display:"none"}).show("slow")}}})}),a("#jsocial .jsocial-toggle-button").click(function(){return a("#jsocial .jsocial-toggle-button").is(":visible")&&d(),!1}),a("#jsocial").hasClass("jsocial-side")?a("#jsocial").hasClass("jsocial-right")?a("#jsocial .jsocial-toggle-button").css({left:"-"+(a("#jsocial .jsocial-toggle-button").outerWidth(!0)-1)+"px"}):a("#jsocial").hasClass("jsocial-left")&&a("#jsocial .jsocial-toggle-button").css({right:"-"+(a("#jsocial .jsocial-toggle-button").outerWidth(!0)-1)+"px"}):a("#jsocial").hasClass("jsocial-extremity")&&(a("#jsocial").hasClass("jsocial-top")&&a("#jsocial .jsocial-toggle-button").css({bottom:"-"+(a("#jsocial .jsocial-toggle-button").outerHeight(!0)-1)+"px"}),a("#jsocial").hasClass("jsocial-bottom")&&a("#jsocial .jsocial-toggle-button").css({top:"-"+(a("#jsocial .jsocial-toggle-button").outerHeight(!0)-1)+"px"})),a("#jsocial .jsocial-body").hasClass("jsocial-margin")){var e,f,g={};a("#jsocial").hasClass("jsocial-side")?a("#jsocial").hasClass("jsocial-right")?(e=a("#jsocial .jsocial-body").css("margin-right"),f="marginRight"):a("#jsocial").hasClass("jsocial-left")&&(e=a("#jsocial .jsocial-body").css("margin-left"),f="marginLeft"):a("#jsocial").hasClass("jsocial-extremity")&&(a("#jsocial").hasClass("jsocial-top")&&(e=a("#jsocial .jsocial-body").css("margin-top"),f="marginTop"),a("#jsocial").hasClass("jsocial-bottom")&&(e=a("#jsocial .jsocial-body").css("margin-bottom"),f="marginBottom")),e&&"0px"!==e?(g[f]="+="+e,a("#jsocial .jsocial-body").css({margin:"0px"}).animate(g,800),h()):i()}else i()}})}(jQuery);