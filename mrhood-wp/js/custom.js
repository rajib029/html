

$(window).load(function() {
  $('a.goto').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
  });
  $(".mobile-menu").click(function(){
    $(".mobile-nav").slideToggle(350);
  });
 
  $('.homepage-slide').flexslider({
    animation: "slide",
    controlNav: false
  }); 

});
  