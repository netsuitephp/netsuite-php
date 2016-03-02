<?php

namespace Fungku\NetSuite\Classes;

class SearchEnumMultiSelectField {
	public $searchValue;
	public $operator;
	static $paramtypesmap = array(
		"searchValue" => "string[]",
		"operator" => "SearchEnumMultiSelectFieldOperator",
	);
}

