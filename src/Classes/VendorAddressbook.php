<?php

class VendorAddressbook {
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

