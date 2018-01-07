$(document).ready(function(){
  if($('.navigation__trigger').length > 0) {
    $('.navigation__trigger').click(function(e){
      e.preventDefault();
      $('.navigation__container').toggleClass('navigation__container--active');
      $('.navigation__trigger').toggleClass('navigation__trigger--active');
      $('.navigation__panel').slideToggle(200);
    });
  };
  if($('.menu__trigger').length > 0) {
    $('.menu__trigger').click(function(e){
      e.preventDefault();
      $('.menu__container').toggleClass('menu__container--active');
      $('.menu__trigger').toggleClass('menu__trigger--active');
      $('.menu__panel').slideToggle(200);
    });
  };

  if($('.sidebar a[href^="#"]').length > 0) {
    $('.sidebar a[href^="#"]').click(function(e) {
  		e.preventDefault();
  		$(window).stop(true).scrollTo(this.hash, {duration:1000, interrupt:true, offset:{top:-37}});
  	});
  };

  if($('.sidebar__section--sticky').length > 0) {
    var elementPosition = $('.sidebar__section--sticky').offset();
    $(window).scroll(function(){
      if($(window).scrollTop() > elementPosition.top - 50){
        $('.sidebar__section--sticky')
        .css('position','fixed')
        .css('top','0')
        .toggleClass('fixed');
      } else {
        $('.sidebar__section--sticky')
        .css('position','static');
      };
    });
  };

});
