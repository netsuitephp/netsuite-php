<?php

namespace Fungku\NetSuite\Classes;

class CustomerRefundApply {
	public $apply;
	public $doc;
	public $line;
	public $applyDate;
	public $type;
	public $refNum;
	public $total;
	public $due;
	public $currency;
	public $amount;
	static $paramtypesmap = array(
		"apply" => "boolean",
		"doc" => "integer",
		"line" => "integer",
		"applyDate" => "dateTime",
		"type" => "string",
		"refNum" => "string",
		"total" => "float",
		"due" => "float",
		"currency" => "string",
		"amount" => "float",
	);
}

