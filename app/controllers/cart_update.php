<?php 

$quantity = Input::get('quantity');
$product_id = Route::param('id');

$product = new Product();
$product->load(Route::param('id'));

if($quantity > 0 ){
	Cart::set_quantity($product_id, $quantity, $product->cart_max);
}

URL::redirect('/cart');