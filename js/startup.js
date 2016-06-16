$(document).ready(function ($) {
    $('#rewards.logged input[type=checkbox]').click(function () {
        $(this).toggleClass('on');
    });

    $("#messages").delay(2000).fadeTo(1000, 0).slideUp(500, function () {
        $("#messages").alert('close');
    });

    $('.princess').popover();
    
    $('[data-toggle="confirmation"]').confirmation({
        onConfirm: function () {
            $('form').submit();
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