<?php 

#1. LOGIC

Auth::kickout_non_admin('/pokecart/');

$product = new Product();

$product->load(Route::param('id'));

if(Input::get('price') < 0){
	Input::set('price', 0);
}

if(Input::posted()){

	

	$product->fill(Input::all());

	if($_FILES){
		$files = upload::to_folder('/pokecart/assets/uploads/');

		if($files[0]['error_message'] == false){
			$product->image = $files[0]['filepath'];
		}
	}

	$product->save();

	URL::redirect('/pokecart/admin');
}



Sticky::set('name', $product->name);
Sticky::set('price', $product->price);
Sticky::set('description', $product->description);
Sticky::set('image', $product->image);

$title = 'Edit Product - '. $product->name;



#2. LOAD VIEWS

include VIEWS.'header.php';
include VIEWS.'product_form.php';
include VIEWS.'footer.php';