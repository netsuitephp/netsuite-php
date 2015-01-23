<?php

class InventoryDetailSearchBasic extends SearchRecordBasic {
	public $binNumber;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $inventoryNumber;
	public $quantity;
	static $paramtypesmap = array(
		"binNumber" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"inventoryNumber" => "SearchMultiSelectField",
		"quantity" => "SearchDoubleField",
	);
}

