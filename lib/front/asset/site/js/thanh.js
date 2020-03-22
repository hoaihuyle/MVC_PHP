$(document).ready(function(){
  $("#thuonghieuCal").owlCarousel({
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

$(document).ready(function(){
  $("#listProdlienquan").owlCarousel({
      autoplay:true,
			loop: true,
			nav : false, // Show next and prev buttons
			dots: true,
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

$(document).ready(function(){
  $("#listProdXem").owlCarousel({
      autoplay:true,
			loop: true,
			nav : false, // Show next and prev buttons
			dots: true,
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

jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
jQuery('.quantity').each(function() {
	var spinner = jQuery(this),
		input = spinner.find('input[type="number"]'),
		btnUp = spinner.find('.quantity-up'),
		btnDown = spinner.find('.quantity-down'),
		min = input.attr('min'),
		max = input.attr('max');

	btnUp.click(function() {
		var oldValue = parseFloat(input.val());
		if (oldValue >= max) {
			var newVal = oldValue;
		} else {
			var newVal = oldValue + 1;
		}
		spinner.find("input").val(newVal);
		spinner.find("input").trigger("change");
	});

	btnDown.click(function() {
		var oldValue = parseFloat(input.val());
		if (oldValue <= min) {
			var newVal = oldValue;
		} else {
			var newVal = oldValue - 1;
		}
		spinner.find("input").val(newVal);
		spinner.find("input").trigger("change");
	});

});

$(document).ready(res => {
		$('.add-cart').click(function(){
				var id = $(this).attr('value');
				$.ajax({
					url: `/home/giohang/${id}`, 
					type: 'get', 
				})
				.done(function(data){ 
					if(data > 0){
						$('.countCart').text(data)
						alert('Thêm sản phẩm thành công'); 
					}
					else {
						alert(data);
					}
				}).fail(function(){
						alert('Thao tác không thành công')
				}) 
		})
})