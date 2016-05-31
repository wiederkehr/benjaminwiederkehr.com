$(document).ready(function(){
  $('.logo').hover(
    function(){
      $('.logo a img').stop().animate({ opacity: 0 }, 200);
    },
    function(){
      $('.logo a img').stop().animate({ opacity: 1 }, 200);
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
    $('.meta__panel').slideToggle(200);
  }
});