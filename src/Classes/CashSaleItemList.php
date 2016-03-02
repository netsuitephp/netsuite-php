<?php

namespace Fungku\NetSuite\Classes;

class CashSaleItemList {
	public $item;
	public $replaceAll;
	static $paramtypesmap = array(
		"item" => "CashSaleItem[]",
		"replaceAll" => "boolean",
	);
}

