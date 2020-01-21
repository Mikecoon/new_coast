$(function() {

    var servicesSlider = tns({
        container: '#services-slider',
        items: 3,
        slideBy: 1,
        nav: false,
        mouseDrag: true,
        swipeAngle: 90,
        controlsText: [
            '<img src="/images/site/icons/arrow.svg">',
            '<img src="/images/site/icons/arrow.svg">'
        ]
    });

    var albumsSlider = tns({
        container: '#albums-slider',
        items: 3,
        slideBy: 1,
        nav: false,
        mouseDrag: true,
        swipeAngle: 90,
        controlsText: [
            '<img src="/images/site/icons/arrow.svg">',
            '<img src="/images/site/icons/arrow.svg">'
        ]
    });

})