<?php namespace Fungku\NetSuite\Classes;

class AccountingTransactionSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "AccountingTransactionSearch",
		"columns" => "AccountingTransactionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

