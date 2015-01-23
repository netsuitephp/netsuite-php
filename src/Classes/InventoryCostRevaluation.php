<?php

class InventoryCostRevaluation extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $subsidiary;
	public $tranDate;
	public $postingPeriod;
	public $tranId;
	public $account;
	public $item;
	public $department;
	public $class;
	public $location;
	public $memo;
	public $total;
	public $inventoryValue;
	public $unitCost;
	public $costComponentList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"subsidiary" => "RecordRef",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"tranId" => "string",
		"account" => "RecordRef",
		"item" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"memo" => "string",
		"total" => "float",
		"inventoryValue" => "float",
		"unitCost" => "float",
		"costComponentList" => "InventoryCostRevaluationCostComponentList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

