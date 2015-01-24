<?php namespace Fungku\NetSuite\Classes;

class TermSearchRowBasic extends SearchRowBasic {
	public $dateDriven;
	public $dayDiscountExpires;
	public $dayOfMonthNetDue;
	public $daysUntilExpiry;
	public $daysUntilNetDue;
	public $discountPercent;
	public $discountPercentDateDriven;
	public $dueNextMonthIfWithinDays;
	public $externalId;
	public $internalId;
	public $isInactive;
	public $name;
	public $preferred;
	static $paramtypesmap = array(
		"dateDriven" => "SearchColumnBooleanField[]",
		"dayDiscountExpires" => "SearchColumnLongField[]",
		"dayOfMonthNetDue" => "SearchColumnLongField[]",
		"daysUntilExpiry" => "SearchColumnLongField[]",
		"daysUntilNetDue" => "SearchColumnLongField[]",
		"discountPercent" => "SearchColumnDoubleField[]",
		"discountPercentDateDriven" => "SearchColumnDoubleField[]",
		"dueNextMonthIfWithinDays" => "SearchColumnLongField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"preferred" => "SearchColumnBooleanField[]",
	);
}

