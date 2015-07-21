$(function(){
	
	// give a class of "product" to your form tag on the product_form view
	$('form.prod-warn').on('submit', function(e){
		var priceInput = $('input[name=price]');
		
		if(priceInput.val() < 1){
			var success = confirm('You\'re setting price under $1.00 \nWould you like to continue?');
			if(!success){ 
				e.preventDefault();
			}
		}
	});

});

$(function(){

	var notificationTimer = null;


	// yo, make sure your add to cart button has the add-to-cart class
	$('.add-to-cart').on('click', function(e){
		// don't go anywhere
		e.preventDefault();

		var href = $(this).attr('href');

		$.ajax({
			method: 'get',
			url: href,
			dataType: 'json'
		})
		.done(function(data){

			console.log(data);

			$('.cart-count').text(data.count);

			//AJAX stuff here?
			// $('.notification-cart').data()
			$('.productName').text(data.name);
			$('.productImg').attr('src', '/' + data.image);
			$('.productLink').attr('href', '/product/' + data.id + '/view');
			$('.productPrice').text('Price: ' + '$' + data.price);
			$('.productSub').text('Cart Subtotal: '+ '$' + data.sub);

	


				//animate css with hide
				$('.notification-cart')
					.removeClass('hide')
					.removeClass('slideOutUp')
					.addClass('slideInDown')

			clearTimeout(notificationTimer);
					

			//sleep 5s
			notificationTimer = setTimeout(function(){

				$('.notification-cart')
					.removeClass('slideInDown')
					.addClass('slideOutUp')
					.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
						if($(this).hasClass('slideOutUp')){
							$(this).addClass('hide');
						}
					});
					// .addClass('hide')

				
			}, 5*1000)

				




			
		});

	});


});