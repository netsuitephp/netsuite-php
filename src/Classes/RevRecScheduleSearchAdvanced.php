<?php

class RevRecScheduleSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "RevRecScheduleSearch",
		"columns" => "RevRecScheduleSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

