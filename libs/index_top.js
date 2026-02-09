$(function () {
  // Initialize Backgound Stretcher
  $("body").bgStretcher({
    images: ["img/bg_1.webp", "img/bg_2.webp",],
    slideDirection: "N",
    slideShowSpeed: 3000,
    nextSlideDelay: 6000,
    transitionEffect: "fade",
    sequenceMode: "normal",
    buttonPrev: "#prev",
    buttonNext: "#next",
    pagination: "#nav",
    anchoring: "center center",
    anchoringImg: "center center",
  });
});

$(function () {
  $("#footTextSlider").slider({
    showControls: true,
    showProgress: false,
    autoplay: true,
    showPosition: true,
    hoverPause: true,
    wait: 7000,
    fade: 500,
    direction: "left",
    value: 50,
  });
});