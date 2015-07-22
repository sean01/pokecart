<?php 

$product = new Product();
$product->load(Route::param('id'));

Cart::set_quantity(Route::param('id'), Cart::get_quantity(Route::param('id')) - 1, $product->cart_max);

if(AJAX){
	
	echo json_encode([
		'success' => true,
		'count' => (Cart::get_total()),
		'name' => $product->name,
		'image' => $product->image,
		'id' => $product->id,
		'price' =>$product->price,
		'sub' => Cart::get_subtotal() - $product->price,
		'qty' => Cart::get_quantity($product->id)

		
	]);
}else{

	URL::redirect('/');
}