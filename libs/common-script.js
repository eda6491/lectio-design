(function() {
  /*
  $("body").fadeMover();
  */
  $("img.jquery-hover").fadeTo(0, 2.0);
  $("img.jquery-hover").hover(
    function () {
      $(this).fadeTo(200, 0.5);
    },
    function () {
      $(this).fadeTo(200, 1.0);
    },
  );
  $(".pagetop").on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, "fast");
    return false;
  });
})();