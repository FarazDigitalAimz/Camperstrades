$(document).ready(function () {
  $("#grided").click(function () {
    $(".main-list-view").hide();
    $(".main-gride-view").show();
  });
  $("#listed").click(function () {
    $(".main-list-view").show();
    $(".main-gride-view").hide();
  });
});
