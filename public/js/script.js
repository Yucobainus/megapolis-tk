$(document).ready(function () {

    $('.slick-slider').slick({
        lazyLoad: 'ondemand',
        arrows: true,
        dots: true,
        initialSlide: 4,
        prevArrow: $('#slLeft'),
        nextArrow: $('#slRight'),
        autoplay: true,
        autoplaySpeed: 2000,
    })

    $('#bul-slider').slick({
        lazyLoad: 'ondemand',
        arrows: true,
        prevArrow: $('.bul-prev'),
        nextArrow: $('.bul-next'),
        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 680,
            settings: {
                slidesToShow: 1,
            }
        }
        ],

    })

    $('#gar-slider').slick({
        lazyLoad: 'ondemand',
        arrows: true,
        prevArrow: $('.gard-prev'),
        nextArrow: $('.gard-next'),
        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 680,
            settings: {
                slidesToShow: 1,
            }
        }
        ],

    })


    $('#dar-slider').slick({
        lazyLoad: 'ondemand',
        arrows: true,
        prevArrow: $('.dar-prev'),
        nextArrow: $('.dar-next'),
        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 680,
            settings: {
                slidesToShow: 1,
            }
        }
        ],

    })



    $('#well-slider').slick({
        lazyLoad: 'ondemand',
        arrows: true,
        prevArrow: $('.well-prev'),
        nextArrow: $('.well-next'),
        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 680,
            settings: {
                slidesToShow: 1,
            }
        }
        ],

    })
    $('#fire-slider').slick({
        lazyLoad: 'ondemand',
        arrows: true,
        prevArrow: $('.fire-prev'),
        nextArrow: $('.fire-next'),
        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 680,
            settings: {
                slidesToShow: 1,
            }
        }
        ],

    })



    $('.about .partner-slider').slick({
        arrows: false,
        autoplay: true,
        slidesToShow: 4,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 769,
            settings: {
                slidesToShow: 2
            }
        }]
    })

    $('#menu-toggle').click(function () {
        if ($('nav .nav-list').hasClass('nav-open')) {
            $('nav .nav-list').removeClass('nav-open')
        } else {
            $('nav .nav-list').addClass('nav-open')
        }
    })



    $('#cog').click(function () {
        $('.text-section p').text('sdadsadasd')
    })



})
