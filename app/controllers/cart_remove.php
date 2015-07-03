<?php 

Cart::remove_product(Route::param('id'));


URL::redirect('/cart');