<?php

class SsoCredentials {
	public $email;
	public $password;
	public $account;
	public $role;
	public $authenticationToken;
	public $partnerId;
	static $paramtypesmap = array(
		"email" => "string",
		"password" => "string",
		"account" => "string",
		"role" => "RecordRef",
		"authenticationToken" => "string",
		"partnerId" => "string",
	);
}

