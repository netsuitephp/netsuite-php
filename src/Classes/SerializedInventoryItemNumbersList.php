<?php namespace Fungku\NetSuite\Classes;

class SerializedInventoryItemNumbersList {
	public $numbers;
	public $replaceAll;
	static $paramtypesmap = array(
		"numbers" => "SerializedInventoryItemNumbers[]",
		"replaceAll" => "boolean",
	);
}

