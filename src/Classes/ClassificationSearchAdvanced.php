<?php

class ClassificationSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ClassificationSearch",
		"columns" => "ClassificationSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

