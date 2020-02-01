$(function() {

    $(".photos-slider-widget .photos-slider-container").map((i, element) => {

        tns({
            container: element,
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
    })

});