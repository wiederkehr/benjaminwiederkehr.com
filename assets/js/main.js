$(document).ready(function(){
  $('.logo').hover(
    function(){
      $('.logo a img').stop().animate({ opacity: 0 }, 500);
    },
    function(){
      $('.logo a img').stop().animate({ opacity: 1 }, 500);
    }
  );
  $('.meta__trigger').click(
    function(){
      togglePanel();
      return false;
    }
  );
  function togglePanel(){
    $('.meta__container').toggleClass('active');
    $('.meta__panel').slideToggle();
  }
});