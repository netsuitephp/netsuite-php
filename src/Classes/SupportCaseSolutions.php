<?php namespace Fungku\NetSuite\Classes;

class SupportCaseSolutions {
	public $solution;
	public $message;
	public $dateApplied;
	static $paramtypesmap = array(
		"solution" => "RecordRef",
		"message" => "string",
		"dateApplied" => "dateTime",
	);
}

