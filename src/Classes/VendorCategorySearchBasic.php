<?php

class VendorCategorySearchBasic extends SearchRecordBasic {
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $isTaxAgency;
	public $name;
	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isTaxAgency" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}

