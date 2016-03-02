<?php

namespace Fungku\NetSuite\Classes;

class CalendarEventSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "CalendarEventSearch",
		"columns" => "CalendarEventSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

