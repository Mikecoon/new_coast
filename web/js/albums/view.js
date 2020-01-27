$(() => {

    tns({
        container: "#photos-slider",
        items: 3,
        navContainer: "#customize-thumbnails",
        navAsThumbnails: true,
        speed: 400,
        autoWidth: true,
        slideBy: 1,
        mouseDrag: true,
        swipeAngle: 90,
        center: true,
        gutter: 15,
        nav: true,
        controlsText: [
            '<img src="/images/site/icons/arrow-white.svg">',
            '<img src="/images/site/icons/arrow-white.svg">'
        ]
    });

});