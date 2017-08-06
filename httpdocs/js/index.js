function responsive() {
    $(window)
        .resize(function () {
            var viewportWidth = $(window).width();
            if (viewportWidth >= 768) {
                $(".navbar-right").removeClass("navbar-nav");
                $('.navbar').addClass("navbar-tablet");
            }
        });

    $(window).resize(function () {
        var viewportWidth = $(window).width();
        if (viewportWidth >= 1100) {
            $("#flow").addClass("moveFlow mt-5");
        }
    });
}

function loadResponsive() {
    var viewportWidth = $(window).width();

    if (viewportWidth >= 768) {
        $(".navbar-right").removeClass("navbar-nav");
        $('.navbar').addClass("navbar-tablet");
    }
    if (viewportWidth >= 1100) {
        $("#flow").addClass("moveFlow mt-5");
    }
};

$(document).ready(function () {
    loadResponsive();
});