jQuery(function () {
    "use strict";


    var elem = jQuery(".wpnotif-countrylist");

    var selected_input;

    var isShown = 0;
    jQuery(window).on("popstate", function (e) {
        if (elem.is(':visible')) {
            isShown = 0;
            hide_country_list();
        }
    });

    jQuery(document).on("focus", ".wpnotif_countrycode", function (e) {

        var elem_type = elem.data('type');
        selected_input = jQuery(this);
        if (elem_type == 'mobile') {

            window.history.pushState({state: "open_countrycode"}, null, "");
            elem.show().parent().fadeIn('fast', function () {
                jQuery(this).find('.wpnotif_countrycode_search').focus();
            });
            isShown = 1;
            return;
        }
        var $this = jQuery(this).parent().parent();
        var parentForm = $this;
        parentForm.append(elem);

        var nextNode = elem.find('li.selected');
        highlight(nextNode);

        elem.css({'top': $this.outerHeight(false) - 1}).show();

        isShown = 1;
    });

    jQuery(document).on("click", ".wpnotif-hide-countrycode", function () {
        if (elem.is(':visible') && isShown == 1) {
            history.back();
        }
    });

    jQuery(document).on("focusout", ".wpnotif_countrycode", function (e) {
        var elem_type = elem.data('type');

        if (elem_type == 'mobile') return;

        elem.hide();

        isShown = 0;
    });

    function hide_country_list() {
        elem.parent().fadeOut('fast', function () {
            elem.find('.wpnotif_countrycode_search').val('').trigger('keydown');
        });
        isShown = 0;
    }

    jQuery(document).on("keydown", ".wpnotif_countrycode, .wpnotif_countrycode_search", function (e) {
        if (isShown == 0) jQuery(this).trigger('focus');
        switch (e.which) {
            case 38: // Up
                var visibles = elem.find('li.wpnotif-cc-visible:not([disabled])');
                var nextNode = elem.find('li.selected').prev();
                var nextIndex = visibles.index(nextNode.length > 0 ? nextNode : visibles.last());
                highlight(nextIndex);
                e.preventDefault();
                return false;
                break;
            case 40:

                var visibles = elem.find('li.wpnotif-cc-visible:not([disabled])');
                var nextNode = elem.find('li.selected').next();

                var nextIndex = visibles.index(nextNode.length > 0 ? nextNode : visibles.first());
                highlight(nextIndex);
                e.preventDefault();
                return false;
                break;
            case 13:
                selectCode();
                return false;
                break;
            case 9:  // Tab
            case 27: //ESC
                var elem_type = elem.data('type');
                if (elem_type != 'mobile')
                    elem.hide();
                break;
            default:
                var hiddens = 0;
                var curInput = jQuery(document.activeElement);
                var input = curInput.val().toLowerCase().trim().replace(/[^a-z]+/gi, "");
                elem.find('li').each(function (index) {
                    var attr = jQuery(this).data('country');
                    if (attr.startsWith(input)) {
                        highlight(index);
                        return false;
                    }
                });


                break;
        }


    });


    function selectCode() {

        if (elem.is(':visible')) {
            var selEle;

            selEle = elem.find('li.selected');
            if (!selEle.length) {
                selEle = elem.find('li').first();
            }

            selected_input.val("+" + selEle.attr('value'));
            selected_input.trigger('keyup');
            if (elem.data('type') == 'mobile') {
                elem.parent().find('.wpnotif-hide-countrycode').trigger('click');
            } else {
                elem.hide();
            }
            isShown = 0;
        }
    }

    function highlight(index) {
        setTimeout(function () {

            var visibles = elem.find('li');
            var oldSelected = elem.find('li.selected').removeClass('selected');
            var oldSelectedIndex = visibles.index(oldSelected);
            if (visibles.length > 0) {
                var selectedIndex = (visibles.length + index) % visibles.length;
                var selected = visibles.eq(selectedIndex);
                var top = 0;
                if (selected.length > 0) {
                    top = selected.position().top;
                    selected.addClass('selected');
                }

                if (selectedIndex > oldSelectedIndex && top + selected.outerHeight() > elem.outerHeight()) {
                    elem.scrollTo(".selected");
                } else {
                    elem.scrollTop(elem.scrollTop() + top);
                }

            }
        });
    }

    elem.on('mousemove', 'li:not([disabled])', function () {

        elem.find('.selected').removeClass('selected');
        jQuery(this).addClass('selected');

    }).on('mousedown click', 'li', function (e) {

        if (elem.is('[disabled]')) e.preventDefault();
        else {
            elem.find('.selected').removeClass('selected');
            jQuery(this).addClass('selected');
        }
        selectCode();
    }).on('mouseup', function () {
        elem.find('li.selected').removeClass('selected');
    });


});



function showWPNotifErrorMessage(message) {
    showWPNotifMessage(message, 3);
}

function showWPNotifNoticeMessage(message) {
    showWPNotifMessage(message, 2);
}

function showWPNotifSuccessMessage(message) {
    showWPNotifMessage(message, 1);
}

function showWPNotifMessage(message, alert_type) {

    jQuery(".wpnotif_popmessage").remove();

    jQuery("body").append("<div class='wpnotif_popmessage wpnotif_popmessage_right wpnotif_error_message'><div class='div_popmessage_contents'><div class='wpnotif_firele'></div><div class='wpnotif_lasele'><div class='wpnotif_lase_snap'></div><div class='wpnotif_lase_message'>" + message + "</div></div><div class='wpnotif_popdismiss'></div></div></div>");

    var alert_class;
    var message_type;
    if (alert_type === 1) {
        alert_class = 'wpnotif_success_msg';
        message_type = wpn_frontend.yay;
    } else if (alert_type === 2) {
        alert_class = 'wpnotif_notice_msg';
        message_type = wpn_frontend.notice;
    } else {
        alert_class = 'wpnotif_success_msg';
        message_type = wpn_frontend.yay;
    }

    jQuery(".wpnotif_popmessage").show().removeClass('wpnotif_success_msg wpnotif_notice_msg wpnotif_critical_msg').addClass(alert_class + ' wpnotif_popBounceInRight').find('.wpnotif_lase_snap').text(message_type);

}

function hideWPNotifMessage() {
    jQuery(".wpnotif_popmessage").fadeOut('fast', function () {
        jQuery(this).remove();
    });
}
