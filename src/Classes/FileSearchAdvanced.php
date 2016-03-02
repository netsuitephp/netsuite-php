<?php

namespace Fungku\NetSuite\Classes;

class FileSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "FileSearch",
		"columns" => "FileSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

