<?php

class ManufacturingRoutingSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ManufacturingRoutingSearch",
		"columns" => "ManufacturingRoutingSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

