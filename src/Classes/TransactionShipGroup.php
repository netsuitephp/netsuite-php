<?php

class TransactionShipGroup {
	public $id;
	public $isFulfilled;
	public $weight;
	public $sourceAddressRef;
	public $sourceAddress;
	public $destinationAddressRef;
	public $destinationAddress;
	public $shippingMethodRef;
	public $shippingMethod;
	public $isHandlingTaxable;
	public $handlingTaxCode;
	public $handlingTaxRate;
	public $handlingTax2Rate;
	public $handlingRate;
	public $handlingTaxAmt;
	public $handlingTax2Amt;
	public $isShippingTaxable;
	public $shippingTaxCode;
	public $shippingTaxRate;
	public $shippingTax2Rate;
	public $shippingRate;
	public $shippingTaxAmt;
	public $shippingTax2Amt;
	static $paramtypesmap = array(
		"id" => "integer",
		"isFulfilled" => "boolean",
		"weight" => "float",
		"sourceAddressRef" => "RecordRef",
		"sourceAddress" => "string",
		"destinationAddressRef" => "RecordRef",
		"destinationAddress" => "string",
		"shippingMethodRef" => "RecordRef",
		"shippingMethod" => "string",
		"isHandlingTaxable" => "boolean",
		"handlingTaxCode" => "RecordRef",
		"handlingTaxRate" => "string",
		"handlingTax2Rate" => "string",
		"handlingRate" => "float",
		"handlingTaxAmt" => "float",
		"handlingTax2Amt" => "float",
		"isShippingTaxable" => "boolean",
		"shippingTaxCode" => "RecordRef",
		"shippingTaxRate" => "string",
		"shippingTax2Rate" => "string",
		"shippingRate" => "float",
		"shippingTaxAmt" => "float",
		"shippingTax2Amt" => "float",
	);
}

