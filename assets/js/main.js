$(document).ready(function(){
  if($('.navigation__trigger').length > 0) {
    $('.navigation__trigger').click(function(e){
      e.preventDefault();
      $('.navigation__container').toggleClass('navigation__container--active');
      $('.navigation__trigger').toggleClass('navigation__trigger--active');
      $('.navigation__panel').slideToggle(200);
    });
  };

  if($('.scroll__link').length > 0) {

    $('.scroll__link').click(function(e) {
  		e.preventDefault();
      $("body, html").animate({scrollTop: $(this.hash).offset().top - 45}, 600);
  	});

    var setCurrentItem = function() {
      var sections = $('[id^=scroll-section]');
      var current = sections[0].id;
      for (var i = 0; i < sections.length; i++) {
        if ( $('#' + sections[i].id).offset().top - 50 <= $(window).scrollTop() ) {
          current = sections[i].id;
        }
      };
      $(".scroll__link").removeClass('scroll__link--active').blur();
      $(".scroll__link[href='#"+current+"']").addClass('scroll__link--active');
    };

    $(window).scroll(function(){
      setCurrentItem();
    });

    setCurrentItem();
  };

  if($('.sidebar__section--sticky').length > 0) {
    var sidebarOffset = $('.sidebar__section--sticky').offset();

    var setSidebarPosition = function() {
      if($(window).scrollTop() > sidebarOffset.top - 50){
        $('.sidebar__section--sticky').addClass('sidebar__section--sticky--fixed');
      } else {
        $('.sidebar__section--sticky').removeClass('sidebar__section--sticky--fixed');
      };
    };

    $(window).scroll(function(){
      setSidebarPosition();
    });

    setSidebarPosition();
  };

});
