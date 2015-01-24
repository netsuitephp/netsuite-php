<?php namespace Fungku\NetSuite\Classes;

class ItemSupplyPlanSearchBasic extends SearchRecordBasic {
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $item;
	public $lastModifiedDate;
	public $location;
	public $memo;
	public $orderCreated;
	public $orderDate;
	public $orderType;
	public $quantity;
	public $receiptDate;
	public $subsidiary;
	public $units;
	public $customFieldList;
	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"orderCreated" => "SearchBooleanField",
		"orderDate" => "SearchDateField",
		"orderType" => "SearchMultiSelectField",
		"quantity" => "SearchDoubleField",
		"receiptDate" => "SearchDateField",
		"subsidiary" => "SearchMultiSelectField",
		"units" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

