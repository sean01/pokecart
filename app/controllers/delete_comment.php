<?php 

Auth::kickout('/');

$comment = new Comment();
$comment->load(Route::param('id'));


if( $comment->user_id == Auth::user_id()){
	
	$comment->delete();
}

URL::restore();



