<?php

namespace Fungku\NetSuite\Classes;

class GetDeletedFilter {
	public $deletedDate;
	public $type;
	public $scriptId;
	static $paramtypesmap = array(
		"deletedDate" => "SearchDateField",
		"type" => "SearchEnumMultiSelectField",
		"scriptId" => "SearchStringField",
	);
}

