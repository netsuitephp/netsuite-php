<?php namespace Fungku\NetSuite\Classes;

class UnitsTypeSearchBasic extends SearchRecordBasic {
	public $abbreviation;
	public $baseUnit;
	public $conversionRate;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isInActive;
	public $name;
	public $pluralAbbreviation;
	public $pluralName;
	public $unitName;
	static $paramtypesmap = array(
		"abbreviation" => "SearchStringField",
		"baseUnit" => "SearchBooleanField",
		"conversionRate" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInActive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"pluralAbbreviation" => "SearchStringField",
		"pluralName" => "SearchStringField",
		"unitName" => "SearchStringField",
	);
}

