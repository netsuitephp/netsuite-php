<?php

class JournalEntry extends Record {
	public $postingPeriod;
	public $tranDate;
	public $currency;
	public $exchangeRate;
	public $tranId;
	public $reversalDate;
	public $reversalDefer;
	public $parentExpenseAlloc;
	public $isBookSpecific;
	public $accountingBook;
	public $reversalEntry;
	public $createdFrom;
	public $department;
	public $class;
	public $location;
	public $subsidiary;
	public $toSubsidiary;
	public $approved;
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $lineList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"postingPeriod" => "RecordRef",
		"tranDate" => "dateTime",
		"currency" => "RecordRef",
		"exchangeRate" => "float",
		"tranId" => "string",
		"reversalDate" => "dateTime",
		"reversalDefer" => "boolean",
		"parentExpenseAlloc" => "RecordRef",
		"isBookSpecific" => "boolean",
		"accountingBook" => "RecordRef",
		"reversalEntry" => "string",
		"createdFrom" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"toSubsidiary" => "RecordRef",
		"approved" => "boolean",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"lineList" => "JournalEntryLineList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

