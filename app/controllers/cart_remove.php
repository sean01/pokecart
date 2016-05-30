<?php 

Cart::remove_product(Route::param('id'));


URL::redirect('/pokecart/cart');