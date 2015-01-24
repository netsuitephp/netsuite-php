<?php namespace Fungku\NetSuite\Classes;

class WorkOrderItemList {
	public $item;
	public $replaceAll;
	static $paramtypesmap = array(
		"item" => "WorkOrderItem[]",
		"replaceAll" => "boolean",
	);
}

