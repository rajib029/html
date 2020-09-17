$(document).ready(function() {
  $('.section-2 .owl-carousel').owlCarousel({
	responsiveClass: true,
	animateOut: 'fadeOut',
	autoplay:true,
	autoplayTimeout:3500,
	responsive: {
	  0: {
		items: 1,
		nav: true
	  },
	  600: {
		items: 1,
		nav: true
	  },
	  1000: {
		items: 1,
		nav: true,
		loop: true,
		margin: 0
	  }
	}
  })
  
})


$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});


$(window).load(function() {

  $(".mobile-menu").click(function(){
		$(".mobile-nav").slideToggle(350);
	});
});
