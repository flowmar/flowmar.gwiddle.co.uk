$(document).ready(function () {
    clickable();
});

function clickable() {
    /* Hangman */

    $('#hangman').on('click', function () {
        $(this).addClass('active');
        $('#button-area-1').html(
            '<a href="https://flowmar.github.io/Hangman-Game"><button class="btn btn-unique animated bounceIn" type=button title="Live Link">Live Link</button></a><a href= "https://github.com/flowmar/Hangman-Game"> <button class="btn btn-indigo animated rollIn" type="button" title="Source Code">Source Code</button></a><a href="https://github.com/flowmar/Hangman-Game/blob/master/README.md"><button class="btn-deep-orange btn animated fadeIn" type=button title="READ ME!">README</button></a>'
        );
        $('#hangman').on('click', function () {
            $(this).removeClass('active');
            $('#button-area-1').empty();
            clickable();
        });
    });

    /* Crystal Game */

    $('#crystal').on('click', function () {
        $(this).addClass('active');
        $('#button-area-2').html(
            '<a href="https://flowmar.github.io/crystal-collector-game"><button class="btn btn-unique animated bounceIn" type=button title="Live Link">Live Link</button></a><a href= "https://github.com/flowmar/crystal-collector-game"> <button class="btn btn-indigo animated rollIn" type="button" title="Source Code">Source Code</button></a><a href="https://github.com/flowmar/crystal-collector-game/blob/master/README.md"><button class="btn-deep-orange btn animated fadeIn" type=button title="READ ME!">README</button></a>'
        );
        $('#crystal').on('click', function () {
            $(this).removeClass('active');
            $('#button-area-2').empty();
            clickable();
        });
    });

    /* Trivia Game */

    $('#trivia').on('click', function () {
        $(this).addClass('active');
        $('#button-area-3').html(
            '<a href="https://flowmar.github.io/Responsive-Portfolio"><button class="btn btn-unique animated bounceIn" type=button title="Live Link">Live Link</button></a><a href= "https://github.com/flowmar/Responsive-Portfolio"> <button class="btn btn-indigo animated rollIn" type="button" title="Source Code">Source Code</button></a><a href="https://github.com/flowmar/trivia-game/blob/master/README.md"><button class="btn-deep-orange btn animated fadeIn" type=button title="READ ME!">README</button></a>'
        );
        $('#trivia').on('click', function () {
            $(this).removeClass('active');
            $('#button-area-3').empty();
            clickable();
        });
    });

    /* Giphy API */

    $('#gifapi').on('click', function () {
        $(this).addClass('active');
        $('#button-area-4').html(
            '<a href="https://flowmar.github.io/Bootstrap-Portfolio"><button class="btn btn-unique animated bounceIn" type=button title="Live Link">Live Link</button></a><a href= "https://github.com/flowmar/Bootstrap-Portfolio"> <button class="btn btn-indigo animated rollIn" type="button" title="Source Code">Source Code</button></a><a href="https://github.com/flowmar/gifs-in-a-jiffy/blob/master/README.md"><button class="btn-deep-orange btn animated fadeIn" type=button title="READ ME!">README</button></a>'
        );
        $('#gifapi').on('click', function () {
            $(this).removeClass('active');
            $('#button-area-4').empty();
            clickable();
        });
    });
}
//./2-basic-portfolio/basic-portfolio.html
//./3-responsive-portfolio/responsive-portfolio.html
// ./4-bootstrap-portfolio/bootstrap-portfolio.html