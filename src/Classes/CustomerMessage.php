<?php namespace Fungku\NetSuite\Classes;

class CustomerMessage extends Record {
	public $name;
	public $description;
	public $preferred;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"description" => "string",
		"preferred" => "boolean",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

