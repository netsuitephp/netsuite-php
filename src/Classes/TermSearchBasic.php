<?php

class TermSearchBasic extends SearchRecordBasic {
	public $dateDriven;
	public $dayDiscountExpires;
	public $dayOfMonthNetDue;
	public $daysUntilExpiry;
	public $daysUntilNetDue;
	public $discountPercent;
	public $discountPercentDateDriven;
	public $dueNextMonthIfWithinDays;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $name;
	public $preferred;
	static $paramtypesmap = array(
		"dateDriven" => "SearchBooleanField",
		"dayDiscountExpires" => "SearchLongField",
		"dayOfMonthNetDue" => "SearchLongField",
		"daysUntilExpiry" => "SearchLongField",
		"daysUntilNetDue" => "SearchLongField",
		"discountPercent" => "SearchDoubleField",
		"discountPercentDateDriven" => "SearchDoubleField",
		"dueNextMonthIfWithinDays" => "SearchLongField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"preferred" => "SearchBooleanField",
	);
}

