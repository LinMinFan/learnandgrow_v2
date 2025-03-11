$(document).ready(function() {
    if ($('.home_index').hasClass('active')) {
        $('.home_index').removeClass('active');
        $('.member').addClass('active');
    }

    if (!$('.member').hasClass('active')) {
        $('.member').addClass('active');
    }
});