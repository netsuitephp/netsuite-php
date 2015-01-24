<?php namespace Fungku\NetSuite\Classes;

class TimeEntrySearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "TimeEntrySearch",
		"columns" => "TimeEntrySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

