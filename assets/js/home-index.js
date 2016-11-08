$(document).ready(function () {
    $('#navbar li').bind('click', function(e) {
        var anchor = $(this).find('a');
        $('#navbar li').removeClass('active');
        $(this).addClass('active');
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 50
        }, 1500, 'easeInOutExpo');
        e.preventDefault();
    });

    $('.navbar-brand').bind('click', function(e) {
        var anchor = $(this);
        $('#navbar li').removeClass('active');
        $(this).addClass('active');
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 50
        }, 1500, 'easeInOutExpo');
        e.preventDefault();
    });
});