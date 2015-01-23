<?php

class SubsidiarySearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "SubsidiarySearch",
		"columns" => "SubsidiarySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

