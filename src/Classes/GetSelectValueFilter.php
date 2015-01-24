<?php namespace Fungku\NetSuite\Classes;

class GetSelectValueFilter {
	public $filterValue;
	public $operator;
	static $paramtypesmap = array(
		"filterValue" => "string",
		"operator" => "GetSelectValueFilterOperator",
	);
}

