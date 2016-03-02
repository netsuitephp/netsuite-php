<?php

namespace Fungku\NetSuite\Classes;

class PurchaseRequisition extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $source;
	public $subTotal;
	public $currencyName;
	public $exchangeRate;
	public $vatRegNum;
	public $nexus;
	public $taxRegNum;
	public $taxRegOverride;
	public $estimatedTotal;
	public $status;
	public $currency;
	public $entity;
	public $dueDate;
	public $tranDate;
	public $tranId;
	public $memo;
	public $approvalStatus;
	public $nextApprover;
	public $taxTotal;
	public $tax2Total;
	public $subsidiary;
	public $department;
	public $class;
	public $location;
	public $total;
	public $itemList;
	public $expenseList;
	public $accountingBookDetailList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"source" => "string",
		"subTotal" => "float",
		"currencyName" => "string",
		"exchangeRate" => "float",
		"vatRegNum" => "string",
		"nexus" => "RecordRef",
		"taxRegNum" => "RecordRef",
		"taxRegOverride" => "boolean",
		"estimatedTotal" => "float",
		"status" => "string",
		"currency" => "RecordRef",
		"entity" => "RecordRef",
		"dueDate" => "dateTime",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"memo" => "string",
		"approvalStatus" => "RecordRef",
		"nextApprover" => "RecordRef",
		"taxTotal" => "float",
		"tax2Total" => "float",
		"subsidiary" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"total" => "float",
		"itemList" => "PurchaseRequisitionItemList",
		"expenseList" => "PurchaseRequisitionExpenseList",
		"accountingBookDetailList" => "PurchaseRequisitionAccountingBookDetailList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

