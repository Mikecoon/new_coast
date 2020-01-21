$(function() {

    if ($('#photos-slider').length) {
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
    }
    

    $('.content-row:not(.reverse) .slider').map((i, element) => {

        tns({
            container: element,
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
    });

    $('.content-row.reverse .slider').map((i, element) => {

        tns({
            container: element,
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
    });

});