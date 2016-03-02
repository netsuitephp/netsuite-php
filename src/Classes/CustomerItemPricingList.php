<?php

namespace Fungku\NetSuite\Classes;

class CustomerItemPricingList {
	public $itemPricing;
	public $replaceAll;
	static $paramtypesmap = array(
		"itemPricing" => "CustomerItemPricing[]",
		"replaceAll" => "boolean",
	);
}

