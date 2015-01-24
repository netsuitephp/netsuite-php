<?php namespace Fungku\NetSuite\Classes;

class SearchColumnDateField extends SearchColumnField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "dateTime",
	);
}

