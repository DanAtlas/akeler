$(document).ready(function() {
  // navigation toggle
  $('#menu, .sidemenu__header--close .fas, .sidemenu-overlay').on('click', function () {
    $('.sidemenu-overlay').toggleClass('sidemenu-overlay--show');
    $('.sidemenu-wrapper').toggleClass('sidemenu-wrapper--slide');
    $('body').toggleClass('body--overflow');
    $('#menu').toggleClass('open');
  });

  // language toggle
  $('.navbar-lang img').click(function() {
    $('.navbar-lang ul').toggleClass('lang--open');
  });

  $('.sidebar-lang').click(function() {
    $('.sidebar-lang ul').slideToggle();
  });

  // menu scroll to
  $('.go_to').click(function () {
    var scroll_el = $(this).attr('href');
    if ($(scroll_el).length != 0) {
      $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 800);
    }
    return false;
  });

  // Accordion
  $('.accord-header').next().hide();
  $('.accord-header').click(function(){
    $(this).next().slideToggle();
    // $('.accord-header').not(this).next().stop(true,true).slideUp();
  });

});