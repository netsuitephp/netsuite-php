<?php

namespace Fungku\NetSuite\Classes;

class SearchMultiSelectCustomField extends SearchCustomField {
	public $searchValue;
	public $operator;
	static $paramtypesmap = array(
		"searchValue" => "ListOrRecordRef[]",
		"operator" => "SearchMultiSelectFieldOperator",
	);
}

