<?php

class JobAddressbook {
	public $defaultShipping;
	public $defaultBilling;
	public $isResidential;
	public $label;
	public $internalId;
	public $addressbookAddress;
	static $paramtypesmap = array(
		"defaultShipping" => "boolean",
		"defaultBilling" => "boolean",
		"isResidential" => "boolean",
		"label" => "string",
		"internalId" => "string",
		"addressbookAddress" => "Address",
	);
}

