<?php

namespace Fungku\NetSuite\Classes;

class BillingAccountSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "BillingAccountSearch",
		"columns" => "BillingAccountSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

