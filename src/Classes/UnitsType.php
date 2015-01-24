<?php namespace Fungku\NetSuite\Classes;

class UnitsType extends Record {
	public $name;
	public $isInactive;
	public $uomList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"isInactive" => "boolean",
		"uomList" => "UnitsTypeUomList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

