<?php

class CustomListSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "CustomListSearch",
		"columns" => "CustomListSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

