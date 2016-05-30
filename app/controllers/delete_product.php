<?php 

#1. 
Auth::kickout_non_admin('/pokecart/');

$product = new Product();

$product->load(Route::param('id'));

$product->delete();

#2. REDIRECT

URL::redirect('/pokecart/admin');