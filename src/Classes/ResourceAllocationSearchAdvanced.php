<?php

namespace Fungku\NetSuite\Classes;

class ResourceAllocationSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ResourceAllocationSearch",
		"columns" => "ResourceAllocationSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

