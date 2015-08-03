<?php 

Route::get('/', CONTROLLERS.'home.php');
Route::get('/home', CONTROLLERS.'home.php');

Route::get('/register', CONTROLLERS.'register.php');
Route::post('/register', CONTROLLERS.'register.php');

Route::get('/logout', CONTROLLERS.'logout.php');


Route::get('/login', CONTROLLERS.'login.php');
Route::post('/login', CONTROLLERS.'login.php');

// Route::get('/cart', CONTROLLERS.'my_cart.php');
// Route::post('/cart', CONTROLLERS.'my_cart.php');


Route::get('/admin', CONTROLLERS.'admin.php');

Route::get('/product/new', CONTROLLERS.'new_product.php');
Route::post('/product/new', CONTROLLERS.'new_product.php');



Route::get('/product/:id/edit', CONTROLLERS.'edit_product.php');
Route::post('/product/:id/edit', CONTROLLERS.'edit_product.php');

Route::get('/product/:id/delete', CONTROLLERS.'delete_product.php');

Route::get('/product/:id/view', CONTROLLERS.'view_product.php');
Route::post('/product/:id/view', CONTROLLERS.'view_product.php');

//CART

// Route::get('/cart', CONTROLLERS.'cart_add.php');
// Route::post('/cart', CONTROLLERS.'cart_add.php');

Route::get('/cart', CONTROLLERS.'cart_view.php');
Route::get('/cart/clear', CONTROLLERS.'cart_clear.php');
Route::get('/cart/remove/:id', CONTROLLERS.'cart_remove.php');
Route::get('/cart/remove/:id/notification', CONTROLLERS.'cart_remove_notification.php');
Route::post('/cart/update/:id', CONTROLLERS.'cart_update.php');
Route::get('/cart/add/:id', CONTROLLERS.'cart_add.php');




// SEARCH

Route::get('/search/:keywords', CONTROLLERS.'search.php');


// CONTACT US

Route::get('/contact', CONTROLLERS.'contact_us.php');
Route::post('/contact', CONTROLLERS.'contact_us.php');


// USER

Route::get('/user/', CONTROLLERS.'user.php');
Route::post('/user/', CONTROLLERS.'user.php');





























Route::fallback(VIEWS.'404.php');