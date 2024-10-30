/*global jQuery:false,jsocial_attr:false */
'use strict';
jQuery.noConflict();
(function($) {
    $(window).load(function() {
        if (typeof jsocial_attr === 'undefined') {
            return;
        }
        var options = jsocial_attr;
        if (!options) {
            options = {};
        }
        if (!options.jsocial_sizes) {
            options.jsocial_sizes = 'fa-lg';
        }
        var jsociaItems = $('#jsocial .jsocial-item').length;
        $('#jsocial .jsocial-item').each(function() {
            var id = $(this).attr('data-jsocial');
            var template = '<a class="jsocial-box" href="#">';
            var share = {};
            var texts = {
                googlePlus: 'fa-google-plus',
                facebook: 'fa-facebook',
                twitter: 'fa-twitter',
                digg: 'fa-digg',
                delicious: 'fa-delicious',
                stumbleupon: 'fa-stumbleupon',
                linkedin: 'fa-linkedin',
                pinterest: 'fa-pinterest'
            };
            share[id] = true;
            template = template + '<div class="jsocial-share ' + options.jsocial_hover + '"><i class="fa ' + options.jsocial_sizes + ' ' + texts[id] + '"></i></div>';
            if (!options.jsocial_count) {
                template = template + '<strong class="jsocial-count">{total}</strong>';
            }
            template = template + '</a>';
            $(this).sharrre({
                urlCurl: options.jsocial_ajax_url,
                share: share,
                template: template,
                enableHover: false,
                enableTracking: true,
                click: function(api) {
                    api.simulateClick();
                    api.openPopup(id);
                },
                render: function() {
                    jsociaItems--;
                    if (jsociaItems === 0) {
                        if ($('#jsocial').hasClass('jsocial-extremity')) {
                            var chButWidth, chBodyWidth;
                            chButWidth = $('#jsocial .jsocial-toggle-button').outerWidth();
                            chBodyWidth = $('#jsocial .jsocial-body').outerWidth();
                            if (chButWidth > chBodyWidth) {
                                $('#jsocial .jsocial-body').css({
                                    padding: '0px'
                                }).animate({
                                    'paddingRight': '+=' + (chButWidth / 2) + 'px',
                                    'paddingLeft': '+=' + (chButWidth / 2) + 'px'
                                }, 800);
                            } else {
                                $('#jsocial .jsocial-body').attr('style', function(i, style) {
                                    if (style) {
                                        return style.replace(/padding[^;]+;?/g, '');
                                    }
                                });
                            }
                        }
                        if (options.jsocial_toggled && $('#jsocial .jsocial-toggle-button').css('display') !== 'none') {
                            $('#jsocial').css('visibility', 'visible');
                            jsocialToggle();
                        } else {
                            $('#jsocial').css({
                                'visibility': 'visible',
                                'display': 'none'
                            }).show('slow');
                        }
                    }
                }
            });
        });
        function jsocialToggle() {
            $('#jsocial .jsocial-body').toggle('slow');
        }
        $('#jsocial .jsocial-toggle-button').click(function() {
            if ($('#jsocial .jsocial-toggle-button').is(':visible')) {
                jsocialToggle();
            }
            return false;
        });
        if ($('#jsocial').hasClass('jsocial-side')) {
            if ($('#jsocial').hasClass('jsocial-right')) {
                $('#jsocial .jsocial-toggle-button').css({
                    left: '-' + ($('#jsocial .jsocial-toggle-button').outerWidth(true) - 1) + 'px'
                });
            } else if ($('#jsocial').hasClass('jsocial-left')) {
                $('#jsocial .jsocial-toggle-button').css({
                    right: '-' + ($('#jsocial .jsocial-toggle-button').outerWidth(true) - 1) + 'px'
                });
            }
        } else if ($('#jsocial').hasClass('jsocial-extremity')) {
            if ($('#jsocial').hasClass('jsocial-top')) {
                $('#jsocial .jsocial-toggle-button').css({
                    bottom: '-' + ($('#jsocial .jsocial-toggle-button').outerHeight(true) - 1) + 'px'
                });
            }
            if ($('#jsocial').hasClass('jsocial-bottom')) {
                $('#jsocial .jsocial-toggle-button').css({
                    top: '-' + ($('#jsocial .jsocial-toggle-button').outerHeight(true) - 1) + 'px'
                });
            }
        }
        if ($('#jsocial .jsocial-body').hasClass('jsocial-margin')) {
            var marginValue, marginPosition, marginAnimate = {};
            if ($('#jsocial').hasClass('jsocial-side')) {
                if ($('#jsocial').hasClass('jsocial-right')) {
                    marginValue = $('#jsocial .jsocial-body').css('margin-right');
                    marginPosition = 'marginRight';
                } else if ($('#jsocial').hasClass('jsocial-left')) {
                    marginValue = $('#jsocial .jsocial-body').css('margin-left');
                    marginPosition = 'marginLeft';
                }
            } else if ($('#jsocial').hasClass('jsocial-extremity')) {
                if ($('#jsocial').hasClass('jsocial-top')) {
                    marginValue = $('#jsocial .jsocial-body').css('margin-top');
                    marginPosition = 'marginTop';
                }
                if ($('#jsocial').hasClass('jsocial-bottom')) {
                    marginValue = $('#jsocial .jsocial-body').css('margin-bottom');
                    marginPosition = 'marginBottom';
                }
            }
            if (!marginValue || marginValue === '0px') {
                jsocialMargin();
            } else {
                marginAnimate[marginPosition] = '+=' + marginValue;
                $('#jsocial .jsocial-body').css({
                    margin: '0px'
                }).animate(marginAnimate, 800);
                jsocialRadius();
            }
        } else {
            jsocialMargin();
        }
        function jsocialRadius() {
            var radius = $('#jsocial .jsocial-body').css('border-radius').replace(/0px/g, '').split(' ');
            radius = $.grep(radius, function(css) {
                return (css !== '');
            });
            $('#jsocial .jsocial-body').css({
                'border-radius': radius[0]
            });
        }
        function jsocialMargin() {
            $('#jsocial .jsocial-body').css({
                margin: '0px'
            });
            if ($('#jsocial').hasClass('jsocial-side')) {
                if ($('#jsocial').hasClass('jsocial-right')) {
                    $('#jsocial .jsocial-body').css({
                        'border-right': 'none'
                    });
                } else if ($('#jsocial').hasClass('jsocial-left')) {
                    $('#jsocial .jsocial-body').css({
                        'border-left': 'none'
                    });
                }
                if ($('#jsocial').hasClass('jsocial-top')) {
                    $('#jsocial .jsocial-body').css({
                        'border-top': 'none'
                    });
                }
                if ($('#jsocial').hasClass('jsocial-bottom')) {
                    $('#jsocial .jsocial-body').css({
                        'border-bottom': 'none'
                    });
                }
            } else if ($('#jsocial').hasClass('jsocial-extremity')) {
                if ($('#jsocial').hasClass('jsocial-top')) {
                    $('#jsocial .jsocial-body').css({
                        'border-top': 'none'
                    });
                } else if ($('#jsocial').hasClass('jsocial-bottom')) {
                    $('#jsocial .jsocial-body').css({
                        'border-bottom': 'none'
                    });
                }
                if ($('#jsocial').hasClass('jsocial-left')) {
                    $('#jsocial .jsocial-body').css({
                        'border-left': 'none'
                    });
                }
                if ($('#jsocial').hasClass('jsocial-right')) {
                    $('#jsocial .jsocial-body').css({
                        'border-right': 'none'
                    });
                }
            }
        }
    });
})(jQuery);
