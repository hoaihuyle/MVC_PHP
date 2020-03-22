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
		var td = $(spinner.parent()),
		rowcart = $(td.parent()),
		discount = $(rowcart.find('.id_discount')).text(),
		price = $(rowcart.find('.id_price')).val(),
		id_total_price = $(rowcart.find('.id_total_price'));
		
		var oldValue = parseFloat(input.val());
		if (oldValue >= max) {var newVal = oldValue;} else {var newVal = oldValue + 1;	}
		devia_price =  parseInt(price) - parseFloat(discount/100)*price;
		total_price = devia_price*newVal;//thành tiền
		id_total_price.html(convertPrice(total_price));
		onchangeAmount(devia_price, 0);
		spinner.find("input").val(newVal);
		spinner.find("input").trigger("change");
	});

	btnDown.click(function() {
		var td = $(spinner.parent()),
		rowcart = $(td.parent()),
		discount = $(rowcart.find('.id_discount')).text(),
		price = $(rowcart.find('.id_price')).val(),
		id_total_price = $(rowcart.find('.id_total_price'));

		var oldValue = parseFloat(input.val());
		if (oldValue <= min) {var newVal = oldValue; alert('Số lượng không thể nhỏ hơn 1'); return; }
		else {var newVal = oldValue - 1;}

		devia_price = parseInt(price) - parseFloat(discount/100)*price;
		total_price = devia_price*newVal;//thành tiền
		id_total_price.html(convertPrice(total_price));
		onchangeAmount(devia_price, 1);

		spinner.find("input").val(newVal);
		spinner.find("input").trigger("change");
	});

});

/**
 * trigger for onchange span row-cart-amount
 * author @huy
 * status ==0 =>>> plus else minus
 * @param {*} devia_price 
 */
function onchangeAmount(devia_price, status){
	if(status==0) total = parseInt($('#totalAmount').val()) + devia_price;
	else total = parseInt($('#totalAmount').val()) - devia_price;
	//Change html
	$('.total_cart_span').html(convertPrice(total));
	//Change input hidden
	$('#totalAmount').val(total);
}

/**
 * Function handle price -> 9.000.000
 * author @huy
 *  @param {*} nStr 
 */
function convertPrice(nStr){
	nStr += '';
    x = nStr.split(',');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
}
/**
 * Table horizontally 
 * @huy
 */
$('.card_table').on('scroll', function() {
    $("#" + this.id + " > *").width($(this).width() + $(this).scrollLeft());
});

 /**
  * Author @thanh
  */
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