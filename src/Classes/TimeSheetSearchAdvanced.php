<?php

class TimeSheetSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "TimeSheetSearch",
		"columns" => "TimeSheetSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

