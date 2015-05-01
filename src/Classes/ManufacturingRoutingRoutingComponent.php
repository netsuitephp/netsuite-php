<?php namespace Fungku\NetSuite\Classes;

class ManufacturingRoutingRoutingComponent {
	public $itemName;
	public $description;
	public $yield;
	public $bomQuantity;
	public $quantity;
	public $units;
	public $operationDisplayText;
	public $operationSequenceNumber;
	public $component;
	public $item;
	static $paramtypesmap = array(
		"itemName" => "string",
		"description" => "string",
		"yield" => "float",
		"bomQuantity" => "float",
		"quantity" => "float",
		"units" => "string",
		"operationDisplayText" => "RecordRef",
		"operationSequenceNumber" => "integer",
		"component" => "string",
		"item" => "string",
	);
}

