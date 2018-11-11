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
    slidesToScroll: 3,
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
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 1500,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 5000,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        }
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
    $( "<div class='new'><span>NEW!</span></div>" ).appendTo( $( ".new .product-item_carousel" ) );
    $( "<div class='limited'>Обмежена серія!</div>" ).appendTo( $( ".limited .product-item_carousel" ) );
});


$(document).ready(function(){
    $('#billing_nova_poshta_warehouse_field, #billing_nova_poshta_region_field, #billing_nova_poshta_city_field').wrapAll('<div class="np_Wrapper">');
});

if ($(window).width() < 576) {
    $(document).ready(function () {
        $('.product-item').css('display', 'none');
        $('.products-container').append("<button id='loadMore'>Завантажити більше гаманців</button>");

        $(".product-item").slice(0, 2).show();

        $("#loadMore").on('click', function (e) {
            e.preventDefault();

            $(".product-item:hidden").slice(0, 2).fadeIn();
            $('.product-item .slick-active').trigger('click');

            if ($(".product-item:hidden").length == 0) {
                $("#loadMore").fadeOut('slow');
            }
        });
    });
}


$(document).on('click',function() {
    var myLink = $('.add_to_cart_button');
    if (myLink.hasClass('loading')) {
        $('.add_to_cart_button.loading').closest('li.product-item').addClass('loading');
    }
    else {
        $('.add_to_cart_button').closest('li.product-item').removeClass('loading');
    }
});