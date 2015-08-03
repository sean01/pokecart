<?php 

class Comment extends model{

	public $table = 'comments';

	public function author(){

		return $this->belongsTo('User');
	}
}
