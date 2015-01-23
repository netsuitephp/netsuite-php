<?php

class Term extends Record {
	public $name;
	public $dateDriven;
	public $daysUntilNetDue;
	public $discountPercent;
	public $daysUntilExpiry;
	public $dayOfMonthNetDue;
	public $dueNextMonthIfWithinDays;
	public $discountPercentDateDriven;
	public $dayDiscountExpires;
	public $preferred;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"dateDriven" => "boolean",
		"daysUntilNetDue" => "integer",
		"discountPercent" => "float",
		"daysUntilExpiry" => "integer",
		"dayOfMonthNetDue" => "integer",
		"dueNextMonthIfWithinDays" => "integer",
		"discountPercentDateDriven" => "float",
		"dayDiscountExpires" => "integer",
		"preferred" => "boolean",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

