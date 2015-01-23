<?php

class ManufacturingCostTemplateSearchBasic extends SearchRecordBasic {
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $item;
	public $memo;
	public $name;
	public $subsidiary;
	public $customFieldList;
	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"name" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

