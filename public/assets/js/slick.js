$('.your-class').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    nextArrow: '.fa-arrow-right',
    prevArrow: '.fa-arrow-left',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
$(function() {
    $('.blog-slick').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        dots: false,
        nextArrow: '.right1',
        prevArrow: '.left1',
        responsive: [{
            breakpoint: 769,
            settings: 'unslick',

        }, {
            breakpoint: 700,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 400,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 350,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });

    $(window).on('resize', function() {
        $('.blog-slick').slick('resize');
    });
});
$('.clients').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1

});