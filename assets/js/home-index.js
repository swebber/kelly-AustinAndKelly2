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
    
    $('#rsvpForm').validator({
        focus: false,
        custom: {
            'trans': function($el) {
                if ($el.val() === 'NA' && $('#willAttend').val() === '1')
                    return 'Let us know if you need transportation';
            }
        }
    });
    
    $('#submitBtn').on('click', function(e) {
        $('#rsvpForm').validator('validate');
        var isValid = !e.isDefaultPrevented();
        if (isValid) {
            e.preventDefault();
        }
    });
});