<?php namespace Fungku\NetSuite\Classes;

class ItemDemandPlanSearchBasic extends SearchRecordBasic {
	public $alternateSourceItem;
	public $analysisDuration;
	public $demandDate;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $item;
	public $lastModifiedDate;
	public $location;
	public $memo;
	public $projectionDuration;
	public $projectionInterval;
	public $projectionMethod;
	public $projectionStartDate;
	public $quantity;
	public $subsidiary;
	public $units;
	public $customFieldList;
	static $paramtypesmap = array(
		"alternateSourceItem" => "SearchMultiSelectField",
		"analysisDuration" => "SearchLongField",
		"demandDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"projectionDuration" => "SearchLongField",
		"projectionInterval" => "SearchMultiSelectField",
		"projectionMethod" => "SearchEnumMultiSelectField",
		"projectionStartDate" => "SearchDateField",
		"quantity" => "SearchDoubleField",
		"subsidiary" => "SearchMultiSelectField",
		"units" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

