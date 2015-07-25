$( document ).ready(function() {
  $( ".header" ).next( ".content" ).hide();

  $(".header").click(function () {
    $( ".header" ).next( ".content" ).hide(500);
    $(this).next(".content").slideToggle(500);
  });
});


