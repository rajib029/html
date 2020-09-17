// JavaScript Document


// Can also be used with $(document).ready()
$(window).load(function() {

  $(".mobile-menu").click(function(){
		$(".mobile-nav").slideToggle(300);
	});
	
	$('.flexslider').flexslider({
    animation: "fade",
	slideshowSpeed: 4000
  });
  
  $('.flexslider-2').flexslider({
    animation: "fade",
	slideshowSpeed: 4000
  });
  $('.testimonial-slider').flexslider({
    animation: "fade",
	slideshowSpeed: 4000
  });
  
	
});
