<?php

class ManufacturingRoutingSearchRowBasic extends SearchRowBasic {
	public $autoCalculateLag;
	public $externalId;
	public $internalId;
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
		"autoCalculateLag" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDefault" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"lagAmount" => "SearchColumnDoubleField[]",
		"lagType" => "SearchColumnEnumSelectField[]",
		"lagUnits" => "SearchColumnStringField[]",
		"location" => "SearchColumnSelectField[]",
		"manufacturingCostTemplate" => "SearchColumnSelectField[]",
		"manufacturingWorkCenter" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"operationName" => "SearchColumnStringField[]",
		"operationYield" => "SearchColumnDoubleField[]",
		"runRate" => "SearchColumnDoubleField[]",
		"sequence" => "SearchColumnLongField[]",
		"setupTime" => "SearchColumnDoubleField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

