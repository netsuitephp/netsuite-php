<?php namespace Fungku\NetSuite\Classes;

class DepartmentSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "DepartmentSearch",
		"columns" => "DepartmentSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

