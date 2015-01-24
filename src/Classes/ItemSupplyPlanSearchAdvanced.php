<?php namespace Fungku\NetSuite\Classes;

class ItemSupplyPlanSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ItemSupplyPlanSearch",
		"columns" => "ItemSupplyPlanSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

