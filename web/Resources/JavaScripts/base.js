$(document).ready(function() {
    setTimeout(removeLoadingOverlay, 800);

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function() {
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top'
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // set current year in copyright
    $('.current-year').html(new Date().getFullYear());

    // Form changes
    $('.form-group.imInApero').change(function() {
        if($('#imInYes').is(':checked')) {
            $('.form-group.count').show();
        }
        if($('#imInNo').is(':checked')) {
            $('.form-group.count').hide();
        }
    });

    $('.form-group.imInEssen').change(function() {
        if($('#imInYes').is(':checked')) {
            $('.form-group.count').show();
            $('.form-group.attending').show();
            $('.form-group.mealtype').show();
            $('.form-group.travelBy').show();
        }
        if($('#imInNo').is(':checked')) {
            $('.form-group.count').hide();
            $('.form-group.attending').hide();
            $('.form-group.mealtype').hide();
            $('.form-group.travelBy').hide();
        }
    });
    //Start carousel
    $('.carousel').carousel({interval:false});
});

function removeLoadingOverlay() {
    imagesLoaded($('body'), function() {
        $('.loadingOverlay').fadeOut('slow');
    });
}

