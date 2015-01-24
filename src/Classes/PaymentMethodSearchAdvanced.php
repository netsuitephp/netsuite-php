<?php namespace Fungku\NetSuite\Classes;

class PaymentMethodSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "PaymentMethodSearch",
		"columns" => "PaymentMethodSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

