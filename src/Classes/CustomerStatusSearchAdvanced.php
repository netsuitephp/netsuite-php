<?php

namespace Fungku\NetSuite\Classes;

class CustomerStatusSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "CustomerStatusSearch",
		"columns" => "CustomerStatusSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

