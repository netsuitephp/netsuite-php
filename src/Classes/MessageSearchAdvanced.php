<?php

class MessageSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "MessageSearch",
		"columns" => "MessageSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

