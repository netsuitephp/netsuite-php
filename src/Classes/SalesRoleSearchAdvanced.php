<?php

class SalesRoleSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "SalesRoleSearch",
		"columns" => "SalesRoleSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

