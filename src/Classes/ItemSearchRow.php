<?php

class ItemSearchRow extends SearchRow {
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
		"basic" => "ItemSearchRowBasic",
		"binNumberJoin" => "BinSearchRowBasic",
		"binOnHandJoin" => "ItemBinNumberSearchRowBasic",
		"correlatedItemJoin" => "ItemSearchRowBasic",
		"effectiveRevisionJoin" => "ItemRevisionSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"inventoryDetailJoin" => "InventoryDetailSearchRowBasic",
		"inventoryLocationJoin" => "LocationSearchRowBasic",
		"inventoryNumberJoin" => "InventoryNumberSearchRowBasic",
		"inventoryNumberBinOnHandJoin" => "InventoryNumberBinSearchRowBasic",
		"memberItemJoin" => "ItemSearchRowBasic",
		"obsoleteRevisionJoin" => "ItemRevisionSearchRowBasic",
		"parentJoin" => "ItemSearchRowBasic",
		"preferredLocationJoin" => "LocationSearchRowBasic",
		"preferredVendorJoin" => "VendorSearchRowBasic",
		"pricingJoin" => "PricingSearchRowBasic",
		"shopperJoin" => "CustomerSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

