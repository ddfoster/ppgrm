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

