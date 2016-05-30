<?php 

Auth::kickout('/pokecart/');

if(Input::posted()){

	if(password_verify(Input::get('old_password'), Auth::user()->password)){
		Auth::user()->password = password_hash(Input::get('password'), PASSWORD_DEFAULT);

		Auth::user()->save();
		$success = 'Password was updated successfully.';
	} else {
		$error = 'The old password was incorrect, please try again.';
	}

		
}

$user = new User();

$user->load(Auth::user_id());



include VIEWS.'header.php';
include VIEWS.'user.php';
include VIEWS.'footer.php';