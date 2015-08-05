<?php 

#1. Logic

if(Auth::is_logged_in()){
	URL::redirect('/');
}

if(Input::posted()){
	
	$user = new User();

	$user->fill(Input::all());

	$user->password = password_hash($user->password, PASSWORD_DEFAULT);

	$user->save();

	Auth::log_in($user->id);

	URL::redirect('/home');

}


#2. Load Views

include VIEWS.'header.php';
include VIEWS.'register_form.php';
include VIEWS.'footer.php';