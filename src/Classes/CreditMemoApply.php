<?php namespace Fungku\NetSuite\Classes;

class CreditMemoApply {
	public $apply;
	public $doc;
	public $applyDate;
	public $job;
	public $type;
	public $refNum;
	public $total;
	public $due;
	public $currency;
	public $amount;
	public $line;
	static $paramtypesmap = array(
		"apply" => "boolean",
		"doc" => "integer",
		"applyDate" => "dateTime",
		"job" => "string",
		"type" => "string",
		"refNum" => "string",
		"total" => "float",
		"due" => "float",
		"currency" => "string",
		"amount" => "float",
		"line" => "integer",
	);
}

