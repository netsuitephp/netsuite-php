<?php namespace Fungku\NetSuite\Classes;

class CustomTransaction extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $tranType;
	public $tranId;
	public $total;
	public $currency;
	public $voidJournal;
	public $exchangeRate;
	public $tranDate;
	public $postingPeriod;
	public $memo;
	public $tranStatus;
	public $subsidiary;
	public $department;
	public $class;
	public $location;
	public $lineList;
	public $accountingBookDetailList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"tranType" => "RecordRef",
		"tranId" => "string",
		"total" => "float",
		"currency" => "RecordRef",
		"voidJournal" => "RecordRef",
		"exchangeRate" => "float",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"memo" => "string",
		"tranStatus" => "RecordRef",
		"subsidiary" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"lineList" => "CustomTransactionLineList",
		"accountingBookDetailList" => "CustomTransactionAccountingBookDetailList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

