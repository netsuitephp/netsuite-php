<?php

namespace Fungku\NetSuite\Classes;

class JobTypeSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "JobTypeSearch",
		"columns" => "JobTypeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

