<?php namespace Fungku\NetSuite\Classes;

class SubsidiarySearchBasic extends SearchRecordBasic {
	public $accountingBook;
	public $accountingBookCurrency;
	public $address;
	public $city;
	public $country;
	public $currency;
	public $email;
	public $externalId;
	public $externalIdString;
	public $fax;
	public $internalId;
	public $internalIdNumber;
	public $isElimination;
	public $isInactive;
	public $legalName;
	public $name;
	public $nameNoHierarchy;
	public $phone;
	public $purchaseOrderAmount;
	public $purchaseOrderQuantity;
	public $purchaseOrderQuantityDiff;
	public $receiptAmount;
	public $receiptQuantity;
	public $receiptQuantityDiff;
	public $state;
	public $taxIdNum;
	public $tranPrefix;
	public $url;
	public $zip;
	public $customFieldList;
	static $paramtypesmap = array(
		"accountingBook" => "SearchMultiSelectField",
		"accountingBookCurrency" => "SearchMultiSelectField",
		"address" => "SearchStringField",
		"city" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"currency" => "SearchMultiSelectField",
		"email" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isElimination" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"legalName" => "SearchStringField",
		"name" => "SearchStringField",
		"nameNoHierarchy" => "SearchStringField",
		"phone" => "SearchStringField",
		"purchaseOrderAmount" => "SearchDoubleField",
		"purchaseOrderQuantity" => "SearchDoubleField",
		"purchaseOrderQuantityDiff" => "SearchDoubleField",
		"receiptAmount" => "SearchDoubleField",
		"receiptQuantity" => "SearchDoubleField",
		"receiptQuantityDiff" => "SearchDoubleField",
		"state" => "SearchStringField",
		"taxIdNum" => "SearchStringField",
		"tranPrefix" => "SearchStringField",
		"url" => "SearchStringField",
		"zip" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

