/**
 * Smooth Scroll Navigation for Single Page Website
 * Handles smooth scrolling to sections on anchor link clicks
 */

(function ($) {
  "use strict";

  // Smooth scroll on anchor link click
  $('a[href^="#"]').on("click", function (e) {
    var target = $(this.getAttribute("href"));

    if (target.length) {
      e.preventDefault();

      // Close mobile menu if open
      if ($(".mobile-nav__wrapper").hasClass("expanded")) {
        $(".mobile-nav__toggler").trigger("click");
      }

      // Calculate offset for fixed header
      var headerHeight = $(".main-header").outerHeight() || 100;
      var scrollTarget = target.offset().top - headerHeight;

      // Smooth scroll animation
      $("html, body").animate(
        {
          scrollTop: scrollTarget,
        },
        1000,
        "swing",
      );

      // Update active menu item
      updateActiveMenuItem($(this));
    }
  });

  // Update active menu item on scroll
  $(window).on("scroll", function () {
    var scrollPos = $(window).scrollTop();
    var headerHeight = $(".main-header").outerHeight() || 100;

    // Find current section
    $("section[id], div[id]").each(function () {
      var top = $(this).offset().top - headerHeight - 50;
      var bottom = top + $(this).outerHeight();
      var id = $(this).attr("id");

      if (scrollPos >= top && scrollPos < bottom) {
        // Remove all current classes
        $(".main-menu__list li").removeClass("current");

        // Add current class to matching menu item
        $('.main-menu__list a[href="#' + id + '"]')
          .parent("li")
          .addClass("current");
      }
    });
  });

  // Update active menu item function
  function updateActiveMenuItem($link) {
    $(".main-menu__list li").removeClass("current");
    $link.parent("li").addClass("current");
  }

  // Set home as active on page load
  $(window).on("load", function () {
    if (window.location.hash) {
      var target = $(window.location.hash);
      if (target.length) {
        var headerHeight = $(".main-header").outerHeight() || 100;
        var scrollTarget = target.offset().top - headerHeight;

        setTimeout(function () {
          $("html, body").animate(
            {
              scrollTop: scrollTarget,
            },
            1000,
          );
        }, 100);
      }
    }
  });
})(jQuery);
