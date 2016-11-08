$(document).ready(function () {
    $('#navbar li').bind('click', function(e) {
        var anchor = $(this).find('a');
        $('#navbar li').removeClass('active');
        $(this).addClass('active');
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top + 10
        }, 1500, 'easeInOutExpo');
        e.preventDefault();
    });

    $('.navbar-brand').bind('click', function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        e.preventDefault();
    });
});