<?php

namespace Fungku\NetSuite\Classes;

class SearchMultiSelectField {
	public $searchValue;
	public $operator;
	static $paramtypesmap = array(
		"searchValue" => "RecordRef[]",
		"operator" => "SearchMultiSelectFieldOperator",
	);
}

