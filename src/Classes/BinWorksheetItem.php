<?php namespace Fungku\NetSuite\Classes;

class BinWorksheetItem {
	public $item;
	public $itemName;
	public $description;
	public $quantity;
	public $itemOnHand;
	public $itemUnitsLabel;
	public $inventoryDetail;
	public $itemBins;
	public $itemBinNumbers;
	public $itemBinList;
	public $itemPreferBin;
	public $itemBlank;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"itemName" => "string",
		"description" => "string",
		"quantity" => "float",
		"itemOnHand" => "string",
		"itemUnitsLabel" => "string",
		"inventoryDetail" => "InventoryDetail",
		"itemBins" => "string",
		"itemBinNumbers" => "string",
		"itemBinList" => "string",
		"itemPreferBin" => "string",
		"itemBlank" => "string",
	);
}

