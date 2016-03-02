<?php

namespace Fungku\NetSuite\Classes;

class ChangePassword {
	public $currentPassword;
	public $newPassword;
	public $newPassword2;
	public $justThisAccount;
	static $paramtypesmap = array(
		"currentPassword" => "string",
		"newPassword" => "string",
		"newPassword2" => "string",
		"justThisAccount" => "boolean",
	);
}

