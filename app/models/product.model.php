<?php 

class Product extends Model{

	public $table = 'products';

	public function comments(){
		return $this->hasMany('Comment', 'product_id');
	}

}


