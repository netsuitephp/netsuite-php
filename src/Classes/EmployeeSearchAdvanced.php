<?php

class EmployeeSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "EmployeeSearch",
		"columns" => "EmployeeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

