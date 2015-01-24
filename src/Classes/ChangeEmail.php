<?php namespace Fungku\NetSuite\Classes;

class ChangeEmail {
	public $currentPassword;
	public $newEmail;
	public $newEmail2;
	public $justThisAccount;
	static $paramtypesmap = array(
		"currentPassword" => "string",
		"newEmail" => "string",
		"newEmail2" => "string",
		"justThisAccount" => "boolean",
	);
}

