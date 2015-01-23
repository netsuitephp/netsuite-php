<?php

class VendorCategorySearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "VendorCategorySearch",
		"columns" => "VendorCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

