/*
$(function () {
  $("body").fadeMover();
});

$(function () {
  // create closure so we can safely use $ as alias for jQuery
  $(document).ready(function () {
    // initialise plugin
    var example = $("#example").superfish({
      cssArrows: false,
      autoArrows: false,
      //add options here if required
    });
  });
});
*/

$(function () {
  // sample01
  $("#footTextSlider div p").trunk8();
});

$(function () {
  $("img.jquery-hover").fadeTo(0, 2.0);
  $("img.jquery-hover").hover(
    function () { $(this).fadeTo(200, 0.5); },
    function () { $(this).fadeTo(200, 1.0); }
  );
});

$(function () {
  $("#page_effect").delay(500).fadeIn(3000);
});

$(function () {
  $(".meerkat").meerkat({
    background: "#000",
    height: "100%",
    width: "100%",
    position: "bottom",
    close: ".close-meerkat",
    dontShowAgain: ".dont-show",
    animationIn: "none",
    animationOut: "fade",
    animationSpeed: 1000,
    timer: 4,
  });
});