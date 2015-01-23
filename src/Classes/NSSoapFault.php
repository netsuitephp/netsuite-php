<?php

class NSSoapFault {
	public $code;
	public $message;
	static $paramtypesmap = array(
		"code" => "FaultCodeType",
		"message" => "string",
	);
}

