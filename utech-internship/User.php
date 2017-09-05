<?php

public class User {

	protected $userId;
	protected $email;
	protected $password;

	public function __construct($userId,$email,$password){
		$this->userId = $userId;
		$this->email = $email;
		$this->password = $password;
	}

	public function toString(){
		//echo id, email, password
	}

}

?>