$(function() {

    const photosSlider = tns({
        container: '#photos-slider',
        items: 2,
        slideBy: 1,
        nav: false,
        mouseDrag: true,
        autoWidth: true,
        gutter: 15,
        edgePadding: 150,
        swipeAngle: 90,
        controlsText: [
            '<img src="/images/site/icons/arrow.svg">',
            '<img src="/images/site/icons/arrow.svg">'
        ]
    });

});