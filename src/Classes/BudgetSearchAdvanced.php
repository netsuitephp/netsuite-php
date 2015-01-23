<?php

class BudgetSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "BudgetSearch",
		"columns" => "BudgetSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

