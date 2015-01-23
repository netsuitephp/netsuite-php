<?php

class PriceLevel extends Record {
	public $name;
	public $discountpct;
	public $updateExistingPrices;
	public $isOnline;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"discountpct" => "float",
		"updateExistingPrices" => "boolean",
		"isOnline" => "boolean",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

