<?php

namespace Fungku\NetSuite\Classes;

class InventoryAdjustmentInventory {
	public $item;
	public $line;
	public $inventoryDetail;
	public $description;
	public $location;
	public $units;
	public $quantityOnHand;
	public $currentValue;
	public $adjustQtyBy;
	public $binNumbers;
	public $serialNumbers;
	public $newQuantity;
	public $unitCost;
	public $foreignCurrencyUnitCost;
	public $memo;
	public $currency;
	public $expirationDate;
	public $exchangeRate;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"line" => "integer",
		"inventoryDetail" => "InventoryDetail",
		"description" => "string",
		"location" => "RecordRef",
		"units" => "RecordRef",
		"quantityOnHand" => "float",
		"currentValue" => "float",
		"adjustQtyBy" => "float",
		"binNumbers" => "string",
		"serialNumbers" => "string",
		"newQuantity" => "float",
		"unitCost" => "float",
		"foreignCurrencyUnitCost" => "float",
		"memo" => "string",
		"currency" => "string",
		"expirationDate" => "dateTime",
		"exchangeRate" => "float",
	);
}

