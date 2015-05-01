<?php namespace Fungku\NetSuite\Classes;

class CustomTransactionRef extends BaseRef {
	public $internalId;
	public $externalId;
	public $typeId;
	public $scriptId;
	static $paramtypesmap = array(
		"internalId" => "string",
		"externalId" => "string",
		"typeId" => "string",
		"scriptId" => "string",
	);
}

