$(document).ready(function() {
    $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $("#overflow").addClass("sidebar_mm_height");
      } else {
        $("#overflow").removeClass("sidebar_mm_height");
      }
    });
  });
