<?php

namespace Fungku\NetSuite\Classes;

class SearchColumnStringField extends SearchColumnField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "string",
	);
}

