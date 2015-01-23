<?php

class SearchTextNumberField {
	public $searchValue;
	public $searchValue2;
	public $operator;
	static $paramtypesmap = array(
		"searchValue" => "string",
		"searchValue2" => "string",
		"operator" => "SearchTextNumberFieldOperator",
	);
}

