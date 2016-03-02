<?php

namespace Fungku\NetSuite\Classes;

class ContactSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ContactSearch",
		"columns" => "ContactSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

