<?php namespace Fungku\NetSuite\Classes;

class ContactRoleSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ContactRoleSearch",
		"columns" => "ContactRoleSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

