<?php namespace Fungku\NetSuite\Classes;

class PartnerAddressbook {
	public $defaultShipping;
	public $defaultBilling;
	public $label;
	public $internalId;
	public $addressbookAddress;
	static $paramtypesmap = array(
		"defaultShipping" => "boolean",
		"defaultBilling" => "boolean",
		"label" => "string",
		"internalId" => "string",
		"addressbookAddress" => "Address",
	);
}

