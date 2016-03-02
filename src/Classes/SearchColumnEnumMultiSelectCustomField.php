<?php

namespace Fungku\NetSuite\Classes;

class SearchColumnEnumMultiSelectCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "string[]",
	);
}

