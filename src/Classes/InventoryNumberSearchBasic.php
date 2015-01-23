<?php

class InventoryNumberSearchBasic extends SearchRecordBasic {
	public $expirationDate;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $inventoryNumber;
	public $isOnHand;
	public $item;
	public $location;
	public $memo;
	public $quantityAvailable;
	public $quantityInTransit;
	public $quantityOnHand;
	public $quantityOnOrder;
	public $customFieldList;
	static $paramtypesmap = array(
		"expirationDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"inventoryNumber" => "SearchStringField",
		"isOnHand" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"quantityAvailable" => "SearchDoubleField",
		"quantityInTransit" => "SearchDoubleField",
		"quantityOnHand" => "SearchDoubleField",
		"quantityOnOrder" => "SearchDoubleField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

