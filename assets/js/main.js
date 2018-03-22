$(document).ready(function() {
  // Hide and Show Functionality for Navigation
  if ($(".navigation__trigger").length > 0) {
    $(".navigation__trigger").click(function(e) {
      e.preventDefault();
      $(".tools").toggleClass("tools--active");
      $(".navigation__trigger").toggleClass("navigation__trigger--active");
      $(".navigation").toggleClass("navigation--active");
      $(".home__link").toggleClass("home__link--active");
    });
  }

  // Scroll-To for Page-Header Action Link on Home page
  if ($(".page-header__action__link").length > 0) {
    $(".page-header__action__link").click(function(e) {
      e.preventDefault();
      $("body, html").animate({ scrollTop: $(this.hash).offset().top }, 800);
    });
  }

  // Scroll-To and Scroll-Spy Functionality for Local Sidebar Links
  if ($(".scroll__link").length > 0) {
    $(".scroll__link").click(function(e) {
      e.preventDefault();
      $("body, html").animate({ scrollTop: $(this.hash).offset().top - 45 }, 600);
    });
    var setCurrentItem = function() {
      var sections = $("[id^=scroll-section]");
      var current = sections[0].id;
      for (var i = 0; i < sections.length; i++) {
        if ($("#" + sections[i].id).offset().top - 50 <= $(window).scrollTop()) {
          current = sections[i].id;
        }
      }
      $(".scroll__link")
        .removeClass("scroll__link--active")
        .blur();
      $(".scroll__link[href='#" + current + "']").addClass("scroll__link--active");
    };
    setCurrentItem();
    $(window).scroll(function() {
      setCurrentItem();
    });
  }

  // Affix Functionality for Sticky Sidebar
  if ($(".sidebar__section--sticky").length > 0) {
    var sidebarOffset = $(".sidebar__section--sticky").offset();
    var setSidebarPosition = function() {
      if ($(window).scrollTop() > sidebarOffset.top - 48) {
        $(".sidebar__section--sticky").addClass("sidebar__section--sticky--fixed");
      } else {
        $(".sidebar__section--sticky").removeClass("sidebar__section--sticky--fixed");
      }
    };
    setSidebarPosition();
    $(window).scroll(function() {
      setSidebarPosition();
    });
  }
});
