<?php namespace Fungku\NetSuite\Classes;

class PayrollItemSearchBasic extends SearchRecordBasic {
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $expenseAccount;
	public $itemTypeNoHierarchy;
	public $liabilityAccount;
	public $name;
	public $subsidiary;
	public $vendor;
	public $customFieldList;
	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"expenseAccount" => "SearchMultiSelectField",
		"itemTypeNoHierarchy" => "SearchEnumMultiSelectField",
		"liabilityAccount" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"vendor" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

