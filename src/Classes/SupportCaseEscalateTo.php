<?php namespace Fungku\NetSuite\Classes;

class SupportCaseEscalateTo {
	public $escalatee;
	public $email;
	public $phone;
	static $paramtypesmap = array(
		"escalatee" => "RecordRef",
		"email" => "string",
		"phone" => "string",
	);
}

