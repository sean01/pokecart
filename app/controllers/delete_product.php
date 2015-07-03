<?php 

#1. 
Auth::kickout_non_admin('/');

$product = new Product();

$product->load(Route::param('id'));

$product->delete();

#2. REDIRECT

URL::redirect('/admin');