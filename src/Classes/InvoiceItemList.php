<?php namespace Fungku\NetSuite\Classes;

class InvoiceItemList {
	public $item;
	public $replaceAll;
	static $paramtypesmap = array(
		"item" => "InvoiceItem[]",
		"replaceAll" => "boolean",
	);
}

