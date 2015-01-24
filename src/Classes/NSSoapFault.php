<?php namespace Fungku\NetSuite\Classes;

class NSSoapFault {
	public $code;
	public $message;
	static $paramtypesmap = array(
		"code" => "FaultCodeType",
		"message" => "string",
	);
}

