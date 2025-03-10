$(document).ready(function() {
    if ($('.home_index').hasClass('active')) {
        $('.home_index').removeClass('active');
        $('.portfolio').addClass('active');
    }

    if (!$('.portfolio').hasClass('active')) {
        $('.portfolio').addClass('active');
    }
});