$(document).on("click", "[data-bs-toggle='tab']", function (e) {
    // $(".loading").show()
    var target_element = $(e.currentTarget).data('content');
    var target = $(e.currentTarget).attr('href');
    var tab = $(target);
    var tabBody = $(target + ' .tab-content');
    tabBody.load(target_element);
    // $(".loading").hide()

})

$(window).on('load', function () {
    var target_element = $(".first_tab").find("a").data("content");
    var target = $(".first_tab").find("a").attr("href");
    var tab = $(target);
    var tabBody = $(target + ' .tab-content');

    tabBody.load(target_element);
})
