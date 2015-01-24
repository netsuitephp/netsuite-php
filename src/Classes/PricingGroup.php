<?php namespace Fungku\NetSuite\Classes;

class PricingGroup extends Record {
	public $name;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

