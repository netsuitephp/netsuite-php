<?php

namespace Fungku\NetSuite\Classes;

class CreditMemoItemList {
	public $item;
	public $replaceAll;
	static $paramtypesmap = array(
		"item" => "CreditMemoItem[]",
		"replaceAll" => "boolean",
	);
}

