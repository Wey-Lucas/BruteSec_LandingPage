$(document).on('scroll', function () {
    if ($(window).scrollTop() > 30) {
        $('#header').addClass('change-color');
    } else {
        $('#header').removeClass('change-color');
    }
});