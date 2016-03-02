<?php

namespace Fungku\NetSuite\Classes;

class DepositApplicationApply {
	public $doc;
	public $line;
	public $apply;
	public $applyDate;
	public $job;
	public $type;
	public $refNum;
	public $total;
	public $due;
	public $currency;
	public $amount;
	static $paramtypesmap = array(
		"doc" => "integer",
		"line" => "integer",
		"apply" => "boolean",
		"applyDate" => "dateTime",
		"job" => "string",
		"type" => "string",
		"refNum" => "string",
		"total" => "float",
		"due" => "float",
		"currency" => "string",
		"amount" => "float",
	);
}

