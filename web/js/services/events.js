$(function() {

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

    $(".btn-show-scheme").click((event) => {
        $(".modal").toggleClass("show");

        const block = $(event.target).closest(".content-row");
        const data = block.data('scheme');

        $(".modal span").each((i, element) => $(element).text(data[i]))

    })

    $(".modal").click(event => {
        if($(event.target).hasClass("ss-content")) {
            $(".modal").removeClass("show");
        }
    })

    if (!isTouchDevice()) {
        SimpleScrollbar.initEl($(".modal")[0]);
    } else {

    }

});