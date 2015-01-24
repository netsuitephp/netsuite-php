<?php namespace Fungku\NetSuite\Classes;

class SearchColumnDateCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "dateTime",
	);
}

