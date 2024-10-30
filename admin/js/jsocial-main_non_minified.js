/*global jQuery:false,jsocial_admin:false */
'use strict';
jQuery.noConflict();
(function($) {
    $(window).load(function() {
        $('.icheck').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue'
        });
        $('.switch').bootstrapSwitch({
            size: 'small'
        });
        $('#jsocial_positions').on({
            'click': function() {
                var position = $(this).val();
                $('#jsocial_positions_image').fadeOut('fast', function() {
                    $(this).attr('src', jsocial_admin.url + 'images/' + position + '.png').slideDown('slow');
                });
            }
        });
        $('#jsocial_positions_image').attr('src', jsocial_admin.url + 'images/side_left_center.png');
        $('.stepper').stepper();
        $('.minicolors').minicolors({
            animationSpeed: 50,
            animationEasing: 'swing',
            change: null,
            changeDelay: 200,
            control: 'hue',
            defaultValue: '',
            hide: null,
            hideSpeed: 100,
            inline: false,
            letterCase: 'uppercase',
            opacity: true,
            position: 'bottom left',
            show: null,
            showSpeed: 100,
            theme: 'bootstrap'
        });
        $('#jsocial_styles').submit(function() {
            var minicolor, rgba, opacity;
            $('.minicolors').each(function() {
                minicolor = $(this).attr('name');
                if (minicolor) {
                    rgba = $(this).minicolors('rgbaString');
                    opacity = $(this).attr('data-opacity');
                    if (rgba) {
                        $('input[name="' + minicolor + '_rgba' + '"]').val(rgba);
                    } else {
                        $('input[name="' + minicolor + '_rgba' + '"]').val('');
                    }
                    if (opacity) {
                        $('input[name="' + minicolor + '_opacity' + '"]').val(opacity);
                    } else {
                        $('input[name="' + minicolor + '_opacity' + '"]').val('1');
                    }
                }
            });
        });
        $(document).on('click', '.panel div.clickable', function() {
            var $this = $(this);
            if (!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.parents('.panel').find('.panel-footer').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('i').removeClass('fa-minus').addClass('fa-plus');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.parents('.panel').find('.panel-footer').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('i').removeClass('fa-plus').addClass('fa-minus');
            }
        });
        if ($('.jsocial-submitted').length) {
            $('.panel div.clickable').not('.jsocial-submitted').click();
        }
    });
})(jQuery);
