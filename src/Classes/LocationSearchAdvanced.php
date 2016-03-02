<?php

namespace Fungku\NetSuite\Classes;

class LocationSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "LocationSearch",
		"columns" => "LocationSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

