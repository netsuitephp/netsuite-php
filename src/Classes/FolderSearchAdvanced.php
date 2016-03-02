<?php

namespace Fungku\NetSuite\Classes;

class FolderSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "FolderSearch",
		"columns" => "FolderSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

