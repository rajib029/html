$(window).load(function() {

  $(".mobile-menu").click(function(){
		$(".mobile-nav").slideToggle(350);
	});
	
	$('.flexslider').flexslider({
    animation: "fade",
	slideshowSpeed: 4000
  });
  
});
