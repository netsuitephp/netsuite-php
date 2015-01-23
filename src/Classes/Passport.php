<?php

class Passport {
	public $email;
	public $password;
	public $account;
	public $role;
	static $paramtypesmap = array(
		"email" => "string",
		"password" => "string",
		"account" => "string",
		"role" => "RecordRef",
	);
}

