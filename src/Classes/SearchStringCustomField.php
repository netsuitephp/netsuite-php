<?php namespace Fungku\NetSuite\Classes;

class SearchStringCustomField extends SearchCustomField {
	public $searchValue;
	public $operator;
	static $paramtypesmap = array(
		"searchValue" => "string",
		"operator" => "SearchStringFieldOperator",
	);
}

