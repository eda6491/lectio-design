(function () {
  $("#maximage").maximage({
    cycleOptions: {
      fx: "scrollHorz",
      speed: 1000, // Set the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
      timeout: 0,
      prev: "#arrow_left",
      next: "#arrow_right",
      pause: 1,
      before: function (last, current) {
        if (!$.browser.msie) {
          // Start HTML5 video when you arrive
          if ($(current).find("video").length > 0)
            $(current).find("video")[0].play();
        }
      },
      after: function (last, current) {
        if (!$.browser.msie) {
          // Pauses HTML5 video when you leave it
          if ($(last).find("video").length > 0)
            $(last).find("video")[0].pause();
        }
      },
    },
    onFirstImageLoaded: function () {
      jQuery("#cycle-loader").hide();
      jQuery("#maximage").fadeIn("fast");
    },
  });

  // Helper function to Fill and Center the HTML5 Video
  jQuery("video,object").maximage("maxcover");

  // To show it is dynamic html text
  jQuery(".in-slide-content").delay(1200).fadeIn();
})();

(function () {
  $("#acMenu dt").on("click", function () {
    $(this).next().slideToggle();
  });
})();