<?php

class SearchEnumMultiSelectField {
	public $searchValue;
	public $operator;
	static $paramtypesmap = array(
		"searchValue" => "string[]",
		"operator" => "SearchEnumMultiSelectFieldOperator",
	);
}

