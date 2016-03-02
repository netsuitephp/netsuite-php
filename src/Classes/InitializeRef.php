<?php

namespace Fungku\NetSuite\Classes;

class InitializeRef extends BaseRef {
	public $type;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"type" => "InitializeRefType",
		"internalId" => "string",
		"externalId" => "string",
	);
}

