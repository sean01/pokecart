<?php 

$product = new Product();
$product->load(Route::param('id'));

#1.
Cart::add_product(Route::param('id'), 1, $product->cart_max);

#2. LOAD VIEWS
if(AJAX){
	
	echo json_encode([
		'success' => true,
		'count' => (Cart::get_total()+1),
		'name' => $product->name,
		'image' => $product->image,
		'id' => $product->id,
		'price' =>$product->price,
		'sub' => Cart::get_subtotal() + $product->price,
		'qty' => Cart::get_quantity($product->id)

		
	]);
}else{
	
URL::redirect('/pokecart/cart');
}