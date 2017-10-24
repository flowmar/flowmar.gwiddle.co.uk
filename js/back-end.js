$(document).ready(function() {
  clickable();
});

function clickable() {
  /* Wireframing */

  $('#liri').on('click', function() {
    $(this).addClass('active');
    $('#button-area-1').html(
      '<a href="https://flowmar.gwiddle.co.uk/projects/3-back-end/1-liri-bot-node/liri-screenshots.html" target="_blank"><button class="btn btn-unique animated bounceIn" type=button title="Screenshots">Screenshots</button></a><a href= "https://github.com/flowmar/liri-bot" target="_blank"> <button class="btn btn-indigo animated rollIn" type="button" title="Source Code">Source Code</button></a><a href="https://github.com/flowmar/liri-bot/blob/master/README.md" target="_blank"><button class="btn-deep-orange btn animated fadeIn" type=button title="READ ME!">README</button></a>'
    );
    $('#wireframing').on('click', function() {
      $(this).removeClass('active');
      $('#button-area-1').empty();
      clickable();
    });
  });

  /* Basic */

  $('#basic').on('click', function() {
    $(this).addClass('active');
    $('#button-area-2').html(
      '<a href="https://flowmar.github.io/Basic-Portfolio" target="_blank"><button class="btn btn-unique animated bounceIn" type=button title="Live Link">Live Link</button></a><a href= "https://github.com/flowmar/Basic-Portfolio" target="_blank"> <button class="btn btn-indigo animated rollIn" type="button" title="Source Code">Source Code</button></a><a href="https://github.com/flowmar/Basic-Portfolio/blob/master/README.md" target="_blank"><button class="btn-deep-orange btn animated fadeIn" type=button title="READ ME!">README</button></a>'
    );
    $('#basic').on('click', function() {
      $(this).removeClass('active');
      $('#button-area-2').empty();
      clickable();
    });
  });

  /* Responsive */

  $('#responsive').on('click', function() {
    $(this).addClass('active');
    $('#button-area-3').html(
      '<a href="https://flowmar.github.io/Responsive-Portfolio" target="_blank"><button class="btn btn-unique animated bounceIn" type=button title="Live Link">Live Link</button></a><a href= "https://github.com/flowmar/Responsive-Portfolio" target="_blank"> <button class="btn btn-indigo animated rollIn" type="button" title="Source Code">Source Code</button></a><a href="https://github.com/flowmar/Responsive-Portfolio/blob/master/README.md" target="_blank"><button class="btn-deep-orange btn animated fadeIn" type=button title="READ ME!">README</button></a>'
    );
    $('#responsive').on('click', function() {
      $(this).removeClass('active');
      $('#button-area-3').empty();
      clickable();
    });
  });

  /* Bootstrap */

  $('#bootstrap').on('click', function() {
    $(this).addClass('active');
    $('#button-area-4').html(
      '<a href="https://flowmar.github.io/Bootstrap-Portfolio" target="_blank"><button class="btn btn-unique animated bounceIn" type=button title="Live Link">Live Link</button></a><a href= "https://github.com/flowmar/Bootstrap-Portfolio" target="_blank"> <button class="btn btn-indigo animated rollIn" type="button" title="Source Code">Source Code</button></a><a href="https://github.com/flowmar/Bootstrap-Portfolio/blob/master/README.md" target="_blank"><button class="btn-deep-orange btn animated fadeIn" type=button title="READ ME!">README</button></a>'
    );
    $('#bootstrap').on('click', function() {
      $(this).removeClass('active');
      $('#button-area-4').empty();
      clickable();
    });
  });
}
//./2-basic-portfolio/basic-portfolio.html
//./3-responsive-portfolio/responsive-portfolio.html
// ./4-bootstrap-portfolio/bootstrap-portfolio.html
