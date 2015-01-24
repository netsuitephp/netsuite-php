<?php namespace Fungku\NetSuite\Classes;

class GetDeletedFilter {
	public $deletedDate;
	public $type;
	static $paramtypesmap = array(
		"deletedDate" => "SearchDateField",
		"type" => "SearchEnumMultiSelectField",
	);
}

