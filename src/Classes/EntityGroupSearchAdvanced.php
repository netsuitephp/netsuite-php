<?php

namespace Fungku\NetSuite\Classes;

class EntityGroupSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "EntityGroupSearch",
		"columns" => "EntityGroupSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

