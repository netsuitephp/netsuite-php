<?php

class PriceLevelSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "PriceLevelSearch",
		"columns" => "PriceLevelSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

