<?php

namespace Fungku\NetSuite\Classes;

class PricingSearchRowBasic extends SearchRowBasic {
	public $currency;
	public $customer;
	public $internalId;
	public $item;
	public $maximumQuantity;
	public $minimumQuantity;
	public $priceLevel;
	public $quantityRange;
	public $saleUnit;
	public $unitPrice;
	static $paramtypesmap = array(
		"currency" => "SearchColumnSelectField[]",
		"customer" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnLongField[]",
		"item" => "SearchColumnSelectField[]",
		"maximumQuantity" => "SearchColumnDoubleField[]",
		"minimumQuantity" => "SearchColumnDoubleField[]",
		"priceLevel" => "SearchColumnSelectField[]",
		"quantityRange" => "SearchColumnStringField[]",
		"saleUnit" => "SearchColumnSelectField[]",
		"unitPrice" => "SearchColumnDoubleField[]",
	);
}

