<?php

namespace Fungku\NetSuite\Classes;

class JobSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "JobSearch",
		"columns" => "JobSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

