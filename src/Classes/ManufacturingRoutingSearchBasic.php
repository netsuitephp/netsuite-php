<?php namespace Fungku\NetSuite\Classes;

class ManufacturingRoutingSearchBasic extends SearchRecordBasic {
	public $autoCalculateLag;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isDefault;
	public $isInactive;
	public $subsidiary;
	public $item;
	public $lagAmount;
	public $lagType;
	public $lagUnits;
	public $location;
	public $manufacturingCostTemplate;
	public $manufacturingWorkCenter;
	public $memo;
	public $name;
	public $operationName;
	public $operationYield;
	public $runRate;
	public $sequence;
	public $setupTime;
	public $customFieldList;
	static $paramtypesmap = array(
		"autoCalculateLag" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefault" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"subsidiary" => "SearchMultiSelectField",
		"item" => "SearchMultiSelectField",
		"lagAmount" => "SearchDoubleField",
		"lagType" => "SearchEnumMultiSelectField",
		"lagUnits" => "SearchStringField",
		"location" => "SearchMultiSelectField",
		"manufacturingCostTemplate" => "SearchMultiSelectField",
		"manufacturingWorkCenter" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"name" => "SearchStringField",
		"operationName" => "SearchStringField",
		"operationYield" => "SearchDoubleField",
		"runRate" => "SearchDoubleField",
		"sequence" => "SearchLongField",
		"setupTime" => "SearchDoubleField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

