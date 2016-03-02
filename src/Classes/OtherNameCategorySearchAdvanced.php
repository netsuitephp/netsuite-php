<?php

namespace Fungku\NetSuite\Classes;

class OtherNameCategorySearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "OtherNameCategorySearch",
		"columns" => "OtherNameCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

