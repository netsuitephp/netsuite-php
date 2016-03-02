<?php

namespace Fungku\NetSuite\Classes;

class GlobalAccountMappingSearchBasic extends SearchRecordBasic {
	public $accountingBook;
	public $class;
	public $customDimension;
	public $department;
	public $destinationAccount;
	public $effectiveDate;
	public $endDate;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $location;
	public $sourceAccount;
	public $subsidiary;
	public $customFieldList;
	static $paramtypesmap = array(
		"accountingBook" => "SearchMultiSelectField",
		"class" => "SearchMultiSelectField",
		"customDimension" => "SearchMultiSelectCustomField",
		"department" => "SearchMultiSelectField",
		"destinationAccount" => "SearchMultiSelectField",
		"effectiveDate" => "SearchDateField",
		"endDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"location" => "SearchMultiSelectField",
		"sourceAccount" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

