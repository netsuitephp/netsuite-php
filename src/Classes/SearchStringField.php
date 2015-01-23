<?php

class SearchStringField {
	public $searchValue;
	public $operator;
	static $paramtypesmap = array(
		"searchValue" => "string",
		"operator" => "SearchStringFieldOperator",
	);
}

