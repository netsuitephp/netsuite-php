<?php

namespace Fungku\NetSuite\Classes;

class RevRecTemplateSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "RevRecTemplateSearch",
		"columns" => "RevRecTemplateSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

