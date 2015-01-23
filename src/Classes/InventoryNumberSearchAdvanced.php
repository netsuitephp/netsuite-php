<?php

class InventoryNumberSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "InventoryNumberSearch",
		"columns" => "InventoryNumberSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

