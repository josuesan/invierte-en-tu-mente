$(document).ready(()=>{
  let hello = ()=>{
    console.log(`hi`);
  }
    
  $('.btn-burger').click(function(){
    $('.btn-burger').toggleClass('active');
    $('.full-device-menu').toggleClass('active');
    $("body").toggleClass('overflow-state');
  })
});







