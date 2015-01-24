<?php namespace Fungku\NetSuite\Classes;

class WsRole {
	public $role;
	public $isDefault;
	public $isInactive;
	public $isLoggedInRole;
	static $paramtypesmap = array(
		"role" => "RecordRef",
		"isDefault" => "boolean",
		"isInactive" => "boolean",
		"isLoggedInRole" => "boolean",
	);
}

