<?php

namespace Fungku\NetSuite\Classes;

class ItemVendor {
	public $vendor;
	public $vendorCode;
	public $vendorCurrencyName;
	public $vendorCurrency;
	public $purchasePrice;
	public $preferredVendor;
	public $schedule;
	public $subsidiary;
	static $paramtypesmap = array(
		"vendor" => "RecordRef",
		"vendorCode" => "string",
		"vendorCurrencyName" => "string",
		"vendorCurrency" => "RecordRef",
		"purchasePrice" => "float",
		"preferredVendor" => "boolean",
		"schedule" => "RecordRef",
		"subsidiary" => "string",
	);
}

