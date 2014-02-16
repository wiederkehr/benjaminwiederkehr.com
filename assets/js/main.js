$(document).ready(function(){
  $('.logo').hover(
    function(){
      $('.logo a img').stop().animate({ opacity: 0 }, 500);
    },
    function(){
      $('.logo a img').stop().animate({ opacity: 1 }, 500);
    }
  );
  $('.meta__toggle').click(
    function(){
      $('.meta__panel').slideToggle();
      $(this).toggleClass('active');
      return false;
    }
  );
});