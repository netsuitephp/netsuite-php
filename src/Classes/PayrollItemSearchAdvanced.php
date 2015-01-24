<?php namespace Fungku\NetSuite\Classes;

class PayrollItemSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "PayrollItemSearch",
		"columns" => "PayrollItemSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

