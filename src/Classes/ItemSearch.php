<?php namespace Fungku\NetSuite\Classes;

class ItemSearch extends SearchRecord {
	public $basic;
	public $binNumberJoin;
	public $binOnHandJoin;
	public $correlatedItemJoin;
	public $effectiveRevisionJoin;
	public $fileJoin;
	public $inventoryDetailJoin;
	public $inventoryLocationJoin;
	public $inventoryNumberJoin;
	public $inventoryNumberBinOnHandJoin;
	public $memberItemJoin;
	public $obsoleteRevisionJoin;
	public $parentJoin;
	public $preferredLocationJoin;
	public $preferredVendorJoin;
	public $pricingJoin;
	public $shopperJoin;
	public $transactionJoin;
	public $userJoin;
	public $userNotesJoin;
	public $vendorJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ItemSearchBasic",
		"binNumberJoin" => "BinSearchBasic",
		"binOnHandJoin" => "ItemBinNumberSearchBasic",
		"correlatedItemJoin" => "ItemSearchBasic",
		"effectiveRevisionJoin" => "ItemRevisionSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"inventoryDetailJoin" => "InventoryDetailSearchBasic",
		"inventoryLocationJoin" => "LocationSearchBasic",
		"inventoryNumberJoin" => "InventoryNumberSearchBasic",
		"inventoryNumberBinOnHandJoin" => "InventoryNumberBinSearchBasic",
		"memberItemJoin" => "ItemSearchBasic",
		"obsoleteRevisionJoin" => "ItemRevisionSearchBasic",
		"parentJoin" => "ItemSearchBasic",
		"preferredLocationJoin" => "LocationSearchBasic",
		"preferredVendorJoin" => "VendorSearchBasic",
		"pricingJoin" => "PricingSearchBasic",
		"shopperJoin" => "CustomerSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

