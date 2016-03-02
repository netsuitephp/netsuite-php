<?php

namespace Fungku\NetSuite\Classes;

class ContactAddressbook {
	public $defaultShipping;
	public $defaultBilling;
	public $label;
	public $addressbookAddress;
	public $internalId;
	static $paramtypesmap = array(
		"defaultShipping" => "boolean",
		"defaultBilling" => "boolean",
		"label" => "string",
		"addressbookAddress" => "Address",
		"internalId" => "string",
	);
}

