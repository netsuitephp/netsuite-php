<?php

class PriceLevelSearchBasic extends SearchRecordBasic {
	public $discountPct;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $isOnline;
	public $name;
	static $paramtypesmap = array(
		"discountPct" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isOnline" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}

