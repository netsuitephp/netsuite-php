<?php namespace Fungku\NetSuite\Classes;

class AppPackageSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "AppPackageSearch",
		"columns" => "AppPackageSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

