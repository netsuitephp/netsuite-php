<?php

class TransactionSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "TransactionSearch",
		"columns" => "TransactionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

