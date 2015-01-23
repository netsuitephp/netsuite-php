<?php

class ItemRevisionSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ItemRevisionSearch",
		"columns" => "ItemRevisionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

