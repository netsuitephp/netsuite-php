<?php namespace Fungku\NetSuite\Classes;

class MarkupItem extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $description;
	public $nonPosting;
	public $account;
	public $includeChildren;
	public $rate;
	public $isPreTax;
	public $customForm;
	public $itemId;
	public $issueProduct;
	public $upcCode;
	public $displayName;
	public $vendorName;
	public $parent;
	public $isInactive;
	public $availableToPartners;
	public $department;
	public $class;
	public $location;
	public $subsidiaryList;
	public $taxSchedule;
	public $deferredRevenueAccount;
	public $expenseAccount;
	public $incomeAccount;
	public $revRecSchedule;
	public $salesTaxCode;
	public $translationsList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"description" => "string",
		"nonPosting" => "boolean",
		"account" => "RecordRef",
		"includeChildren" => "boolean",
		"rate" => "string",
		"isPreTax" => "boolean",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"issueProduct" => "RecordRef",
		"upcCode" => "string",
		"displayName" => "string",
		"vendorName" => "string",
		"parent" => "RecordRef",
		"isInactive" => "boolean",
		"availableToPartners" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiaryList" => "RecordRefList",
		"taxSchedule" => "RecordRef",
		"deferredRevenueAccount" => "RecordRef",
		"expenseAccount" => "RecordRef",
		"incomeAccount" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"salesTaxCode" => "RecordRef",
		"translationsList" => "TranslationList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

