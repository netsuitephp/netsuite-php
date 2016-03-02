<?php

namespace Fungku\NetSuite\Classes;

class SearchColumnSelectCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "ListOrRecordRef",
	);
}

