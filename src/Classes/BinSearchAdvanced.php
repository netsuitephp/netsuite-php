<?php

class BinSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "BinSearch",
		"columns" => "BinSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

