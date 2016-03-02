<?php

namespace Fungku\NetSuite\Classes;

class PricingSearchBasic extends SearchRecordBasic {
	public $assignedPriceLevel;
	public $currency;
	public $customer;
	public $internalId;
	public $internalIdNumber;
	public $item;
	public $maximumQuantity;
	public $minimumQuantity;
	public $priceLevel;
	public $rate;
	static $paramtypesmap = array(
		"assignedPriceLevel" => "SearchBooleanField",
		"currency" => "SearchMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"maximumQuantity" => "SearchDoubleField",
		"minimumQuantity" => "SearchDoubleField",
		"priceLevel" => "SearchMultiSelectField",
		"rate" => "SearchDoubleField",
	);
}

