<?php

namespace Fungku\NetSuite\Classes;

class AssemblyUnbuild extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $tranDate;
	public $postingPeriod;
	public $tranId;
	public $item;
	public $built;
	public $quantity;
	public $units;
	public $total;
	public $serialNumbers;
	public $inventoryDetail;
	public $binNumbers;
	public $subsidiary;
	public $department;
	public $class;
	public $location;
	public $memo;
	public $componentList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"tranId" => "string",
		"item" => "RecordRef",
		"built" => "float",
		"quantity" => "float",
		"units" => "RecordRef",
		"total" => "float",
		"serialNumbers" => "string",
		"inventoryDetail" => "InventoryDetail",
		"binNumbers" => "string",
		"subsidiary" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"memo" => "string",
		"componentList" => "AssemblyComponentList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

