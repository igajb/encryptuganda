$(window).on("scroll", function() {
  var scroll = $(window).scrollTop();
  if (scroll >= 50) {
    $("nav").addClass("black");
  } else {
    $("nav").removeClass("black");
  }
});
