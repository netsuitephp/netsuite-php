<?php

namespace Fungku\NetSuite\Classes;

class TaxAcct extends Record {
	public $name;
	public $description;
	public $nexus;
	public $country;
	public $taxAcctType;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"description" => "string",
		"nexus" => "RecordRef",
		"country" => "Country",
		"taxAcctType" => "TaxAcctType",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

