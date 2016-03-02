<?php

namespace Fungku\NetSuite\Classes;

class ManufacturingOperationTaskSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ManufacturingOperationTaskSearch",
		"columns" => "ManufacturingOperationTaskSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

