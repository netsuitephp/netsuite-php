<?php

namespace Fungku\NetSuite\Classes;

class NoteSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "NoteSearch",
		"columns" => "NoteSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

