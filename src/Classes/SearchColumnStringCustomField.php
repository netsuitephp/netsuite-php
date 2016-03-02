<?php

namespace Fungku\NetSuite\Classes;

class SearchColumnStringCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "string",
	);
}

