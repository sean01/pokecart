<?php 

$quantity = Input::get('quantity');
$product_id = Route::param('id');

if($quantity > 0 ){
	Cart::set_quantity($product_id, $quantity);
}

URL::redirect('/cart');