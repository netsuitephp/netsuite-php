<?php namespace Fungku\NetSuite\Classes;

class CustomListCustomValue {
	public $value;
	public $abbreviation;
	public $isInactive;
	public $valueId;
	public $valueLanguageValueList;
	static $paramtypesmap = array(
		"value" => "string",
		"abbreviation" => "string",
		"isInactive" => "boolean",
		"valueId" => "integer",
		"valueLanguageValueList" => "LanguageValueList",
	);
}

