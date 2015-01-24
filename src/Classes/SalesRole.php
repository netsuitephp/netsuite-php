<?php namespace Fungku\NetSuite\Classes;

class SalesRole extends Record {
	public $name;
	public $description;
	public $isSalesRep;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"description" => "string",
		"isSalesRep" => "boolean",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

