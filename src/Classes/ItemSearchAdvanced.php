<?php

class ItemSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ItemSearch",
		"columns" => "ItemSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

