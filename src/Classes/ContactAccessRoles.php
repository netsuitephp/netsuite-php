<?php namespace Fungku\NetSuite\Classes;

class ContactAccessRoles {
	public $giveAccess;
	public $contact;
	public $email;
	public $role;
	public $password;
	public $password2;
	public $sendEmail;
	static $paramtypesmap = array(
		"giveAccess" => "boolean",
		"contact" => "RecordRef",
		"email" => "string",
		"role" => "RecordRef",
		"password" => "string",
		"password2" => "string",
		"sendEmail" => "boolean",
	);
}

