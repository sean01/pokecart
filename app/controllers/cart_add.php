<?php 
#1.
Cart::add_product(Route::param('id'), 1);

#2. LOAD VIEWS
if(AJAX){
	$product = new Product();
	$product->load(Route::param('id'));


	echo json_encode([
		'success' => true,
		'count' => (Cart::get_total()+1),
		'name' => $product->name,
		'image' => $product->image,
		'id' => $product->id,
		'price' =>$product->price,
		'sub' => Cart::get_subtotal() + $product->price

		
	]);
}else{
	
URL::redirect('/cart');
}