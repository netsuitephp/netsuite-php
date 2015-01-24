<?php namespace Fungku\NetSuite\Classes;

class UnitsTypeUom {
	public $internalId;
	public $unitName;
	public $pluralName;
	public $abbreviation;
	public $pluralAbbreviation;
	public $conversionRate;
	public $baseUnit;
	static $paramtypesmap = array(
		"internalId" => "string",
		"unitName" => "string",
		"pluralName" => "string",
		"abbreviation" => "string",
		"pluralAbbreviation" => "string",
		"conversionRate" => "float",
		"baseUnit" => "boolean",
	);
}

