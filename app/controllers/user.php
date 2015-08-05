<?php 

Auth::kickout('/home');

if(Input::posted()){

	Auth::user()->password = password_hash(Input::get('password'), PASSWORD_DEFAULT);

	Auth::user()->save();	
}

$user = new User();

$user->load(Auth::user_id());



include VIEWS.'header.php';
include VIEWS.'user.php';
include VIEWS.'footer.php';