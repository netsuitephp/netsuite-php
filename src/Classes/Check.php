<?php

class Check extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $status;
	public $customForm;
	public $account;
	public $balance;
	public $entity;
	public $address;
	public $subsidiary;
	public $postingPeriod;
	public $tranDate;
	public $currency;
	public $voidJournal;
	public $exchangeRate;
	public $toBePrinted;
	public $tranId;
	public $memo;
	public $department;
	public $taxTotal;
	public $class;
	public $tax2Total;
	public $location;
	public $userTotal;
	public $landedCostMethod;
	public $landedCostPerLine;
	public $transactionNumber;
	public $expenseList;
	public $itemList;
	public $landedCostsList;
	public $billPay;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"status" => "string",
		"customForm" => "RecordRef",
		"account" => "RecordRef",
		"balance" => "float",
		"entity" => "RecordRef",
		"address" => "string",
		"subsidiary" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"tranDate" => "dateTime",
		"currency" => "RecordRef",
		"voidJournal" => "RecordRef",
		"exchangeRate" => "float",
		"toBePrinted" => "boolean",
		"tranId" => "string",
		"memo" => "string",
		"department" => "RecordRef",
		"taxTotal" => "float",
		"class" => "RecordRef",
		"tax2Total" => "float",
		"location" => "RecordRef",
		"userTotal" => "float",
		"landedCostMethod" => "LandedCostMethod",
		"landedCostPerLine" => "boolean",
		"transactionNumber" => "string",
		"expenseList" => "CheckExpenseList",
		"itemList" => "CheckItemList",
		"landedCostsList" => "CheckLandedCostList",
		"billPay" => "boolean",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

