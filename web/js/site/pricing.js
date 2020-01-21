$(function() {
    $(".tabs").on('click', '.tab', event => {
        $(event.delegateTarget).find(".tab").removeClass("active").filter(event.target).addClass('active')

        const index = $(event.target).index();

        $(".tables .table").removeClass("active").eq(index).addClass("active")

    })

    $(".read-more").click(event => {
        event.preventDefault()
        $(".about p.hidden").removeClass("hidden")
        $(event.target).remove()

    })
});
