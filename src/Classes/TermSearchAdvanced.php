<?php namespace Fungku\NetSuite\Classes;

class TermSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "TermSearch",
		"columns" => "TermSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

