<?php namespace Fungku\NetSuite\Classes;

class UnitsTypeSearchRowBasic extends SearchRowBasic {
	public $abbreviation;
	public $baseUnit;
	public $conversionRate;
	public $externalId;
	public $internalId;
	public $isInActive;
	public $name;
	public $pluralAbbreviation;
	public $pluralName;
	public $unitName;
	static $paramtypesmap = array(
		"abbreviation" => "SearchColumnStringField[]",
		"baseUnit" => "SearchColumnBooleanField[]",
		"conversionRate" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInActive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"pluralAbbreviation" => "SearchColumnStringField[]",
		"pluralName" => "SearchColumnStringField[]",
		"unitName" => "SearchColumnStringField[]",
	);
}

