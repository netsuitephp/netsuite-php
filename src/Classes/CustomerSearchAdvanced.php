<?php namespace Fungku\NetSuite\Classes;

class CustomerSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "CustomerSearch",
		"columns" => "CustomerSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

