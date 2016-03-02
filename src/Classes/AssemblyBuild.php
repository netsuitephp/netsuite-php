<?php

namespace Fungku\NetSuite\Classes;

class AssemblyBuild extends Record {
	public $createdDate;
	public $expirationDate;
	public $lastModifiedDate;
	public $customForm;
	public $createdFrom;
	public $tranDate;
	public $postingPeriod;
	public $tranId;
	public $item;
	public $buildable;
	public $quantity;
	public $units;
	public $total;
	public $inventoryDetail;
	public $serialNumbers;
	public $binNumbers;
	public $subsidiary;
	public $department;
	public $class;
	public $location;
	public $revision;
	public $memo;
	public $componentList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"expirationDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"createdFrom" => "RecordRef",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"tranId" => "string",
		"item" => "RecordRef",
		"buildable" => "float",
		"quantity" => "float",
		"units" => "RecordRef",
		"total" => "float",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbers" => "string",
		"binNumbers" => "string",
		"subsidiary" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"revision" => "RecordRef",
		"memo" => "string",
		"componentList" => "AssemblyComponentList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

