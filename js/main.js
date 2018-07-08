(function($) {
  "use strict";
  $(function() {
    // Show sidebar once button is clicked/tapped
    $(".nav-toggle").on("click", function() {
      $(".nav").toggleClass("nav-hidden");
      $(".nav-toggle").toggleClass("ion-ios7-arrow-back ion-ios7-arrow-forward");
    });
  });
})(jQuery);
