/**
 * NavSidebar Button Debug Fix
 * Ensures the sidebar button works properly
 */

(function ($) {
  "use strict";

  $(document).ready(function () {
    // Debug: Check if button exists
    var $buttons = $(".navSidebar-button");
    console.log("NavSidebar buttons found:", $buttons.length);

    // Ensure click handler is attached
    if ($buttons.length > 0) {
      // Remove any existing handlers and re-attach
      $buttons.off("click").on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();

        console.log("NavSidebar button clicked!");

        // Toggle the sidebar
        $(".info-group").toggleClass("isActive");

        return false;
      });

      console.log("NavSidebar click handlers attached successfully");
    }

    // Ensure close button works
    $(".close-side-widget")
      .off("click")
      .on("click", function (e) {
        e.preventDefault();
        $(".info-group").removeClass("isActive");
        console.log("Sidebar closed");
      });

    // Click outside to close
    $("body").on("click", function (e) {
      if (
        !$(e.target).closest(".navSidebar-button, .xs-sidebar-widget").length
      ) {
        $(".info-group").removeClass("isActive");
      }
    });

    // Prevent sidebar clicks from closing
    $(".xs-sidebar-widget").on("click", function (e) {
      e.stopPropagation();
    });
  });
})(jQuery);
