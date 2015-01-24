<?php namespace Fungku\NetSuite\Classes;

class PricingGroupSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "PricingGroupSearch",
		"columns" => "PricingGroupSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

