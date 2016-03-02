<?php

namespace Fungku\NetSuite\Classes;

class Pricing {
	public $currency;
	public $priceLevel;
	public $discount;
	public $priceList;
	static $paramtypesmap = array(
		"currency" => "RecordRef",
		"priceLevel" => "RecordRef",
		"discount" => "float",
		"priceList" => "PriceList",
	);
}

