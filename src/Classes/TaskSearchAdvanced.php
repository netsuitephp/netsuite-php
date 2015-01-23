<?php

class TaskSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "TaskSearch",
		"columns" => "TaskSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

