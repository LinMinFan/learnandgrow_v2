$(document).ready(function() {
    if ($('.home_index').hasClass('active')) {
        $('.home_index').removeClass('active');
        $('.contact').addClass('active');
    }

    if (!$('.contact').hasClass('active')) {
        $('.contact').addClass('active');
    }
});