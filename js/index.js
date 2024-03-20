
$(document).ready(function() {
    $(".slider").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 500,
        // arrows: true,
        autoplaySpeed: 5000,
        infinite: true,
        autoplay: true,
        centerMode: true,
        centerPadding: "0",
        prevArrow: $('.slick-prev'),
        nextArrow: $('.slick-next'),
        responsive: [{
            breakpoint: 768, // Change this value to the desired screen width for medium screens
            settings: {
                slidesToShow: 1, // Change this value to the desired number of slides for medium screens
                slidesToScroll: 1,
                centerMode: false // Change this value if you want to enable or disable center mode for medium screens
            }
        }]
    });
});

$(document).ready(function() {
    $(".sliders").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 500,
        autoplaySpeed: 5000,
        infinite: true,
        autoplay: true,
        centerMode: true,
        centerPadding: "0",
        responsive: [{
            breakpoint: 768, // Change this value to the desired screen width for medium screens
            settings: {
                slidesToShow: 1, // Change this value to the desired number of slides for medium screens
                slidesToScroll: 1,
                centerMode: false // Change this value if you want to enable or disable center mode for medium screens
            }
        }]
    });
});
