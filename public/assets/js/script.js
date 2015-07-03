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


	// yo, make sure your add to cart button has the add-to-cart class
	$('.add-to-cart').on('click', function(e){
		// don't go anywhere
		e.preventDefault();

		var href = $(this).attr('href');

		$.ajax({
			type: 'get',
			url: href,
			dataType: 'json'
		})
		.done(function(data){

			console.log(data);

			$('.cart-count').text(data.count);
			
		});

	});


});

