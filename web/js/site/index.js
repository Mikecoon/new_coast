$(function() {


    $('#index-form-arrival, #index-form-departure').datepicker({
        language: 'ru-RU',
        autoHide: true,
    });

    var aboutHotelSlider = tns({
        container: '#about-hotel-slider',
        items: 2,
        slideBy: 1,
        gutter: 15,
        nav: false,
        mouseDrag: true,
        swipeAngle: 90,
        controlsText: [
            '<img src="/images/site/icons/arrow.svg">',
            '<img src="/images/site/icons/arrow.svg">'
        ]

    });

    var featuresSlider = tns({
        container: '#features-slider',
        items: 1,
        slideBy: 1,
        nav: false,
        mouseDrag: true,
        swipeAngle: 90,
        controlsText: [
            '<img src="/images/site/icons/arrow-white.svg">',
            '<img src="/images/site/icons/arrow-white.svg">'
        ]

    });

});