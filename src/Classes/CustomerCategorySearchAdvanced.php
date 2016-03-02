<?php

namespace Fungku\NetSuite\Classes;

class CustomerCategorySearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "CustomerCategorySearch",
		"columns" => "CustomerCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

