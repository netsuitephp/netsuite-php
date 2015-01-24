<?php namespace Fungku\NetSuite\Classes;

class Deposit extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $currencyName;
	public $tranId;
	public $account;
	public $total;
	public $exchangeRate;
	public $tranDate;
	public $postingPeriod;
	public $memo;
	public $toBePrinted;
	public $subsidiary;
	public $department;
	public $class;
	public $location;
	public $paymentList;
	public $otherList;
	public $cashBackList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"currencyName" => "string",
		"tranId" => "string",
		"account" => "RecordRef",
		"total" => "float",
		"exchangeRate" => "float",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"memo" => "string",
		"toBePrinted" => "boolean",
		"subsidiary" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"paymentList" => "DepositPaymentList",
		"otherList" => "DepositOtherList",
		"cashBackList" => "DepositCashBackList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

