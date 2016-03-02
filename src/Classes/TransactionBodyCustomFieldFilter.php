<?php

namespace Fungku\NetSuite\Classes;

class TransactionBodyCustomFieldFilter {
	public $fldFilter;
	public $fldFilterChecked;
	public $fldFilterCompareType;
	public $fldFilterVal;
	public $fldFilterSelList;
	public $fldFilterNotNull;
	static $paramtypesmap = array(
		"fldFilter" => "RecordRef",
		"fldFilterChecked" => "boolean",
		"fldFilterCompareType" => "CustomizationFilterCompareType",
		"fldFilterVal" => "string",
		"fldFilterSelList" => "FldFilterSelList",
		"fldFilterNotNull" => "boolean",
	);
}

