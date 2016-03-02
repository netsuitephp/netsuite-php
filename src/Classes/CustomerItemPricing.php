<?php

namespace Fungku\NetSuite\Classes;

class CustomerItemPricing {
	public $item;
	public $level;
	public $currency;
	public $price;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"level" => "RecordRef",
		"currency" => "RecordRef",
		"price" => "float",
	);
}

