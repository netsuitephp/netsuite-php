<?php namespace Fungku\NetSuite\Classes;

class AccountingPeriodSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "AccountingPeriodSearch",
		"columns" => "AccountingPeriodSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

