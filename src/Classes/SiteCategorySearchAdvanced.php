<?php

namespace Fungku\NetSuite\Classes;

class SiteCategorySearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "SiteCategorySearch",
		"columns" => "SiteCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

