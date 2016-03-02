<?php

namespace Fungku\NetSuite\Classes;

class LotNumberedInventoryItemNumbers {
	public $serialNumber;
	public $quantityOnHand;
	public $expirationDate;
	static $paramtypesmap = array(
		"serialNumber" => "RecordRef",
		"quantityOnHand" => "float",
		"expirationDate" => "dateTime",
	);
}

