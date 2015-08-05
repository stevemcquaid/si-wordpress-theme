$( document ).ready(function() {
  if( $(".shiftnav-inner").length ){
  }else{
  alert("Please Install ShiftNav - Responsive Mobile Menu Plugin for a mobile menu")  
}
  $( ".header" ).next( ".content" ).hide();

  $(".header").click(function () {
    $( ".header" ).next( ".content" ).hide();
    $(this).next(".content").slideToggle();
  });
});


