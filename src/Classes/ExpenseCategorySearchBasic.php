<?php

class ExpenseCategorySearchBasic extends SearchRecordBasic {
	public $account;
	public $description;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $name;
	public $rateRequired;
	public $customFieldList;
	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"rateRequired" => "SearchBooleanField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

