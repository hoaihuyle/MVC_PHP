$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
      autoplay:true,
			loop: false,
			nav : true, // Show next and prev buttons
			dots: false,
			autoplaySpeed : 500,
			navSpeed : 500,
      // dotsSpeed : 500, 
			// autoplayHoverPause: true,
			margin:0,
			responsive:{
				0:{
					items:1
				},
				480:{
					items:2
				},
				768:{
					items:3
				},
				992:{
					items:4
				},
				1200:{
          items:5,  
				}
			},
  });
});