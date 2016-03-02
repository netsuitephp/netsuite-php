<?php

namespace Fungku\NetSuite\Classes;

class CustomerAddressbook {
	public $defaultShipping;
	public $defaultBilling;
	public $isResidential;
	public $label;
	public $addressbookAddress;
	public $internalId;
	static $paramtypesmap = array(
		"defaultShipping" => "boolean",
		"defaultBilling" => "boolean",
		"isResidential" => "boolean",
		"label" => "string",
		"addressbookAddress" => "Address",
		"internalId" => "string",
	);
}

