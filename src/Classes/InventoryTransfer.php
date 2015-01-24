<?php namespace Fungku\NetSuite\Classes;

class InventoryTransfer extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $tranDate;
	public $postingPeriod;
	public $tranId;
	public $memo;
	public $location;
	public $transferLocation;
	public $department;
	public $class;
	public $subsidiary;
	public $inventoryList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"tranId" => "string",
		"memo" => "string",
		"location" => "RecordRef",
		"transferLocation" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"subsidiary" => "RecordRef",
		"inventoryList" => "InventoryTransferInventoryList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

