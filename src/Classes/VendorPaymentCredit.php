<?php

namespace Fungku\NetSuite\Classes;

class VendorPaymentCredit {
	public $apply;
	public $doc;
	public $line;
	public $creditDate;
	public $type;
	public $refNum;
	public $appliedTo;
	public $total;
	public $due;
	public $currency;
	public $amount;
	static $paramtypesmap = array(
		"apply" => "boolean",
		"doc" => "integer",
		"line" => "integer",
		"creditDate" => "dateTime",
		"type" => "string",
		"refNum" => "string",
		"appliedTo" => "string",
		"total" => "float",
		"due" => "float",
		"currency" => "string",
		"amount" => "float",
	);
}

