<?php namespace Fungku\NetSuite\Classes;

class PurchaseOrderItemList {
	public $item;
	public $replaceAll;
	static $paramtypesmap = array(
		"item" => "PurchaseOrderItem[]",
		"replaceAll" => "boolean",
	);
}

