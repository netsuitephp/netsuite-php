<?php namespace Fungku\NetSuite\Classes;

class SearchStringField {
	public $searchValue;
	public $operator;
	static $paramtypesmap = array(
		"searchValue" => "string",
		"operator" => "SearchStringFieldOperator",
	);
}

