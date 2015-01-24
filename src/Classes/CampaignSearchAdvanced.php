<?php namespace Fungku\NetSuite\Classes;

class CampaignSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "CampaignSearch",
		"columns" => "CampaignSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

