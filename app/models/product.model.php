<?php 

class Product extends Model{

	public $table = 'products';

	public function comments($where = []){
		return $this->hasMany('Comment', 'product_id', $where);
	}

}


