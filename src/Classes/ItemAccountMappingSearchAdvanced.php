<?php namespace Fungku\NetSuite\Classes;

class ItemAccountMappingSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ItemAccountMappingSearch",
		"columns" => "ItemAccountMappingSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

