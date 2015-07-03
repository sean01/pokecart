<?php 

#1.


Cart::add_product(Route::param('id'), 1);


#2. LOAD VIEWS

if(AJAX){
	echo json_encode([
		'success' => true,
		'count' => (Cart::get_total()+1)
	]);
}else{
	
URL::redirect('/cart'));
}

