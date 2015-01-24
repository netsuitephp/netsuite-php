<?php namespace Fungku\NetSuite\Classes;

class CustomerDepositApply {
	public $doc;
	public $line;
	public $apply;
	public $applyDate;
	public $type;
	public $refNum;
	public $total;
	public $amount;
	public $job;
	static $paramtypesmap = array(
		"doc" => "integer",
		"line" => "integer",
		"apply" => "boolean",
		"applyDate" => "dateTime",
		"type" => "string",
		"refNum" => "string",
		"total" => "float",
		"amount" => "float",
		"job" => "string",
	);
}

