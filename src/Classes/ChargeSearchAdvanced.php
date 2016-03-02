<?php

namespace Fungku\NetSuite\Classes;

class ChargeSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ChargeSearch",
		"columns" => "ChargeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

