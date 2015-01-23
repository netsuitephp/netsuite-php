<?php

class AccountSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "AccountSearch",
		"columns" => "AccountSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

