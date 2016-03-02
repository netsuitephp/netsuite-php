<?php

namespace Fungku\NetSuite\Classes;

class UnitsTypeSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "UnitsTypeSearch",
		"columns" => "UnitsTypeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

