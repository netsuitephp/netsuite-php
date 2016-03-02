<?php

namespace Fungku\NetSuite\Classes;

class VendorSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "VendorSearch",
		"columns" => "VendorSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

