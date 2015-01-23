<?php

class CustomerPaymentDeposit {
	public $apply;
	public $doc;
	public $line;
	public $depositDate;
	public $refNum;
	public $total;
	public $remaining;
	public $currency;
	public $amount;
	static $paramtypesmap = array(
		"apply" => "boolean",
		"doc" => "integer",
		"line" => "integer",
		"depositDate" => "dateTime",
		"refNum" => "string",
		"total" => "float",
		"remaining" => "float",
		"currency" => "string",
		"amount" => "float",
	);
}

