$(function() {

    $(".useful-info-widget .slider").each((i, element) => {
        const servicesSlider = tns({
            container: element,
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

})