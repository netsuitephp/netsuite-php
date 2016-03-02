<?php

namespace Fungku\NetSuite\Classes;

class SolutionSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "SolutionSearch",
		"columns" => "SolutionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

