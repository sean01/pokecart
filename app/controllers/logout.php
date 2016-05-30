<?php 

# Destroy the user session data
Auth::log_out();


# Redirect to the home page
URL::redirect('/pokecart/');