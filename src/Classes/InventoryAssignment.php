<?php

class InventoryAssignment {
	public $internalId;
	public $issueInventoryNumber;
	public $receiptInventoryNumber;
	public $binNumber;
	public $toBinNumber;
	public $quantity;
	public $expirationDate;
	public $quantityAvailable;
	static $paramtypesmap = array(
		"internalId" => "string",
		"issueInventoryNumber" => "RecordRef",
		"receiptInventoryNumber" => "string",
		"binNumber" => "RecordRef",
		"toBinNumber" => "RecordRef",
		"quantity" => "float",
		"expirationDate" => "dateTime",
		"quantityAvailable" => "boolean",
	);
}

