<?php

namespace Fungku\NetSuite\Classes;

class StatusDetail {
	public $code;
	public $message;
	public $type;
	static $paramtypesmap = array(
		"code" => "StatusDetailCodeType",
		"message" => "string",
		"type" => "StatusDetailType",
	);
}

