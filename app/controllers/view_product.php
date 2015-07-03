<?php 

#1. Logic

$product = new Product();

$product->load(Route::param('id'));



#2. Load Views

include VIEWS.'header.php';
include VIEWS.'view_product.php';
include VIEWS.'footer.php';