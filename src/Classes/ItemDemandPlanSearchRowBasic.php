<?php

namespace Fungku\NetSuite\Classes;

class ItemDemandPlanSearchRowBasic extends SearchRowBasic {
	public $alternateSourceItem;
	public $analysisDuration;
	public $demandDate;
	public $externalId;
	public $internalId;
	public $item;
	public $lastModifiedDate;
	public $location;
	public $memo;
	public $projectionDuration;
	public $projectionInterval;
	public $projectionMethod;
	public $projectionStartDate;
	public $quantity;
	public $quantityUom;
	public $subsidiary;
	public $units;
	public $customFieldList;
	static $paramtypesmap = array(
		"alternateSourceItem" => "SearchColumnSelectField[]",
		"analysisDuration" => "SearchColumnLongField[]",
		"demandDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"projectionDuration" => "SearchColumnLongField[]",
		"projectionInterval" => "SearchColumnStringField[]",
		"projectionMethod" => "SearchColumnStringField[]",
		"projectionStartDate" => "SearchColumnDateField[]",
		"quantity" => "SearchColumnDoubleField[]",
		"quantityUom" => "SearchColumnDoubleField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"units" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

