<?php

namespace Fungku\NetSuite\Classes;

class ItemSupplyPlanSearchRowBasic extends SearchRowBasic {
	public $externalId;
	public $internalId;
	public $item;
	public $lastModifiedDate;
	public $location;
	public $memo;
	public $orderCreated;
	public $orderDate;
	public $orderType;
	public $quantity;
	public $quantityUom;
	public $receiptDate;
	public $subsidiary;
	public $units;
	public $customFieldList;
	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"orderCreated" => "SearchColumnBooleanField[]",
		"orderDate" => "SearchColumnDateField[]",
		"orderType" => "SearchColumnSelectField[]",
		"quantity" => "SearchColumnDoubleField[]",
		"quantityUom" => "SearchColumnDoubleField[]",
		"receiptDate" => "SearchColumnDateField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"units" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

