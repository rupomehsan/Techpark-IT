/**
 * Title Animation Fix
 * Ensures section title animations work properly with fallback for visibility
 */

(function ($) {
  "use strict";

  // Wait for page load
  $(window).on("load", function () {
    // Give animations time to initialize
    setTimeout(function () {
      // Check if GSAP and SplitText are available
      if (typeof gsap !== "undefined" && typeof SplitText !== "undefined") {
        // Initialize title animations for sections in viewport
        $(".title-animation").each(function () {
          var $title = $(this);

          // Skip if already animated
          if ($title.data("animated")) {
            return;
          }

          // Check if element is in viewport
          var elementTop = $title.offset().top;
          var elementBottom = elementTop + $title.outerHeight();
          var viewportTop = $(window).scrollTop();
          var viewportBottom = viewportTop + $(window).height();

          var isInViewport =
            elementBottom > viewportTop && elementTop < viewportBottom;

          if (isInViewport) {
            // Make sure text is visible
            $title.css({
              opacity: "1",
              visibility: "visible",
            });

            // Mark as animated
            $title.data("animated", true);

            try {
              // Initialize SplitText animation
              var splitText = new SplitText($title, {
                type: "words,chars",
                charsClass: "char",
                wordsClass: "word",
              });

              // Animate characters
              gsap.from(splitText.chars, {
                duration: 0.8,
                opacity: 0,
                y: 50,
                rotationX: -40,
                transformOrigin: "0% 50% -50",
                ease: "back.out",
                stagger: 0.02,
              });
            } catch (e) {
              // If animation fails, just ensure visibility
              console.log("Animation initialization failed, showing content");
              $title.css({
                opacity: "1",
                visibility: "visible",
              });
            }
          }
        });
      } else {
        // GSAP/SplitText not available, ensure all titles are visible
        $(".title-animation").css({
          opacity: "1",
          visibility: "visible",
        });
      }
    }, 100);

    // Animate on scroll
    $(window).on("scroll", function () {
      $(".title-animation").each(function () {
        var $title = $(this);

        // Skip if already animated
        if ($title.data("animated")) {
          return;
        }

        var elementTop = $title.offset().top;
        var elementBottom = elementTop + $title.outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        var isInViewport =
          elementBottom > viewportTop && elementTop < viewportBottom;

        if (isInViewport) {
          // Ensure visibility
          $title.css({
            opacity: "1",
            visibility: "visible",
          });

          // Mark as animated
          $title.data("animated", true);

          if (typeof gsap !== "undefined" && typeof SplitText !== "undefined") {
            try {
              var splitText = new SplitText($title, {
                type: "words,chars",
                charsClass: "char",
                wordsClass: "word",
              });

              gsap.from(splitText.chars, {
                duration: 0.8,
                opacity: 0,
                y: 50,
                rotationX: -40,
                transformOrigin: "0% 50% -50",
                ease: "back.out",
                stagger: 0.02,
              });
            } catch (e) {
              // Animation failed, content already visible
            }
          }
        }
      });
    });
  });

  // Fallback: ensure all content is visible after 3 seconds
  setTimeout(function () {
    $(".title-animation, .section-title__title").css({
      opacity: "1",
      visibility: "visible",
    });
  }, 3000);
})(jQuery);
