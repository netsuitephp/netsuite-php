<?php

class SearchDoubleField {
	public $searchValue;
	public $searchValue2;
	public $operator;
	static $paramtypesmap = array(
		"searchValue" => "float",
		"searchValue2" => "float",
		"operator" => "SearchDoubleFieldOperator",
	);
}

