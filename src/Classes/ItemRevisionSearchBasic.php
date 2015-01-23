<?php

class ItemRevisionSearchBasic extends SearchRecordBasic {
	public $effectiveDate;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $item;
	public $name;
	public $obsoleteDate;
	static $paramtypesmap = array(
		"effectiveDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"obsoleteDate" => "SearchDateField",
	);
}

