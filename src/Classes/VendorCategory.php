<?php

namespace Fungku\NetSuite\Classes;

class VendorCategory extends Record {
	public $name;
	public $isTaxAgency;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"isTaxAgency" => "boolean",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

