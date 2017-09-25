var viewportWidth = $(window).width();

$(document).ready(function () {
    if (viewportWidth < 576) {
        $('.navbtn').show();
    }
    if (viewportWidth >= 576) {
        $('.nav-item').addClass('list-inline-item');
        $('.navbtn').show();
        $('.nav-list').addClass('list-inline btn-lg');
    }
    if (viewportWidth >= 768) {
        $('.nav-list').addClass('list-inline');
        $('.nav-link').addClass('btn-lg');
    }
    if (viewportWidth >= 992) {
        // $('.navbtn').addClass('hidden');
    }
    if (viewportWidth >= 1200) {
        // $('.navbtn').addClass('hidden');
    }
});

$(document).ready(function () {
    $(window).resize(function () {
        if (viewportWidth < 576) {
            $('.navbtn').show();
            $('.nav-list')
                .removeClass('list-inline')
                .addClass('navbar-nav');
        }
        if (viewportWidth >= 576) {
            $('.nav-list')
                .removeClass('navbar-nav')
                .addClass('list-inline');
            $('.nav-link').addClass('btn-lg');
            $('.nav-item').addClass('list-inline-item');
            $('.navbtn').addClass('hidden');
        }
        if (viewportWidth >= 768) {
            $('.nav-list').addClass('list-inline justify-content-center navbar-tablet navbar-nav');
        }
    });
});

$(document).ready(function () {
    $('#code-link').on('click', function () {
        $('button').addClass('rollOut');
    });
});

$(document).ready(async function () {

    await $('#jumb').one('webkitAnimationEnd moxAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $('hi').addClass('rollIn');
    });

    await $('#hi').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $('#intro').addClass('lightSpeedIn');
    });

    await $('#intro').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $('#first').addClass('rollIn');
    });
});