<?php namespace Fungku\NetSuite\Classes;

class CustomerPaymentApply {
	public $apply;
	public $doc;
	public $line;
	public $applyDate;
	public $job;
	public $type;
	public $refNum;
	public $total;
	public $due;
	public $currency;
	public $discDate;
	public $discAmt;
	public $disc;
	public $amount;
	static $paramtypesmap = array(
		"apply" => "boolean",
		"doc" => "integer",
		"line" => "integer",
		"applyDate" => "dateTime",
		"job" => "string",
		"type" => "string",
		"refNum" => "string",
		"total" => "float",
		"due" => "float",
		"currency" => "string",
		"discDate" => "dateTime",
		"discAmt" => "float",
		"disc" => "float",
		"amount" => "float",
	);
}

