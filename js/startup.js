jQuery(document).ready(function (jQuery) {
    jQuery('#rewards.logged input[type=checkbox]').click(function () {
        jQuery(this).toggleClass('on');
    });

    jQuery("#messages").delay(2000).fadeTo(1000, 0).slideUp(500, function () {
        jQuery("#messages").alert('close');
    });

    jQuery('.princess').popover();
    
    jQuery('[data-toggle="confirmation"]').confirmation({
        onConfirm: function () {
            jQuery('form').submit();
        },
        btnOkClass: 'btn btn-danger btn-sm btn-block',
        btnOkLabel: 'Confirmer',
        btnOkIcon: 'fa fa-check',
        btnCancelClass: 'btn btn-default btn-sm btn-block',
        btnCancelLabel: 'Annuler',
        btnCancelIcon: 'fa fa-remove',
        singleton: true,
        popout: true,
    });
    
//    $('#fullscreen').click(function () {
//        if (screenfull.enabled) {
//            screenfull.toggle($('#page')[0]);
//        }
//    });
});