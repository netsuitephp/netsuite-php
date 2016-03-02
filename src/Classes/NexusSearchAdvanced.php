<?php

namespace Fungku\NetSuite\Classes;

class NexusSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "NexusSearch",
		"columns" => "NexusSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

