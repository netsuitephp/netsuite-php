<?php

namespace Fungku\NetSuite\Classes;

class CurrencyRateSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "CurrencyRateSearch",
		"columns" => "CurrencyRateSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

