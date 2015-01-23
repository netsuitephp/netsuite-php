<?php

class TopicSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "TopicSearch",
		"columns" => "TopicSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

