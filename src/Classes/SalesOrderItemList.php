<?php namespace Fungku\NetSuite\Classes;

class SalesOrderItemList {
	public $item;
	public $replaceAll;
	static $paramtypesmap = array(
		"item" => "SalesOrderItem[]",
		"replaceAll" => "boolean",
	);
}

