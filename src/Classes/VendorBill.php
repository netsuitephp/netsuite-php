<?php

namespace Fungku\NetSuite\Classes;

class VendorBill extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $billAddressList;
	public $account;
	public $entity;
	public $subsidiary;
	public $approvalStatus;
	public $nextApprover;
	public $vatRegNum;
	public $postingPeriod;
	public $tranDate;
	public $currencyName;
	public $billingAddress;
	public $exchangeRate;
	public $terms;
	public $dueDate;
	public $discountDate;
	public $tranId;
	public $userTotal;
	public $discountAmount;
	public $taxTotal;
	public $paymentHold;
	public $memo;
	public $tax2Total;
	public $creditLimit;
	public $currency;
	public $class;
	public $department;
	public $location;
	public $status;
	public $landedCostMethod;
	public $landedCostPerLine;
	public $transactionNumber;
	public $expenseList;
	public $itemList;
	public $landedCostsList;
	public $customFieldList;
	public $purchaseOrderList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"billAddressList" => "RecordRef",
		"account" => "RecordRef",
		"entity" => "RecordRef",
		"subsidiary" => "RecordRef",
		"approvalStatus" => "RecordRef",
		"nextApprover" => "RecordRef",
		"vatRegNum" => "string",
		"postingPeriod" => "RecordRef",
		"tranDate" => "dateTime",
		"currencyName" => "string",
		"billingAddress" => "Address",
		"exchangeRate" => "float",
		"terms" => "RecordRef",
		"dueDate" => "dateTime",
		"discountDate" => "dateTime",
		"tranId" => "string",
		"userTotal" => "float",
		"discountAmount" => "float",
		"taxTotal" => "float",
		"paymentHold" => "boolean",
		"memo" => "string",
		"tax2Total" => "float",
		"creditLimit" => "float",
		"currency" => "RecordRef",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"status" => "string",
		"landedCostMethod" => "LandedCostMethod",
		"landedCostPerLine" => "boolean",
		"transactionNumber" => "string",
		"expenseList" => "VendorBillExpenseList",
		"itemList" => "VendorBillItemList",
		"landedCostsList" => "PurchLandedCostList",
		"customFieldList" => "CustomFieldList",
		"purchaseOrderList" => "RecordRefList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

