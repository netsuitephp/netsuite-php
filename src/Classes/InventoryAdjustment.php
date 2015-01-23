<?php

class InventoryAdjustment extends Record {
	public $postingPeriod;
	public $tranDate;
	public $createdDate;
	public $tranId;
	public $lastModifiedDate;
	public $subsidiary;
	public $account;
	public $customForm;
	public $estimatedTotalValue;
	public $customer;
	public $department;
	public $class;
	public $adjLocation;
	public $location;
	public $memo;
	public $inventoryList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"postingPeriod" => "RecordRef",
		"tranDate" => "dateTime",
		"createdDate" => "dateTime",
		"tranId" => "string",
		"lastModifiedDate" => "dateTime",
		"subsidiary" => "RecordRef",
		"account" => "RecordRef",
		"customForm" => "RecordRef",
		"estimatedTotalValue" => "float",
		"customer" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"adjLocation" => "RecordRef",
		"location" => "RecordRef",
		"memo" => "string",
		"inventoryList" => "InventoryAdjustmentInventoryList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

