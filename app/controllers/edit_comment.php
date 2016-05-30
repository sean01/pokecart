<?php 

#1. LOGIC

Auth::kickout('/pokecart/');

$comment = new Comment();

$comment->load(Route::param('id'));

if($comment->user_id == Auth::user_id()){
	
	if(Input::posted()){	

	
	$comment->content = Input::get('message');

	$comment->save();
  
	URL::restore();
	
	}
}


Sticky::set('message', $comment->content);





#2. LOAD VIEWS

include VIEWS.'header.php';
include VIEWS.'edit_comment.php';
include VIEWS.'footer.php';