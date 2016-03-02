<?php

namespace Fungku\NetSuite\Classes;

class SupportCaseSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "SupportCaseSearch",
		"columns" => "SupportCaseSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

