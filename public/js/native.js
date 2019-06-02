$(document).ready(function() {
  $("#nav__brand i").click(function() {
    $(this).parents('nav').toggleClass("show-menu");
  });
  $(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
      $("nav").addClass("scrolled");
    }
    else {
      $("nav").removeClass("scrolled");
    }
  });
});
