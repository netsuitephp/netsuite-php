<?php namespace Fungku\NetSuite\Classes;

class SearchEnumMultiSelectCustomField extends SearchCustomField {
	public $searchValue;
	public $operator;
	static $paramtypesmap = array(
		"searchValue" => "string[]",
		"operator" => "SearchEnumMultiSelectFieldOperator",
	);
}

