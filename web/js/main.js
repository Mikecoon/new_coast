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

    $("#contactform-phone").mask("+7 999 999-99-99")

    $("#contact-form").on('beforeSubmit', event => {
        event.preventDefault();

        const data = new FormData(event.target);

        const success = () => $(event.target).addClass('success');
        const error = () =>  button.html('Ошибка. Отправить еще раз')

        const spinner = $(event.target).find(".lds-ring").clone();
        const button = $(event.target).find("button")
        button.html(spinner)
        spinner.addClass("show")

        $.ajax({
            url: $(event.target).attr('action'),
            data: data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: response => {
                if (response === "1")
                    success();
                else
                    error();
            },
            error: error,
        });

        return false;
    })

    $("#contact-form .close").click(event => {
        $(".contact-form").removeClass('show');
    })

    $(".contact-form").click(event => {
        if (event.target === event.currentTarget)
            $(event.target).removeClass('show')
    })

    $(".show-contact-modal").click(event => $(".contact-form").addClass('show'))
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