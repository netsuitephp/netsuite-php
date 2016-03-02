<?php

namespace Fungku\NetSuite\Classes;

class ItemSupplyPlanOrder {
	public $orderLineId;
	public $orderDate;
	public $receiptDate;
	public $sourceLocation;
	public $quantity;
	public $orderCreated;
	public $orderType;
	static $paramtypesmap = array(
		"orderLineId" => "integer",
		"orderDate" => "dateTime",
		"receiptDate" => "dateTime",
		"sourceLocation" => "RecordRef",
		"quantity" => "float",
		"orderCreated" => "boolean",
		"orderType" => "ItemSupplyPlanOrderType",
	);
}

