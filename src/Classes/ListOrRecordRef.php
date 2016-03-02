<?php

namespace Fungku\NetSuite\Classes;

class ListOrRecordRef {
	public $name;
	public $internalId;
	public $externalId;
	public $typeId;
	static $paramtypesmap = array(
		"name" => "string",
		"internalId" => "string",
		"externalId" => "string",
		"typeId" => "string",
	);
}

