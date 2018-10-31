//scroll
$('a[href*="#"]')
// Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1500, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });
//scroll end

//header fixed

$(window).scroll(function () {
    if ($(this).scrollTop() > 50){
        $('.header').addClass("header-fixed");
    }
    else {
        $('.header').removeClass("header-fixed");
    }
});

//header-fixed-end
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    swipe: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows: false,
    centerMode: false,
    focusOnSelect: true,
    vertical: true,
    swipe: true,
    responsive: [
        {
            breakpoint: 576,
            settings: {
                vertical: false
            }
        },
        {
            breakpoint: 768,
            settings: {
                vertical: true,
            }
        },
        {
            breakpoint: 1500,
            settings: {
                slidesToShow: 3,
            }
        },
        // {
        //     breakpoint: 4000,
        //     settings: {
        //         slidesToShow: 4,
        //     }
        // },
    ]
});
$('.single-item').slick({

    slidesToShow: 4,
    slidesToScroll: 3,
    dots: false,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                dots: true,
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 576,
            settings: {
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
    ]
});
$('.product-item_carousel').slick({
    arrows: false,
    dots: true
});

$(document).ready(function() {
    $('#billing_country').val('UA');
});


$(document).ready(function() {
    $( "<div class='new'>NEW!</div>" ).appendTo( $( ".new .product-item_carousel" ) );
    $( "<div class='limited'>Обмежена серія!</div>" ).appendTo( $( ".limited .product-item_carousel" ) );
});
