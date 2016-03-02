<?php

namespace Fungku\NetSuite\Classes;

class SearchColumnDoubleField extends SearchColumnField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "float",
	);
}

