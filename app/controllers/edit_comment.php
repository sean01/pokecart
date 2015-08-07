<?php 

#1. LOGIC

Auth::kickout('/');

$comment = new Comment();

$comment->load(Route::param('id'));

if(Input::posted()){	

	$comment->fill(Input::all());

	$comment->save();

	
}

Sticky::set('message', $comment->content);



URL::restore();

#2. LOAD VIEWS

include VIEWS.'header.php';
include VIEWS.'view_product.php';
include VIEWS.'footer.php';