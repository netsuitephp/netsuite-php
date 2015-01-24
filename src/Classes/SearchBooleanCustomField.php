<?php namespace Fungku\NetSuite\Classes;

class SearchBooleanCustomField extends SearchCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "boolean",
	);
}

