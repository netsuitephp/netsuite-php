<?php namespace Fungku\NetSuite\Classes;

class InventoryNumber extends Record {
	public $inventoryNumber;
	public $item;
	public $status;
	public $units;
	public $expirationDate;
	public $memo;
	public $locationsList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"inventoryNumber" => "string",
		"item" => "RecordRef",
		"status" => "string",
		"units" => "string",
		"expirationDate" => "dateTime",
		"memo" => "string",
		"locationsList" => "InventoryNumberLocationsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

