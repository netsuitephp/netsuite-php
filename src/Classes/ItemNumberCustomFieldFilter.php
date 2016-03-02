<?php

namespace Fungku\NetSuite\Classes;

class ItemNumberCustomFieldFilter {
	public $fldFilter;
	public $fldFilterChecked;
	public $fldFilterCompareType;
	public $fldFilterVal;
	public $fldFilterNotNull;
	public $fldfilterNull;
	public $fldCompareField;
	static $paramtypesmap = array(
		"fldFilter" => "RecordRef",
		"fldFilterChecked" => "boolean",
		"fldFilterCompareType" => "CustomizationFilterCompareType",
		"fldFilterVal" => "string",
		"fldFilterNotNull" => "boolean",
		"fldfilterNull" => "boolean",
		"fldCompareField" => "RecordRef",
	);
}

