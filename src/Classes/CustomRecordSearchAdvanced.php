<?php

class CustomRecordSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "CustomRecordSearch",
		"columns" => "CustomRecordSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

