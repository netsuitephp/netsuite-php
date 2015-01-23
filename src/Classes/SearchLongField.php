<?php

class SearchLongField {
	public $searchValue;
	public $searchValue2;
	public $operator;
	static $paramtypesmap = array(
		"searchValue" => "integer",
		"searchValue2" => "integer",
		"operator" => "SearchLongFieldOperator",
	);
}

