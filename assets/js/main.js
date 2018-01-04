$(document).ready(function(){
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
