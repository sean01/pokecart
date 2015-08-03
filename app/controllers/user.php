<?php 
$users = new User();

$users->load(Route::param('username'));


include VIEWS.'header.php';
include VIEWS.'user.php';
include VIEWS.'footer.php';