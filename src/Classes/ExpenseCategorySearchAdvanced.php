<?php

namespace Fungku\NetSuite\Classes;

class ExpenseCategorySearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ExpenseCategorySearch",
		"columns" => "ExpenseCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

