<?php

namespace Fungku\NetSuite\Classes;

class InventoryNumberSearchRowBasic extends SearchRowBasic {
	public $expirationDate;
	public $externalId;
	public $internalId;
	public $inventoryNumber;
	public $isonhand;
	public $item;
	public $location;
	public $memo;
	public $quantityavailable;
	public $quantityintransit;
	public $quantityonhand;
	public $quantityonorder;
	public $customFieldList;
	static $paramtypesmap = array(
		"expirationDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"inventoryNumber" => "SearchColumnStringField[]",
		"isonhand" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"quantityavailable" => "SearchColumnDoubleField[]",
		"quantityintransit" => "SearchColumnDoubleField[]",
		"quantityonhand" => "SearchColumnDoubleField[]",
		"quantityonorder" => "SearchColumnDoubleField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

