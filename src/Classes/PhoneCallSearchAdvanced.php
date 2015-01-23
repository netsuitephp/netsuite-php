<?php

class PhoneCallSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "PhoneCallSearch",
		"columns" => "PhoneCallSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

