<?php namespace Fungku\NetSuite\Classes;

class VendorCreditApply {
	public $apply;
	public $applyDate;
	public $doc;
	public $line;
	public $type;
	public $refNum;
	public $total;
	public $due;
	public $currency;
	public $amount;
	static $paramtypesmap = array(
		"apply" => "boolean",
		"applyDate" => "dateTime",
		"doc" => "integer",
		"line" => "integer",
		"type" => "string",
		"refNum" => "string",
		"total" => "float",
		"due" => "float",
		"currency" => "string",
		"amount" => "float",
	);
}

