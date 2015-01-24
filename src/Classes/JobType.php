<?php namespace Fungku\NetSuite\Classes;

class JobType extends Record {
	public $name;
	public $parent;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"parent" => "RecordRef",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

