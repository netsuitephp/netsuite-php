<?php

namespace Fungku\NetSuite\Classes;

class TimeBillSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "TimeBillSearch",
		"columns" => "TimeBillSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

