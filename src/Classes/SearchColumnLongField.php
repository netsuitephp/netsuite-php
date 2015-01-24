<?php namespace Fungku\NetSuite\Classes;

class SearchColumnLongField extends SearchColumnField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "integer",
	);
}

