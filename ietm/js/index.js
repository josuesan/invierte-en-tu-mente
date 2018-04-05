$(document).ready(()=>{

  $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    console.log("hola");
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top //Sticky header
    }, 500);
  });
    
  $('.btn-burger').click(function(){
    $('.btn-burger').toggleClass('active');
    $('.full-device-menu').toggleClass('active');
    $("body").toggleClass('overflow-state');
  })
});







