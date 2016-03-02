<?php

namespace Fungku\NetSuite\Classes;

class VendorCredit extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $account;
	public $unApplied;
	public $billAddressList;
	public $autoApply;
	public $applied;
	public $transactionNumber;
	public $tranId;
	public $createdFrom;
	public $entity;
	public $total;
	public $userTotal;
	public $currency;
	public $currencyName;
	public $billingAddress;
	public $tranDate;
	public $exchangeRate;
	public $postingPeriod;
	public $memo;
	public $department;
	public $class;
	public $location;
	public $subsidiary;
	public $expenseList;
	public $itemList;
	public $applyList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"account" => "RecordRef",
		"unApplied" => "float",
		"billAddressList" => "RecordRef",
		"autoApply" => "boolean",
		"applied" => "float",
		"transactionNumber" => "string",
		"tranId" => "string",
		"createdFrom" => "RecordRef",
		"entity" => "RecordRef",
		"total" => "float",
		"userTotal" => "float",
		"currency" => "RecordRef",
		"currencyName" => "string",
		"billingAddress" => "Address",
		"tranDate" => "dateTime",
		"exchangeRate" => "float",
		"postingPeriod" => "RecordRef",
		"memo" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"expenseList" => "VendorCreditExpenseList",
		"itemList" => "VendorCreditItemList",
		"applyList" => "VendorCreditApplyList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

