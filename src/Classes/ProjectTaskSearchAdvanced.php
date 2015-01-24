<?php namespace Fungku\NetSuite\Classes;

class ProjectTaskSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ProjectTaskSearch",
		"columns" => "ProjectTaskSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

