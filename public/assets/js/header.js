var $ = jQuery.noConflict();

$(".toggle-subarrow").click(function () {
  $(this).parent().toggleClass("mob-drop");
});

var header = $(".header-inner");
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 100 && $(this).width() > 769) {
    header.addClass("navbar-fixed-top");
  } else {
    header.removeClass("navbar-fixed-top");
  }
});
$(this)
  .find(".h4 i")
  .each(function () {
    $(this).addClass("green");
  });
$(function () {
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
      $(".heade").addClass("active");
    } else {
      //remove the background property so it comes transparent again (defined in your css)
      $(".heade").removeClass("active");
    }
  });
});
