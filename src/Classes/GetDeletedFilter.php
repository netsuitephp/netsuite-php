<?php

class GetDeletedFilter {
	public $deletedDate;
	public $type;
	static $paramtypesmap = array(
		"deletedDate" => "SearchDateField",
		"type" => "SearchEnumMultiSelectField",
	);
}

