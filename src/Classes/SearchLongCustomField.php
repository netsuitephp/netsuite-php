<?php

namespace Fungku\NetSuite\Classes;

class SearchLongCustomField extends SearchCustomField {
	public $searchValue;
	public $searchValue2;
	public $operator;
	static $paramtypesmap = array(
		"searchValue" => "integer",
		"searchValue2" => "integer",
		"operator" => "SearchLongFieldOperator",
	);
}

