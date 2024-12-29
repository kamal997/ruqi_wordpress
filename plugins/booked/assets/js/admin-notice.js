(function ($) {
    'use strict';
    $(function () {
        $('.booked-outdated-notice').on('click', '.notice-dismiss', function (event, el) {
            var $notice = $(this).parent('.notice.is-dismissible');
            var dismiss_action = $notice.attr('data-dismiss-action');
            if (dismiss_action) {
               $.post(ajaxurl, {'action': dismiss_action}, function(response) {
		});
            }
        });
    });
})(jQuery);