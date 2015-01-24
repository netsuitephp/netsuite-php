<?php namespace Fungku\NetSuite\Classes;

class AccountSearchBasic extends SearchRecordBasic {
	public $balance;
	public $cashFlowRateType;
	public $category1099Misc;
	public $description;
	public $externalId;
	public $externalIdString;
	public $generalRateType;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $name;
	public $number;
	public $parent;
	public $subsidiary;
	public $type;
	public $customFieldList;
	static $paramtypesmap = array(
		"balance" => "SearchDoubleField",
		"cashFlowRateType" => "SearchEnumMultiSelectField",
		"category1099Misc" => "SearchMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"generalRateType" => "SearchEnumMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"number" => "SearchStringField",
		"parent" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"type" => "SearchEnumMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

