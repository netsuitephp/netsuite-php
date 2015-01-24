<?php namespace Fungku\NetSuite\Classes;

class SearchColumnDoubleCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "float",
	);
}

