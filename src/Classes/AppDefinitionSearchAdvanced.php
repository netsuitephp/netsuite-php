<?php namespace Fungku\NetSuite\Classes;

class AppDefinitionSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "AppDefinitionSearch",
		"columns" => "AppDefinitionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

