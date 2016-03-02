<?php

namespace Fungku\NetSuite\Classes;

class BillingAccountSearchRowBasic extends SearchRowBasic {
	public $billingSchedule;
	public $cashSaleForm;
	public $class;
	public $currency;
	public $customer;
	public $customerDefault;
	public $dateCreated;
	public $department;
	public $externalId;
	public $frequency;
	public $idNumber;
	public $inactive;
	public $internalId;
	public $invoiceForm;
	public $lastBillCycleDate;
	public $lastBillDate;
	public $location;
	public $memo;
	public $name;
	public $nextBillCycleDate;
	public $startDate;
	public $subsidiary;
	public $customFieldList;
	static $paramtypesmap = array(
		"billingSchedule" => "SearchColumnSelectField[]",
		"cashSaleForm" => "SearchColumnSelectField[]",
		"class" => "SearchColumnSelectField[]",
		"currency" => "SearchColumnSelectField[]",
		"customer" => "SearchColumnSelectField[]",
		"customerDefault" => "SearchColumnBooleanField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"department" => "SearchColumnSelectField[]",
		"externalId" => "SearchColumnStringField[]",
		"frequency" => "SearchColumnEnumSelectField[]",
		"idNumber" => "SearchColumnStringField[]",
		"inactive" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnLongField[]",
		"invoiceForm" => "SearchColumnSelectField[]",
		"lastBillCycleDate" => "SearchColumnDateField[]",
		"lastBillDate" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"nextBillCycleDate" => "SearchColumnDateField[]",
		"startDate" => "SearchColumnDateField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

