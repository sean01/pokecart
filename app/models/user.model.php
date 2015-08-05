<?php 

class User extends model{

	public $table = 'users';

	public function authenticate(){
		# $this->username is the username that was typed into the form
		# $this->password is the password that was typed into the form

		# get the user from the db
		$user = $this->db
			->select('*')
			->from($this->table)
			->where('username', $this->username)
			->get_one();

		# if a user was found
		if(!$user){
			return false;
		}
		# check if both passwords are the same
		

		if(password_verify($this->password, $user['password'])){
			$this->fill($user);
			return true;
		}else{
			return false;
		}
	}

	public function comments(){
		return $this->hasMany('Comment', 'user_id');
	}
}

