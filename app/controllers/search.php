<?php 

$products = new Products_Collection();



$products->where([
	'name LIKE' => '%'.Route::param('keywords').'%',
	'deleted' => '0'
]);

// $products->order_by('name', 'desc');

$products->get();

include VIEWS.'header.php';
include VIEWS.'products_grid.php';
include VIEWS.'footer.php';