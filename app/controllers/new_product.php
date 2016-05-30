<?php 

#1. LOGIC

Auth::kickout_non_admin('/pokecart/');

if(Input::posted()){

	$product = new Product();

	$product->fill(Input::all());

	if($_FILES){
		$files = upload::to_folder('assets/uploads/');

		if($files[0]['error_message'] == false){
			$product->image = $files[0]['filepath'];
		}
	}

	

	$product->save();

	URL::redirect('/pokecart/admin');
}

$title = 'Add Product'. $product->name;

#2. LOAD VIEWS

include VIEWS.'header.php';
include VIEWS.'product_form.php';
include VIEWS.'footer.php';