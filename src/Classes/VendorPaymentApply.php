<?php

class VendorPaymentApply {
	public $apply;
	public $doc;
	public $line;
	public $job;
	public $applyDate;
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
		"job" => "string",
		"applyDate" => "dateTime",
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

