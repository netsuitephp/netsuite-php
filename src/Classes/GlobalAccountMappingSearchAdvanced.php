<?php

class GlobalAccountMappingSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "GlobalAccountMappingSearch",
		"columns" => "GlobalAccountMappingSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

