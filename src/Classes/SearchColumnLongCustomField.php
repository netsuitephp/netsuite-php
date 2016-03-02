<?php

namespace Fungku\NetSuite\Classes;

class SearchColumnLongCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "integer",
	);
}

