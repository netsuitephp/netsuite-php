<?php namespace Fungku\NetSuite\Classes;

class ItemAccountMapping extends Record {
	public $customForm;
	public $effectiveDate;
	public $endDate;
	public $accountingBook;
	public $subsidiary;
	public $itemAccount;
	public $sourceAccount;
	public $class;
	public $department;
	public $location;
	public $destinationAccount;
	public $customDimension;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"effectiveDate" => "dateTime",
		"endDate" => "dateTime",
		"accountingBook" => "RecordRef",
		"subsidiary" => "RecordRef",
		"itemAccount" => "ItemAccountMappingItemAccount",
		"sourceAccount" => "RecordRef",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"destinationAccount" => "RecordRef",
		"customDimension" => "BaseRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

