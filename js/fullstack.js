$(document).ready(function() {
    clickable();
  });

  function clickable() {
    /* Hangman */

    $('#thisportfolio').on('click', function() {
      $(this).addClass('active');
      $('#button-area-1').html(
        '<a href="https://flowmar.github.io/Hangman-Game" target="_blank"><button class="btn btn-unique animated bounceIn" type=button title="Live Link">Live Link</button></a><a href= "https://github.com/flowmar/Hangman-Game" target="_blank"> <button class="btn btn-indigo animated rollIn" type="button" title="Source Code">Source Code</button></a><a href="https://github.com/flowmar/Hangman-Game/blob/master/README.md" target="_blank"><button class="btn-deep-orange btn animated fadeIn" type=button title="READ ME!">README</button></a>'
      );
      $('#hangman').on('click', function() {
        $(this).removeClass('active');
        $('#button-area-1').empty();
        clickable();
      });
    });


  }