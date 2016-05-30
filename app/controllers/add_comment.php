<?php 
Auth::kickout('/pokecart/product/'.Route::param('id').'/view');

$comment = new Comment();



$comment->content = Input::get('message');
$comment->product_id = Route::param('id');
$comment->user_id = Auth::user_id();
$comment->date_time = date('Y-m-d H:i:s');


$comment->save();

URL::redirect('/pokecart/product/'.Route::param('id').'/view');