<?php namespace Fungku\NetSuite\Classes;

class JobStatusSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "JobStatusSearch",
		"columns" => "JobStatusSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

