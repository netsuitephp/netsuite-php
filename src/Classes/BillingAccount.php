<?php

namespace Fungku\NetSuite\Classes;

class BillingAccount extends Record {
	public $customForm;
	public $idNumber;
	public $customerDefault;
	public $customer;
	public $subsidiary;
	public $name;
	public $inactive;
	public $memo;
	public $createdDate;
	public $createdBy;
	public $currency;
	public $class;
	public $department;
	public $location;
	public $billingSchedule;
	public $frequency;
	public $startDate;
	public $lastBillDate;
	public $lastBillCycleDate;
	public $nextBillCycleDate;
	public $invoiceForm;
	public $cashSaleForm;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"idNumber" => "string",
		"customerDefault" => "boolean",
		"customer" => "RecordRef",
		"subsidiary" => "RecordRef",
		"name" => "string",
		"inactive" => "boolean",
		"memo" => "string",
		"createdDate" => "dateTime",
		"createdBy" => "string",
		"currency" => "RecordRef",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"frequency" => "BillingAccountFrequency",
		"startDate" => "dateTime",
		"lastBillDate" => "dateTime",
		"lastBillCycleDate" => "dateTime",
		"nextBillCycleDate" => "dateTime",
		"invoiceForm" => "RecordRef",
		"cashSaleForm" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

