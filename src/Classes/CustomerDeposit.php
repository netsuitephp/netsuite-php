<?php namespace Fungku\NetSuite\Classes;

class CustomerDeposit extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $status;
	public $customer;
	public $salesOrder;
	public $customForm;
	public $payment;
	public $currency;
	public $tranDate;
	public $postingPeriod;
	public $paymentMethod;
	public $ccIsPurchaseCardBin;
	public $memo;
	public $ccProcessAsPurchaseCard;
	public $currencyName;
	public $exchangeRate;
	public $checkNum;
	public $creditCardProcessor;
	public $creditCard;
	public $ccSecurityCode;
	public $ccNumber;
	public $subsidiary;
	public $department;
	public $class;
	public $location;
	public $ccExpireDate;
	public $debitCardIssueNo;
	public $validFrom;
	public $ccName;
	public $ccStreet;
	public $ccZipCode;
	public $chargeIt;
	public $ccApproved;
	public $pnRefNum;
	public $authCode;
	public $ccAvsStreetMatch;
	public $softDescriptor;
	public $ccAvsZipMatch;
	public $isRecurringPayment;
	public $ccSecurityCodeMatch;
	public $threeDStatusCode;
	public $ignoreAvs;
	public $account;
	public $undepFunds;
	public $applyList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"status" => "string",
		"customer" => "RecordRef",
		"salesOrder" => "RecordRef",
		"customForm" => "RecordRef",
		"payment" => "float",
		"currency" => "RecordRef",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"paymentMethod" => "RecordRef",
		"ccIsPurchaseCardBin" => "boolean",
		"memo" => "string",
		"ccProcessAsPurchaseCard" => "boolean",
		"currencyName" => "string",
		"exchangeRate" => "float",
		"checkNum" => "string",
		"creditCardProcessor" => "RecordRef",
		"creditCard" => "RecordRef",
		"ccSecurityCode" => "string",
		"ccNumber" => "string",
		"subsidiary" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"ccExpireDate" => "dateTime",
		"debitCardIssueNo" => "string",
		"validFrom" => "dateTime",
		"ccName" => "string",
		"ccStreet" => "string",
		"ccZipCode" => "string",
		"chargeIt" => "boolean",
		"ccApproved" => "boolean",
		"pnRefNum" => "string",
		"authCode" => "string",
		"ccAvsStreetMatch" => "AvsMatchCode",
		"softDescriptor" => "string",
		"ccAvsZipMatch" => "AvsMatchCode",
		"isRecurringPayment" => "boolean",
		"ccSecurityCodeMatch" => "AvsMatchCode",
		"threeDStatusCode" => "string",
		"ignoreAvs" => "boolean",
		"account" => "RecordRef",
		"undepFunds" => "boolean",
		"applyList" => "CustomerDepositApplyList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

