$( document ).ready(function() {
  $( ".header" ).next( ".content" ).hide();

  $(".header").click(function () {
    $( ".header" ).next( ".content" ).hide();
    $(this).next(".content").slideToggle();
  });
});


