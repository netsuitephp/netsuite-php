<?php

class CustomerMessageSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "CustomerMessageSearch",
		"columns" => "CustomerMessageSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

