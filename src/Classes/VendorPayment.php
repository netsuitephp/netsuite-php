<?php namespace Fungku\NetSuite\Classes;

class VendorPayment extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $account;
	public $balance;
	public $apAcct;
	public $entity;
	public $address;
	public $tranDate;
	public $voidJournal;
	public $postingPeriod;
	public $currencyName;
	public $exchangeRate;
	public $toAch;
	public $toBePrinted;
	public $printVoucher;
	public $tranId;
	public $total;
	public $currency;
	public $department;
	public $memo;
	public $subsidiary;
	public $class;
	public $location;
	public $status;
	public $transactionNumber;
	public $applyList;
	public $creditList;
	public $billPay;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"account" => "RecordRef",
		"balance" => "float",
		"apAcct" => "RecordRef",
		"entity" => "RecordRef",
		"address" => "string",
		"tranDate" => "dateTime",
		"voidJournal" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"currencyName" => "string",
		"exchangeRate" => "float",
		"toAch" => "boolean",
		"toBePrinted" => "boolean",
		"printVoucher" => "boolean",
		"tranId" => "string",
		"total" => "float",
		"currency" => "RecordRef",
		"department" => "RecordRef",
		"memo" => "string",
		"subsidiary" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"status" => "string",
		"transactionNumber" => "string",
		"applyList" => "VendorPaymentApplyList",
		"creditList" => "VendorPaymentCreditList",
		"billPay" => "boolean",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

