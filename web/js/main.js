$(function() {
    if (!isTouchDevice()) {
        SimpleScrollbar.initEl(document.body);
    } else {
        $("body").css({height: 'auto', overflow: 'auto'})
    }

    $('.ss-content').on('scroll', event => {
        const content = event.target;
        const scrollTop = $(content).scrollTop();
        handleScroll(scrollTop)
    });

    $(window).on('scroll', () => {
        const scrollTop = $(window).scrollTop();
        handleScroll(scrollTop)
    });

    $("header .menu-toggle").click(toggleMenu)
});

function isTouchDevice() {
    var prefixes = ' -webkit- -moz- -o- -ms- '.split(' ');
    var mq = function(query) {
        return window.matchMedia(query).matches;
    }

    if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) {
        return true;
    }

    // include the 'heartz' as a way to have a non matching MQ to help terminate the join
    // https://git.io/vznFH
    var query = ['(', prefixes.join('touch-enabled),('), 'heartz', ')'].join('');
    return mq(query);
}

function handleScroll(top) {
    $("header").toggleClass('small', top > 0)
}

function toggleMenu(forceState) {
    const menu = $("aside.menu");
    const header = $("header");
    const state = forceState | menu.hasClass('open');

    if (state) {
        menu.removeClass('open');
        header.removeClass("menu-open");

        header.find(".menu-toggle span").text('Меню')


        clearTimeout(window.toggleMenuTimer);
        window.toggleMenuTimer = setTimeout(() => {
            menu.css({height: 0})
        }, 300)

    } else {
        menu.addClass('open').css({height: '100vh'});
        header.addClass("menu-open")
        header.find(".menu-toggle span").text('Закрыть')

    }

}