
// warning on setting price below $1 when adding a product
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
			$('.productRemove').attr('href', '/cart/remove/' + data.id + '/notification');
			$('.productPrice').text('Price: $' + data.price);
			$('.productSub').text('Cart Subtotal: $' + data.sub);
			$('.productQty').text(' (' + data.qty + ')');

	


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
					

				
			}, 5*1000)

			
		});

	});




	// yo, make sure your add to cart button has the add-to-cart class
	$('.remove-from-cart').on('click', function(e){
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

			$('.productName').text(data.name);
			$('.productImg').attr('src', '/' + data.image);
			$('.productLink').attr('href', '/product/' + data.id + '/view');
			$('.productRemove').attr('href', '/cart/remove/' + data.id + '/notification');
			$('.productPrice').text('Price: $' + data.price);
			$('.productSub').text('Cart Subtotal: $' + data.sub);
			$('.productQty').text(' (' + data.qty + ')');

			});

	});


});

function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);