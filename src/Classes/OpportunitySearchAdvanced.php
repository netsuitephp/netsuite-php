<?php namespace Fungku\NetSuite\Classes;

class OpportunitySearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "OpportunitySearch",
		"columns" => "OpportunitySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

