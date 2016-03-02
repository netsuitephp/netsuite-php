<?php

namespace Fungku\NetSuite\Classes;

class SearchColumnMultiSelectCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "ListOrRecordRef[]",
	);
}

