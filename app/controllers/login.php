<?php 


#1. LOGIC
// If already logged in, and you try to get to login page.
// Will redirect you to home.
if(Auth::is_logged_in()){
	URL::redirect('/');
}


if(Input::posted()){

	# Attempt to log the user in
	$user = new User();

	$user->fill(Input::all());

	$success = $user->authenticate();

	if($success){
		Auth::log_in($user->id, $user->is_admin);

		URL::redirect('/admin');
	}
}



#2. INCLUDE VIEWS
include VIEWS.'header.php';
include VIEWS.'login_form.php';
include VIEWS.'footer.php';
